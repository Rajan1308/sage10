<?php

namespace App\View\Components;

use Illuminate\View\Component;

class modalComponent extends Component
{
    // protected $acf = true;

    public $buttonName;
    public $buttonClasses;

    public $popupContent;

    protected $modalId;


    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct($buttonClasses, $buttonName, $popupContent, $modalId = null)
    {
        $this->modalid = $modalId;
        $this->buttonname = $buttonName;
        $this->buttonclasses = $buttonClasses;
        $this->buttoncontent = $popupContent;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('components.modal-component');
    }
}