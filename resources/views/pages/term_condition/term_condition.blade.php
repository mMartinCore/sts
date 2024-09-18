<x-app-layout>
<x-banner >Term and Condition</x-banner> 
    <div class="py-0">
        <div class="max-w-6xl mx-auto sm:px-6 lg:px-8">
            <div class="  overflow-hidden shadow-sm sm:rounded-lg">
                 <div class="container  font-serif text-gray-700    mx-auto flex flex-wrap flex-col md:flex-row items-center p-12">  
                   <h1  data-aos="flip-up" data-aos-duration="2000"  class="my-4 text-4xl font-bold font-serif leading-tight">Terms &amp; Condition</h1> 
                    @include("pages.term_condition.one_term") 
                    @include("pages.term_condition.two_term") 
                    @include("pages.term_condition.three_term") 
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
