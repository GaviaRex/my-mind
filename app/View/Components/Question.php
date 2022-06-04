<?php

namespace App\View\Components;

use Illuminate\View\Component;

class Question extends Component
{
    public $type;
    public $content;

    /**
     * Create a new component instance.
     * @param int $type
     * @param string $message
     * @return void
     */
    public function __construct(int $type, string $content)
    {
        $this->type = $type;
        $this->message = $content;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('components.question');
    }
}
