<?php

namespace App\View\Components\Form;

use Illuminate\View\Component;

class Checkbox extends Component
{
    public string $name;
    public string $label;
    public bool $checked;

    public function __construct(string $name, string $label, bool $checked = false)
    {
        $this->name = $name;
        $this->label = $label;
        $this->checked = $checked;
    }

    public function render()
    {
        return view('components.form.checkbox');
    }
}