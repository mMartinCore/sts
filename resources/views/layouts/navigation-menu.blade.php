<nav x-data="{ open: false }" class="bg-white border-b border-gray-100">
    <!-- Primary Navigation Menu -->
    <div class="px-4 mx-auto max-w-7xl sm:px-6 lg:px-8">
        <div class="flex justify-between h-16">
            <div class="flex">
                <!-- Navigation Links -->
                <div class="hidden space-x-8 sm:-my-px sm:ml-10 sm:flex">
                    <a href="/"  class="inline-flex items-center px-1 pt-0 pb-2 ">
                        <x-logo class="block w-auto h-32" />
                    </a>
                </div>
            </div>
            <div class="hidden sm:flex sm:items-center sm:ml-6">
                <!-- Settings Dropdown -->
                <div class="relative ml-3">
                    <x-jet-dropdown align="right" width="48">
                        <x-slot name="trigger">  
                          <span class="inline-flex items-center justify-center rounded-md">
                            <x-navLink href="/"  > {{ __('Home') }}  </x-navLink>
                                <x-navLink href="{{ route('pages.contact') }}" :active="request()->routeIs('pages.contact')">  {{ __('Contact') }}  </x-navLink>
                                <x-navLink href="{{ route('pages.rates') }}"  :active="request()->routeIs('pages.rates')"> {{ __('Rates') }} </x-navLink>
                                <x-navLink href="{{ route('pages.about') }}"  :active="request()->routeIs('pages.about')"> {{ __('About') }} </x-navLink>
                                <x-navLoginButton> {{ __('Login') }} </x-navLoginButton>
                                <x-navButton> {{ __('Register') }} </x-navButton> 
                            </span>                          
                        </x-slot>
                        <x-slot name="content">  </x-slot>
                    </x-jet-dropdown>
                </div>
            </div>

            <!-- Hamburger -->
            <div class="flex   items-center -mr-2 sm:hidden">
            <!-- Logo -->
               <a href="/"><x-logo class="w-full h-32  pb-1" /></a>
                <button @click="open = ! open"
                    class="inline-flex items-center justify-center p-2 text-gray-400 transition duration-150 ease-in-out rounded-md hover:text-gray-500 hover:bg-gray-100 focus:outline-none focus:bg-gray-100 focus:text-gray-500">
                    <svg class="w-6 h-6" stroke="currentColor" fill="none" viewBox="0 0 24 24">
                        <path :class="{'hidden': open, 'inline-flex': ! open }" class="inline-flex"
                            stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M4 6h16M4 12h16M4 18h16" />
                        <path :class="{'hidden': ! open, 'inline-flex': open }" class="hidden" stroke-linecap="round"
                            stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12" />
                    </svg>
                </button>
            </div>
        </div>
    </div>

    <!-- Responsive Navigation Menu -->
    <div :class="{'block': open, 'hidden': ! open}" class="hidden sm:hidden">    

        <!-- Responsive Settings Options -->
        <div class="pt-4 pb-1 border-t border-gray-200">
            <x-navLink href="/"  > {{ __('Home') }} </x-navLink>
            <x-navLink href="{{ route('pages.contact') }}" :active="request()->routeIs('pages.contact')"> {{ __('Contact') }} </x-navLink>
            <x-navLink  href="{{ route('pages.rates') }}"  :active="request()->routeIs('pages.rates')"> {{ __('Rates') }}  </x-navLink>
            <x-navLink  href="{{ route('pages.about') }}"  :active="request()->routeIs('pages.about')"> {{ __('About') }}  </x-navLink>
            <x-navLoginButton> {{ __('Login') }} </x-navLoginButton>
            <x-navButton> {{ __('Register') }} </x-navButton> 
      
        </div>
    </div>
</nav>