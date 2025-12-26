@extends('layouts.backend_login')

@section('css')
@endsection

@section('js_vendor')
@endsection

@section('js_page')
@endsection

@section('content')
	<x-auth.card title="Admin belépés" subtitle="Add meg az email címed és a jelszavad">
		<x-alert type="success" :message="session('success')" />
		<x-alert type="error" :errors="$errors" />

		<form method="POST" action="{{ route('admin_login_post') }}" class="space-y-4">
			@csrf

			<x-form.input
				name="email"
				type="email"
				label="Email"
				placeholder="admin@domain.hu"
				autocomplete="email"
				required
			/>

			<x-form.input
				name="password"
				type="password"
				label="Jelszó"
				autocomplete="current-password"
				required
			/>

			<x-form.checkbox
				name="remember"
				label="Emlékezz rám"
			/>

			<div class="flex items-center justify-center">
				<a href="{{ route('admin_registration') }}">
					Regisztáció
				</a>
			</div>

			<x-form.button>Belépés</x-form.button>
			<x-form.button type="button" :fullWidth="false">Mégse</x-form.button>
		</form>
	</x-auth.card>

@endsection