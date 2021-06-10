<?php

namespace App\View\Components;

use Illuminate\View\Component;

class Slider extends Component
{
    /**
     * Create a new component instance.
     *
     * @return void
     */

    public $images ;
    public $folder ;
    public function __construct($images , $folder)
    {
        $this->images= $images;
        $this->folder=$folder;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|string
     */
    public function render()
    {
        return view('components.slider');
    }
}
