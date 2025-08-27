<?php

namespace App\View\Components\Layouts\App;

use Illuminate\View\Component;

class Sidebar extends Component
{
    public $title;
    public $description;
    public $keywords;

    /**
     * Create a new component instance.
     */
    public function __construct($title = null, $description = null, $keywords = null)
    {
        $this->title = $title;
        $this->description = $description;
        $this->keywords = $keywords;
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render()
    {
        return view('components.layouts.app.sidebar');
    }
}
