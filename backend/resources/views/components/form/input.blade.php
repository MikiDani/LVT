@php
	$baseClass = 'mt-1 w-full rounded-lg border px-3 py-2 text-gray-900 shadow-sm focus:ring-2 focus:ring-gray-900/10';
	$normalClass = 'border-gray-300 focus:border-gray-900';
	$errorClass = 'border-red-500 focus:border-red-500 focus:ring-red-500/20';
@endphp

<div>
	<label for="{{ $name }}" class="block text-sm font-medium text-gray-700">
		{{ $label }}
	</label>

	<input
		id="{{ $name }}"
		name="{{ $name }}"
		type="{{ $type }}"
		value="{{ $value }}"
		placeholder="{{ $placeholder }}"
		autocomplete="{{ $autocomplete }}"
		@if($required) required @endif
		{{ $attributes->merge([
			'class' => $baseClass . ' ' . ($hasError() ? $errorClass : $normalClass)
		]) }}
	>

	@if($hasError())
		<p class="mt-1 text-sm text-red-600">
			{{ $firstError() }}
		</p>
	@endif
</div>
