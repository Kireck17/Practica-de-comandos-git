<button {{ $attributes->merge(['class' => 'inline-flex items-center px-4 py-2 bg-purple-500 border
   border-transparent rounded-md font-semibold text-sm text-white tracking-widest hover:bg-pink-400
   active:bg-green-500 focus:outline-none focus:border-green-500  focus:shadow-outline-green disabled:opacity-25
   transition ease-in-out duration-150']) }}>
   {{$slot}}
</button>