<?php

namespace App\View\Components;

use Illuminate\View\Component;

class Modal extends Component
{
    public $href;
    public $title;
    public $content;
    public $actionId;
    public $trigger;
    public $actions;
    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct($href, $title, $content, $id)
    {
        $this->href = $href;
        $this->title = $title;
        $this->content = $content;
        $this->actionId = $id;
        // dd($this->$href);
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|string
     */
    public function render()
    {
        return view('components.modal');
    }
}