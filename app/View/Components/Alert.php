<?php

namespace App\View\Components;

use Illuminate\View\Component;
use Illuminate\Support\Str;

class Alert extends Component
{
    public string $type;
    public string $message;

    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct($type, $message)
    {
        $this->type = $type;
        $this->message = $message;
    }

    /**
     * Whether the component should be rendered
     */
    public function shouldRender(): bool
    {
        return Str::length($this->message) > 0;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('components.alert');
    }
}
