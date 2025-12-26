<?php

namespace App\View\Components;

use Illuminate\View\Component;
use Illuminate\Support\ViewErrorBag;

class Alert extends Component
{
	public ?string $type;
	public ?string $message;
	public ?ViewErrorBag $errors;

	public function __construct(?string $type = null, ?string $message = null, ?ViewErrorBag $errors = null) {
		$this->type = $type;
		$this->message = $message;
		$this->errors = $errors;
	}

	public function render()
	{
		return view('components.alert');
	}
}
