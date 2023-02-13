<?php

namespace App\View\Components;

use Illuminate\View\Component;

class InputSearch extends Component
{
    public $placeholder, $url;
    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct($placeholder, $url)
    {
        $this->placeholder = $placeholder;
        $this->url = $url;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('components.input-search');
    }
}