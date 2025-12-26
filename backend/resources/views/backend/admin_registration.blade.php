@extends('layouts.backend_login')

@section('content')
	<div class="min-h-screen flex items-center justify-center px-4 bg-slate-950">
		<div class="w-full max-w-md bg-white border border-gray-200 rounded-xl shadow-sm p-6">
			<div class="mb-6">
				<h1 class="mb-4 text-2xl text-center font-semibold uppercase text-gray-900">Admin regisztráció</h1>
				<p class="text-sm text-gray-600 mt-1">Add meg az adatokat az admin fiók létrehozásához</p>
			</div>

			@if ($errors->any())
				<div class="mb-4 rounded-lg border border-red-200 p-3 text-sm text-red-700">
					<ul class="list-disc pl-5 space-y-1">
						@foreach ($errors->all() as $error)
							<li>{{ $error }}</li>
						@endforeach
					</ul>
				</div>
			@endif

			<form method="POST" action="{{ route('admin_registration_post') }}" class="space-y-4">
				@csrf

				<div>
					<label class="block text-sm font-medium text-gray-700">Név</label>
					<input name="name" type="text" value="{{ old('name') }}" required class="mt-1 w-full rounded-lg border border-gray-300 px-3 py-2">
				</div>

				<div>
					<label class="block text-sm font-medium text-gray-700">Email</label>
					<input name="email" type="email" value="{{ old('email') }}" required class="mt-1 w-full rounded-lg border border-gray-300 px-3 py-2">
				</div>

				<div>
					<label class="block text-sm font-medium text-gray-700">Jelszó</label>
					<input name="password" type="password" required class="mt-1 w-full rounded-lg border border-gray-300 px-3 py-2">
				</div>

				<div>
					<label class="block text-sm font-medium text-gray-700">Jelszó újra</label>
					<input name="password_confirmation" type="password" required class="mt-1 w-full rounded-lg border border-gray-300 px-3 py-2">
				</div>

                <div class="flex items-center justify-center">
					<a href="{{ route('admin_login') }}">Login</a>
				</div>

				<button type="submit"
					class="w-full rounded-lg bg-gray-900 px-4 py-2.5 text-sm font-semibold text-white">
					Regisztráció
				</button>
			</form>
		</div>
	</div>
@endsection
