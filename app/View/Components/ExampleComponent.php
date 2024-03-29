<?php

namespace App\View\Components;

use Illuminate\View\Component;

class ExampleComponent extends Component
{

    public $title;
    public $imageElement;

    protected $imageId;
    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct($title, $imageId = null)
    {
        $this->title = $title;
        $this->imageId = $imageId;
        $this->imageElement = $this->getImage();
    }

    protected function getImage()
    {
        if (!is_numeric($this->imageId)) {
            return false;
        }

        return wp_get_attachment_image($this->imageId, 'medium_large');
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('components.example-component');
    }
}