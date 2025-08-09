<?php

namespace App\View\Components;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class project_code extends Component
{
    public string $image;
    public string $title;
    public string $code_snippet;

    /**
     * Create a new component instance.
     */
    public function __construct(string $image, string $title, string $code_snippet)
    {
        $this->image = $image;
        $this->title = $title;
        $this->code_snippet = $code_snippet;
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.progect-code');
    }
}
