<?php

namespace App\View\Components;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class FormLayout extends Component
{
    public $fields;
    public $method;
    public $action;
    public $submitLabel;

    public function __construct($fields, $method = 'POST', $action = '', $submitLabel = '')
    {
        $this->fields = $fields;
        $this->method = $method;
        $this->action = $action;
        $this->submitLabel = $submitLabel;
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.form-layout');
    }
}
