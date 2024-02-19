<?php

namespace App\View\Components;

use Illuminate\View\Component;

class buttonComponent extends Component
{
    public $buttonLabel;
    public $buttonLink;
    public $buttonClass;
    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct($buttonLabel, $buttonLink, $buttonClass)
    {
        $this->buttonlabel = $buttonLabel;
        $this->buttonlink = $buttonLink;
        $this->buttonclass = $buttonClass;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('components.button-component');
    }
}