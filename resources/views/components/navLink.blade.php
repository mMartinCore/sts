@props(['active'])
  <!-- dd($active?? false ? $active : 'Not active'); -->
@php

$classes = ($active ?? false)
    ? 'block pl-3 pr-4 py-2 border-l-4 border-r-4 border-transparent text-base font-medium bg-red-300 text-gray-600 rounded-2xl text-gray-700  bg-green-50  border-green-300 '

    : ' block pl-3 pr-4 py-2 border-l-4 border-r-4 border-transparent  text-base font-medium text-gray-600 rounded-2xl
        hover:text-gray-700 hover:bg-green-50 hover:border-green-300 focus:outline-none focus:text-gray-800 focus:bg-gray-50
        focus:border-gray-300 transition duration-500 ease-in-out transform';


        @endphp
        <a  {{ $attributes->merge(['class' => $classes]) }}>
    {{ $slot }}
</a>