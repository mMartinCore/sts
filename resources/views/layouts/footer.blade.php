<section class="">
    <!-- <div class="container w-full p-20 m-4 mx-auto my-8 text-center bg-white border-2 border-dashed h-60 border-blueGray-300 rounded-xl">
                <p class="mt-20 italic tracking-tighter text-md text-blueGray-500 title-font">
                Vorkkloc Tech
                </p>
            </div> -->
</section>

<footer class="text-gray-700 border-t body-font">
    <div
        class="container flex flex-col flex-wrap p-8 mx-auto md:items-center lg:items-start md:flex-row md:flex-no-wrap ">
        <div class="flex-shrink-0 w-64 mx-auto text-center md:mx-0 md:text-left">
            <a class="flex items-center justify-center font-medium text-gray-900 title-font md:justify-start ">
                <div class="w-2 h-2 p-2 mr-2 rounded-full bg-gradient-to-tr from-cyan-400 to-lightBlue-500">
                </div>
                <div class="hidden space-x-8 sm:-my-px sm:ml-10 sm:flex">
                    <a href="/"  class="inline-flex items-center px-1 pt-0 pb-2 ">
                        <x-logo class="block w-auto h-32" />
                    </a>
                </div>


            </a>
        </div>
        <div class="flex flex-wrap flex-grow mt-8 -mb-10 text-left md:pl-20 md:mt-0 ">
            <div class="w-full px-4 lg:w-1/3 md:w-1/2">
                <h1 class="mb-3 text-sm font-semibold tracking-widest text-black uppercase title-font">
                    Social Network
                </h1>
                <nav class="mb-10 list-none">
                    <li> 
                         <a href="https://www.facebook.com/shiptosureja" class="mt-4 flex flex-row text-sm text-gray-600     hover:text-blue-500"> 
                           <div>
                                <svg fill="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    class="w-5 h-5" viewBox="0 0 24 24">
                                    <path d="M18 2h-3a5 5 0 00-5 5v3H7v4h3v8h4v-8h3l1-4h-4V7a1 1 0 011-1h3z"></path>
                                </svg>
                            </div>
                            <div>
                                Facebook
                            </div> 
                       </a>
                    </li>
                    <li>
                    <a href="https://twitter.com/shiptosureja"  class="mt-4 flex flex-row text-sm text-gray-600    hover:text-blue-500"> 
                           <div>
                           <svg fill="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                class="w-5 h-5 " viewBox="0 0 24 24">
                                <path
                                    d="M23 3a10.9 10.9 0 01-3.14 1.53 4.48 4.48 0 00-7.86 3v1A10.66 10.66 0 013 4s-4 9 5 13a11.64 11.64 0 01-7 2c9 5 20 0 20-11.5a4.5 4.5 0 00-.08-.83A7.72 7.72 0 0023 3z">
                                </path>
                            </svg>
                            </div>
                            <div>
                                Twitter
                            </div> 
                       </a>
                    </li>
                    <li>
                    <a href="https://www.instagram.com/shiptosureja/" class="mt-4 flex flex-row text-sm text-gray-600     hover:text-blue-500"> 
                           <div>
                           <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                            stroke-width="2" class="w-5 h-5 " viewBox="0 0 24 24">
                            <rect width="20" height="20" x="2" y="2" rx="5" ry="5"></rect>
                            <path d="M16 11.37A4 4 0 1112.63 8 4 4 0 0116 11.37zm1.5-4.87h.01"></path>
                          </svg>
                            </div>
                            <div class="px-1">
                                Instagram
                            </div> 
                       </a>
                    </li>
                 
                </nav>
            </div>
            <div class="w-full px-4 lg:w-1/3 md:w-1/2">
                <h1 class="mb-3 text-sm font-semibold tracking-widest text-black uppercase title-font">
                    Company
                </h1>
                <nav class="mb-10 list-none">
                   
                <x-jet-responsive-nav-link href="{{ route('pages.contact') }}" :active="request()->routeIs('pages.contact')">  {{ __('Contact') }}  </x-jet-responsive-nav-link>
                <x-jet-responsive-nav-link href="{{ route('pages.rates') }}"  :active="request()->routeIs('pages.rates')"> {{ __('Rates') }} </x-jet-responsive-nav-link>
                <x-jet-responsive-nav-link href="{{ route('pages.about') }}"  :active="request()->routeIs('pages.about')"> {{ __('About') }} </x-jet-responsive-nav-link>
                </nav>
            </div>
            <div class="w-full px-4 lg:w-1/3 md:w-1/2">
                <h1 class="mb-3 text-sm font-semibold tracking-widest text-black uppercase title-font">Legal
                </h1>
                <nav class="mb-10 list-none">
                  
                <x-jet-responsive-nav-link href="{{ route('pages.privacy') }}" :active="request()->routeIs('pages.privacy')">  {{ __('Privacy Policy') }}  </x-jet-responsive-nav-link>
                <x-jet-responsive-nav-link href="{{ route('pages.term_condition') }}"  :active="request()->routeIs('pages.term_condition')"> {{ __('Term and Condition') }} </x-jet-responsive-nav-link>
              
                </nav>
            </div>
        </div>
    </div>
    <div class="bg-black ">
        <div class="container flex flex-col flex-wrap px-5 py-6 mx-auto sm:flex-row pr-36">
            <p class="text-sm text-center text-gray-200 sm:text-left "> ShipToSureJa © 2020 - 2021
            </p>
            <span class="inline-flex justify-center mt-2 sm:ml-auto sm:mt-0 sm:justify-start">
                <a   href="https://www.facebook.com/shiptosureja"  class="text-white hover:text-blue-500">
                    <svg fill="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                        class="w-5 h-5" viewBox="0 0 24 24">
                        <path d="M18 2h-3a5 5 0 00-5 5v3H7v4h3v8h4v-8h3l1-4h-4V7a1 1 0 011-1h3z"></path>
                    </svg>
                </a>
                <a href="https://twitter.com/shiptosureja"  class="ml-4 text-white hover:text-blue-500">
                    <svg fill="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                        class="w-5 h-5" viewBox="0 0 24 24">
                        <path
                            d="M23 3a10.9 10.9 0 01-3.14 1.53 4.48 4.48 0 00-7.86 3v1A10.66 10.66 0 013 4s-4 9 5 13a11.64 11.64 0 01-7 2c9 5 20 0 20-11.5a4.5 4.5 0 00-.08-.83A7.72 7.72 0 0023 3z">
                        </path>
                    </svg>
                </a>
                <a href="https://www.instagram.com/shiptosureja/"  class="ml-4 text-white hover:text-blue-500">
                    <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                        stroke-width="2" class="w-5 h-5" viewBox="0 0 24 24">
                        <rect width="20" height="20" x="2" y="2" rx="5" ry="5"></rect>
                        <path d="M16 11.37A4 4 0 1112.63 8 4 4 0 0116 11.37zm1.5-4.87h.01"></path>
                    </svg>
                </a>
            </span>
        </div>

 <!-- SCROLL ICON HERE FOR SCROLL TO TOP -->
 <x-scrollToTop.scrollToTop/>




    </div>
</footer>