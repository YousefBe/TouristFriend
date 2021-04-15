<?php

namespace App\View\Components\Admins;

use Illuminate\View\Component;

class PoiForm extends Component
{
    /**
     * Create a new component instance.
     *
     * @return void
     */
    public $updating;
    public function __construct($updating)
    {
        $this->updating = $updating;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|string
     */
    public function render()
    {
        return view('components.admins.poi-form');
    }
}
