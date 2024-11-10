<nav x-data="{ open: false }" class="bg-white border-b border-gray-100 sticky top-0 z-50">
    <!-- Primary Navigation Menu -->
    <div class="px-4 mx-auto max-w-7xl sm:px-6 lg:px-8">
        <div class="flex justify-between h-16">
            <!-- Logo and Brand -->
            <div class="flex items-center">
                <a href="/" class="flex items-center">
                    <x-logo class="h-20 w-auto" />
                </a>
            </div>

            <!-- Desktop Navigation -->
            <div class="hidden sm:flex sm:items-center">
                <div class="flex space-x-4">
                    <x-navLink href="/" :active="request()->routeIs('home')">{{ __('Home') }}</x-navLink>
                    <x-navLink href="{{ route('pages.contact') }}" :active="request()->routeIs('pages.contact')">{{ __('Contact') }}</x-navLink>
                    <x-navLink href="{{ route('pages.rates') }}" :active="request()->routeIs('pages.rates')">{{ __('Rates') }}</x-navLink>
                    <x-navLink href="{{ route('pages.about') }}" :active="request()->routeIs('pages.about')">{{ __('About') }}</x-navLink>
                </div>
                <div class="flex items-center ml-6 space-x-3">
                    <x-navLoginButton>{{ __('Login') }}</x-navLoginButton>
                    <x-navButton>{{ __('Register') }}</x-navButton>
                </div>
            </div>

            <!-- Mobile menu button -->
            <div class="flex items-center sm:hidden">
                <button @click="open = ! open" class="inline-flex items-center justify-center p-2 rounded-md text-gray-500 hover:text-gray-600 hover:bg-gray-100 focus:outline-none focus:bg-gray-100 focus:text-gray-600 transition duration-150 ease-in-out">
                    <svg class="h-6 w-6" stroke="currentColor" fill="none" viewBox="0 0 24 24">
                        <path :class="{'hidden': open, 'inline-flex': ! open }" class="inline-flex" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16" />
                        <path :class="{'hidden': ! open, 'inline-flex': open }" class="hidden" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12" />
                    </svg>
                </button>
            </div>
        </div>
    </div>

    <!-- Mobile Navigation Menu -->
    <div :class="{'block': open, 'hidden': ! open}" class="sm:hidden">
        <div class="pt-2 pb-3 space-y-1">
            <x-navLink href="/" :active="request()->routeIs('home')" class="block px-4 py-2">{{ __('Home') }}</x-navLink>
            <x-navLink href="{{ route('pages.contact') }}" :active="request()->routeIs('pages.contact')" class="block px-4 py-2">{{ __('Contact') }}</x-navLink>
            <x-navLink href="{{ route('pages.rates') }}" :active="request()->routeIs('pages.rates')" class="block px-4 py-2">{{ __('Rates') }}</x-navLink>
            <x-navLink href="{{ route('pages.about') }}" :active="request()->routeIs('pages.about')" class="block px-4 py-2">{{ __('About') }}</x-navLink>
            <div class="px-4 py-2 space-y-2">
                <x-navLoginButton class="w-full justify-center">{{ __('Login') }}</x-navLoginButton>
                <x-navButton class="w-full justify-center">{{ __('Register') }}</x-navButton>
            </div>
        </div>
    </div>
</nav>