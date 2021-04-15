<?php

namespace App\View\Components\Admins;

use Illuminate\View\Component;

class CountriesNav extends Component
{
    /**
     * Create a new component instance.
     *
     * @return void
     */
    public $CountryId;

    public function __construct($id)
    {
        $this->CountryId = $id;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|string
     */
    public function render()
    {
        return view('components.admins.countries-nav');
    }
}