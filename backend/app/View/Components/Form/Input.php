<?php

namespace App\View\Components\Form;

use Illuminate\View\Component;
use Illuminate\Support\ViewErrorBag;

class Input extends Component
{
	public string $name;
	public string $type;
	public string $label;
	public $value;
	public bool $required;
	public ?string $placeholder;
	public ?string $autocomplete;
	public ViewErrorBag $errors;

	public function __construct(string $name, string $label, string $type = 'text', $value = null, bool $required = false, ?string $placeholder = null, ?string $autocomplete = null,)
	{
		$this->name = $name;
		$this->label = $label;
		$this->type = $type;
		$this->value = old($name, $value);
		$this->required = $required;
		$this->placeholder = $placeholder;
		$this->autocomplete = $autocomplete;
		$this->errors = session()->get('errors', app(ViewErrorBag::class));
	}

	public function hasError(): bool
	{
		return $this->errors->has($this->name);
	}

	public function firstError(): ?string
	{
		return $this->errors->first($this->name);
	}

	public function render()
	{
		return view('components.form.input');
	}
}
