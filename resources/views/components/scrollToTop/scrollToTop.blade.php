<div onclick="scrollToTop();" class="fixed scrollToTop  mr-12   bottom-0 right-0 z-10 flex items-end justify-end mb-4  ">
            <a target="_blank"
                class=" block w-16 h-16 transition-all transform   duration-700 ease-in-out  rounded-full shadow hover:shadow-lg hover:scale-150 hover:rotate-360 ">
                <svg class="bg-white rounded-full shadow-2xl  " xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20"
                    fill="currentColor">
                    <path fill-rule="evenodd"
                        d="M4.293 15.707a1 1 0 010-1.414l5-5a1 1 0 011.414 0l5 5a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414 0zm0-6a1 1 0 010-1.414l5-5a1 1 0 011.414 0l5 5a1 1 0 01-1.414 1.414L10 5.414 5.707 9.707a1 1 0 01-1.414 0z"
                        clip-rule="evenodd" />
                </svg>
            </a>
        </div>
        <script>
        document.querySelector('.scrollToTop').style.visibility = 'hidden';

        window.addEventListener("scroll", function(){
            scroll=window.scrollY;
            if (scroll>500) {               
                document.querySelector('.scrollToTop').style.visibility = 'visible'; 
            } else {
                document.querySelector('.scrollToTop').style.visibility = 'hidden';
            }
        }); 

        function scrollToTop() {
            var scrollToTop = window.setInterval(function() {
                var pos = window.pageYOffset;
                if (pos > 0) {
                    window.scrollTo(0, pos - 30); // how far to scroll on each step
                } else {
                    window.clearInterval(scrollToTop);
                }
            }, 16);
        }
        </script>