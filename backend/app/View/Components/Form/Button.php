<?php

namespace App\View\Components\Form;

use Illuminate\View\Component;

class Button extends Component
{
	public string $type;
	public bool $fullWidth;

	public function __construct(string $type = 'submit', bool $fullWidth = true)
	{
		$this->type = $type;
		$this->fullWidth = $fullWidth;
	}

	public function render()
	{
		return view('components.form.button');
	}
}