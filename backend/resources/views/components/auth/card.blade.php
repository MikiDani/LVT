<div class="min-h-screen flex items-center justify-center px-4 bg-slate-950">
	<div class="w-full max-w-md bg-white border border-gray-200 rounded-xl shadow-sm p-6">
		<div class="mb-6 text-center">
			<h1 class="mb-2 text-2xl font-semibold uppercase text-gray-900">
				{{ $title }}
			</h1>

			@if($subtitle)
				<p class="text-sm text-gray-600">
					{{ $subtitle }}
				</p>
			@endif
		</div>

		{{ $slot }}
	</div>
</div>
