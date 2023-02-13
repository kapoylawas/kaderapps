<?php

namespace App\View\Components;

use Illuminate\View\Component;

class Modal extends Component
{
    public $id, $url, $title, $titleBtn;
    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct($id, $url, $title, $titleBtn)
    {
        $this->id = $id;
        $this->url = $url;
        $this->title = $title;
        $this->titleBtn = $titleBtn;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('components.modal');
    }
}