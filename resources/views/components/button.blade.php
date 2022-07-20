<button
    {{ $attributes->merge(['type' => 'submit', 'class' => 'inline-flex items-center justify-center px-4 py-3 bg-base-color center border border-transparent rounded-[4px] font-semibold text-xs text-white uppercase tracking-widest hover:bg-[#d74966] active:bg-[#b50f30] focus:outline-none focus:border-[#b50f30] focus:ring ring-gray-300 disabled:opacity-25 transition ease-in-out duration-150']) }}>
    {{ $slot }}
</button>