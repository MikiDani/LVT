@extends('layouts.backend_default')

@section('css')
@endsection

@section('js_vendor')
@endsection

@section('js_page')
@endsection

@section('content')
	<div class="" style="color:black;">
		Dashboard...
		@role('admin')
			@dump(Auth::user())
		@endrole

		@role('visitor')
			<div class="p-3 bg-blue-400 text-brown-900">VISITOR</div>
		@endrole

		@can('view dashboard')
			<div class="p-3 bg-amber-400 text-brown-900">View dashboard</div>
		@endcan
	</div>
@endsection
