<button {{ $attributes->merge(['class' => 'flex justify-center items-center px-4 py-2 bg-white border 
border-gray-300 rounded-md font-semibold text-sm text-gray-700 tracking-widest shadow-sm hover:text-pink-500
 focus:outline-none focus:border-blue-300 focus:shadow-outline-blue active:text-gray-800 active:bg-gray-50 transition 
 ease-in-out duration-150']) }}>
    {{ $slot }}
</button>