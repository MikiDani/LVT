@if($type === 'success' && $message)
	<div class="mb-4 rounded-lg border border-green-200 bg-green-50 p-3 text-sm text-green-700">
		{{ $message }}
	</div>
@endif

@if($type === 'error' && $errors && $errors->any())
	<div class="mb-4 rounded-lg border border-red-200 p-3 text-sm text-red-700">
		<ul class="list-disc pl-5 space-y-1">
			@foreach($errors->all() as $error)
				<li>{{ $error }}</li>
			@endforeach
		</ul>
	</div>
@endif
