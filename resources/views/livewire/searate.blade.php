
    <div class="   px-4 ">   
        <div class="flex flex-col w-full overflow-hidden shadow-md p-4 sm:rounded-lg">
            <div class=" ">
                <table class="w-full text-md  text-gray-900    border border-2 rounded-lg ">
                    <thead>
                        <tr class="border-b ">
                            <th class="text-center    text-2xl  py-4 p-2">Pounds (lbs)</th>
                            <th class="text-left  text-2xl  py-4  p-2"> Sea Rate (JMD)</th>
                        </tr>
                    </thead>
                    <tbody class="text-gray-700  justify-center items-left">
                    <div class="text-center justify-center items-center mx-auto px-4 text-2xl text-gray-700 font-semibold" wire:loading.delay.longer>
                            LOADING RATES...
                        </div>
                        @if (!empty($searate))
                            @foreach($searate->data as $key => $rate)
                            @if ($loop->odd)
                                <tr class="border-b   hover:bg-amber-50  hover:text-amber-100  bg-gray-100">
                                    <th class=" pl-6 text-amber-700 font-bold text-2xl p-2  py-4">
                                        {{ $rate->name }}</th>
                                    <td class=" text-amber-700 font-bold   text-2xl p-2  py-4">$
                                        {{ $rate->price }}</td>
                                </tr>
                            @endif
                            @if ($loop->even)
                                <tr class="border-b hover:bg-amber-50  hover:text-amber-100  bg-gray-100">
                                    <th class="pl-6 p-2 text-amber-700 font-bold text-2xl py-4">{{ $rate->name }}
                                    </th>
                                    <td class="p-2  text-amber-700 font-bold text-2xl py-4">$
                                        {{ $rate->price, 2 }}</td>
                                </tr>
                            @endif
                            @endforeach
                        @else
                            <tr colspan="2"  class="text-2xl text-center"> <td>No Sea Rates</td></tr>
                        @endif

                    </tbody>
                </table>

            </div>
             <div class="text-center justify-center items-center mx-auto px-4 text-2xl text-gray-700 font-semibold" wire:loading.delay.longer>
                            LOADING SEA RATES...
                        </div>
            <div class="py-4"> 
                <div class="flex flex-wrap mt-4">
                    @foreach ($sealinks as $link)
                        <div>
                            @if ($link->url === null)
                                <div
                                    class="mr-1 mb-1 px-5 py-4 text-sm leading-4 text-gray-400 border rounded cursor-pointer">
                                    {!! $link->label !!}
                                </div>
                            @else
                                <div wire:click="getlink('{{ $link->url }}')"
                                    class="mr-1 mb-1 cursor-pointer px-5 py-4 text-sm leading-4 border rounded hover:bg-blue-700 hover:text-blue-100 focus:border-primary focus:text-primary" >
                                    {!! $link->label !!}
                                </div>
                            @endif
                        </div>
                    @endforeach
                </div> 

            </div>


        </div>
        
        <!-- notes  -->
        <div class="mx-auto px-4 py-3 mt-4 bg-amber-50 border-l-4 border-amber-300 rounded-r-lg shadow-sm hover:bg-amber-100 transition-colors duration-200">
            <div class="flex items-center space-x-2 text-amber-800">
                <svg class="w-5 h-5 flex-shrink-0" fill="currentColor" viewBox="0 0 20 20">
                    <path fill-rule="evenodd" d="M18 10a8 8 0 11-16 0 8 8 0 0116 0zm-7-4a1 1 0 11-2 0 1 1 0 012 0zM9 9a1 1 0 000 2v3a1 1 0 001 1h1a1 1 0 100-2v-3a1 1 0 00-1-1H9z" clip-rule="evenodd"/>
                </svg>
                <p class="text-sm font-medium leading-tight">
                    Packages over 100 lbs use volumetric pricing: (L × W × H in inches) ÷ 166
                </p>
            </div>
        </div>

    </div>
