<?php

namespace App\View\Components\Auth;

use Illuminate\View\Component;

class Card extends Component
{
	public string $title;
	public string $subtitle;

	public function __construct(string $title, string $subtitle = '')
	{
		$this->title = $title;
		$this->subtitle = $subtitle;
	}

	public function render()
	{
		return view('components.auth.card');
	}
}