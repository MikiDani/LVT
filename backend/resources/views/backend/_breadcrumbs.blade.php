@if($breadcrumbs)
    @foreach ($breadcrumbs as $link => $name )
        <a href="{{ $link }}">{{ $name }}</a>
    @endforeach
@endif