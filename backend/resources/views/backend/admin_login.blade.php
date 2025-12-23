@extends('layouts.backend_default')

@section('css')
@endsection

@section('js_vendor')
@endsection

@section('js_page')
@endsection

@section('content')
	<div class="min-h-[70vh] flex items-center justify-center px-4 bg-red-500">
		<div class="w-full max-w-md bg-white border border-gray-200 rounded-xl shadow-sm p-6">
			<div class="mb-6">
				<h1 class="text-2xl font-semibold text-gray-900">Admin belépés</h1>
				<p class="text-sm text-gray-600 mt-1">Add meg az email címed és a jelszavad</p>
			</div>

			@if ($errors->any())
				<div class="mb-4 rounded-lg border border-red-200 bg-red-50 p-3 text-sm text-red-700">
					<ul class="list-disc pl-5 space-y-1">
						@foreach ($errors->all() as $error)
							<li>{{ $error }}</li>
						@endforeach
					</ul>
				</div>
			@endif

			<form method="POST" action="{{ url('/admin/login') }}" class="space-y-4">
				@csrf

				<div>
					<label for="email" class="block text-sm font-medium text-gray-700">Email</label>
					<input id="email" name="email" type="email" value="{{ old('email') }}" autocomplete="email" required
						class="mt-1 w-full rounded-lg border border-gray-300 bg-white px-3 py-2 text-gray-900 placeholder-gray-400 shadow-sm focus:border-gray-900 focus:ring-2 focus:ring-gray-900/10"
						placeholder="admin@domain.hu" value="admin@domain.hu">
				</div>

				<div>
					<label for="password" class="block text-sm font-medium text-gray-700">Jelszó</label>
					<input id="password" name="password" type="password" autocomplete="current-password" required
						class="mt-1 w-full rounded-lg border border-gray-300 bg-white px-3 py-2 text-gray-900 placeholder-gray-400 shadow-sm focus:border-gray-900 focus:ring-2 focus:ring-gray-900/10"
						placeholder="••••••••" value="12345678">
				</div>

				<div class="flex items-center justify-between">
					<label class="inline-flex items-center gap-2 text-sm text-gray-700">
						<input type="checkbox" name="remember"
							class="h-4 w-4 rounded border-gray-300 text-gray-900 focus:ring-gray-900/20">
						Emlékezz rám
					</label>
				</div>

				<button type="submit"
					class="w-full rounded-lg bg-gray-900 px-4 py-2.5 text-sm font-semibold text-white shadow-sm hover:bg-gray-800 focus:outline-none focus:ring-2 focus:ring-gray-900/20">
					Belépés
				</button>
			</form>

			<div class="mt-6 text-xs text-gray-500">
				{{-- @dump($breadcrumbs) --}}
			</div>
		</div>
	</div>
@endsection