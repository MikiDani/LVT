<button
	type="{{ $type }}"
	class="{{ $fullWidth ? 'w-full' : '' }} rounded-lg bg-gray-900 px-4 py-2.5 text-sm font-semibold text-white shadow-sm hover:bg-gray-800 focus:outline-none focus:ring-2 focus:ring-gray-900/20"
>
	{{ $slot }}
</button>