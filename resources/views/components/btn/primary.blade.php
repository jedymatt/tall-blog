<button {{  $attributes->merge(['class' => 'flex items-center justify-center p-2 bg-indigo-500 rounded-md shadow-lg shadow-indigo-500/50 hover:bg-indigo-800 focus:bg-indigo-700 text-sm focus:ring ring-indigo-300 text-white font-medium']) }}>
    {{ $slot }}
</button>
