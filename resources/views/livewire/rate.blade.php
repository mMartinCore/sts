 

    <div class=" flex flex-cols justify-center px-4 ">
        {{-- <iframe class="  " src="https://sts.jashippers.com/team_rate" width="100%" height="800"
                            scrolling="auto" frameborder="0"></iframe> --}}



        <div class="flex flex-col w-full overflow-hidden shadow-md p-4 sm:rounded-lg">
            <div class=" ">
                <table class="w-full text-md  text-gray-900    border border-2 rounded-lg    ">
                    <thead>
                        <tr class="border-b ">
                            <th class="text-center    text-2xl  py-4 p-2">Pounds (lbs)</th>
                            <th class="text-left  text-2xl  py-4  p-2">RATE (JMD)</th>
                        </tr>
                    </thead>
                    <tbody class="text-gray-700  justify-center items-left">
                    <div class="text-center justify-center items-center mx-auto px-4 text-2xl text-gray-700 font-semibold" wire:loading.delay.longer>
                            LOADING RATES...
                        </div>
                        @if (!empty($rates))
                            @foreach($rates->data as $key => $rate)
                            @if ($loop->odd)
                                <tr class="border-b   hover:bg-green-50  hover:text-green-100  bg-gray-100">
                                    <th class=" pl-6 text-green-700 font-bold text-2xl p-2  py-4">
                                        {{ $rate->name }}</th>
                                    <td class=" text-green-700 font-bold   text-2xl p-2  py-4">$
                                        {{ $rate->price }}</td>
                                </tr>
                            @endif
                            @if ($loop->even)
                                <tr class="border-b hover:bg-green-50  hover:text-green-100  bg-gray-100">
                                    <th class="pl-6 p-2 text-blue-700 font-bold text-2xl py-4">{{ $rate->name }}
                                    </th>
                                    <td class="p-2  text-blue-700 font-bold text-2xl py-4">$
                                        {{ $rate->price, 2 }}</td>
                                </tr>
                            @endif
                            @endforeach
                        @else
                            <tr colspan="2"  class="text-2xl"> <td>No Rates</td></tr>
                        @endif

                    </tbody>
                </table>

            </div>
             <div class="text-center justify-center items-center mx-auto px-4 text-2xl text-gray-700 font-semibold" wire:loading.delay.longer>
                            LOADING RATES...
                        </div>
            <div class="py-4">
                {{-- <div v-if="links.length > 3"> --}}
                <div class="flex flex-wrap mt-4">
                    @foreach ($links as $link)
                        <div>
                            @if ($link->url === null)
                                <div
                                    class="mr-1 mb-1 px-5 py-4 text-sm leading-4 text-gray-400 border rounded cursor-pointer">
                                    {!! $link->label !!}
                                </div>
                            @else
                                <div wire:click="getlink('{{ $link->url }}')"
                                    class="mr-1 mb-1 cursor-pointer px-5 py-4 text-sm leading-4 border rounded hover:bg-blue-700 hover:text-blue-100 focus:border-primary focus:text-primary"
                                    {{-- @if ($link->active) bg-blue-900 text-blue-100 @endif " --}} {{-- href="{{$link->url}}" --}}>
                                    {!! $link->label !!}
                                </div>
                            @endif
                        </div>
                    @endforeach
                </div>
                {{-- </div> --}}

            </div>


        </div>


    </div>
