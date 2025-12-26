@extends('layouts.backend_login')

@section('content')
	<x-auth.card
		title="Admin regisztráció"
		subtitle="Add meg az adatokat az admin fiók létrehozásához"
	>
		<x-alert type="error" :errors="$errors" />

		<form method="POST" action="{{ route('admin_registration_post') }}" class="space-y-4">
			@csrf

			<x-form.input
				name="name"
				label="Név"
				required
			/>

			<x-form.input
				name="email"
				type="email"
				label="Email"
				autocomplete="email"
				required
			/>

			<x-form.input
				name="password"
				type="password"
				label="Jelszó"
				autocomplete="new-password"
				required
			/>

			<x-form.input
				name="password_confirmation"
				type="password"
				label="Jelszó újra"
				autocomplete="new-password"
				required
			/>

			<div class="flex items-center justify-center">
				<a href="{{ route('admin_login') }}">
					Login
				</a>
			</div>

			<x-form.button>
				Regisztráció
			</x-form.button>
		</form>
	</x-auth.card>
@endsection
