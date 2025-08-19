<?php

namespace App\Livewire;

use Livewire\Component;

class BlogComments extends Component
{
    public $blogId;
    public $name;
    public $comment;
    public $captcha_num1;
    public $captcha_num2;
    public $captcha_answer;

    public function mount($blogId)
    {
        $this->blogId = $blogId;
        $this->generateCaptcha();
    }

    public function generateCaptcha()
    {
        $this->captcha_num1 = rand(1, 10);
        $this->captcha_num2 = rand(1, 10);
        $this->captcha_answer = '';
    }

    public function submitComment()
    {
        $this->validate([
            'name' => 'required|string|max:255',
            'comment' => 'required|string',
            'captcha_answer' => 'required|numeric',
        ]);

        if ((int)$this->captcha_answer !== ($this->captcha_num1 + $this->captcha_num2)) {
            $this->addError('captcha_answer', 'Incorrect answer to the math question.');
            return;
        }

        \App\Models\Comment::create([
            'blog_id' => $this->blogId,
            'name' => $this->name,
            'comment' => $this->comment,
        ]);

        $this->reset('name', 'comment', 'captcha_answer');
        $this->generateCaptcha();
        $this->dispatch('hide-comment-form');
    }

    public function render()
    {
        $comments = \App\Models\Comment::where('blog_id', $this->blogId)->latest()->get();
        return view('livewire.blog-comments', [
            'comments' => $comments,
            'captcha_num1' => $this->captcha_num1,
            'captcha_num2' => $this->captcha_num2,
        ]);
    }
}
