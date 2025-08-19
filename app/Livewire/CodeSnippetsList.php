<?php

namespace App\Livewire;

use Livewire\Component;
use App\Models\CodeSnippets;


class CodeSnippetsList extends Component
{
    public function render()
    {


        $snippets = CodeSnippets::orderBy('type')->get();
        return view('livewire.code-snippets-list', compact('snippets'));
    }
}
