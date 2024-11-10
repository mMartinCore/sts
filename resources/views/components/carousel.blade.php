<!-- Keep the original CDN links -->
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@splidejs/splide@2.4.21/dist/css/splide.min.css">
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@splidejs/splide@2.4.21/dist/css/themes/splide-skyblue.min.css">

<style>
/* Carousel Container */
.splide {
    width: 100%;
    max-width: auto;
    margin: 0 auto;
    position: relative;
}

/* Slide Content Styling */
.slide-content {
    display: flex;
    flex-direction: row;
    align-items: center;
    justify-content: center;
    padding: 4rem 6rem;
    min-height: 700px;
    box-sizing: border-box;
    gap: 1.5rem;
    max-width: 1400px;
    margin: 0 auto;
}

.slide-content_china {
    display: flex;
    flex-direction: row;
    align-items: center;
    justify-content: space-between;
    padding: 4rem 6rem;
    min-height: 700px;
    box-sizing: border-box;
    gap: 4rem;
}

/* Text Section */
.slide-text {
    flex: 0 1 auto;
    max-width: 600px;
    padding: 0;
}


.slide-text h2 {
    font-size: 1rem;
    font-weight: 700;
    letter-spacing: 0.1em;
    text-transform: uppercase;
    color: #ffd700;
    margin-bottom: 1rem;
    opacity: 0.9;
}

.slide-text h1 {
    font-size: 3.5rem;
    font-weight: 800;
    color: #ffffff;
    margin-bottom: 1.5rem;
    line-height: 1.1;
    letter-spacing: -0.02em;
}

.slide-text p {
    font-size: 1.125rem;
    line-height: 1.7;
    color: rgba(255, 255, 255, 0.9);
    margin-bottom: 2rem;
    font-weight: 400;
}

.slide-text .button-group {
    display: flex;
    gap: 1.25rem;
}

/* Image Section */
.slide-image {
    flex: 0 1 auto;
    display: flex;
    justify-content: center;
    align-items: center;
    padding: 0;
}

.slide-image img {
    width: auto;
    height: auto;
    max-height: 550px;
    max-width: 100%;
    
    object-fit: contain;
    border-radius: 1.5rem;
    box-shadow: 0 20px 40px rgba(0, 0, 0, 0.3);
    transition: transform 0.5s ease, box-shadow 0.5s ease;
}

.slide-image img:hover {
    transform: translateY(-10px);
    box-shadow: 0 25px 50px rgba(0, 0, 0, 0.4);
}

/* Modern Gradient Backgrounds */
.imgFirst {
    background: linear-gradient(135deg, #0f172a 0%, #1e40af 100%);
}

.secondBgColorx {
    background: linear-gradient(135deg, #1d2a0f 0%, #6baf1e 100%);
}

.thirdBgColor {
    background: linear-gradient(135deg, #18181b 0%, #3f3f46 100%);
}

.fourthBgColor {
    background: linear-gradient(135deg, #1a365d 0%, #2d3748 100%);
}

/* Modern Button Styling */
.primary {
    display: inline-block;
    background-color: transparent;
    color: #ffffff;
    padding: 1rem 2rem;
    border: 2px solid #ffffff;
    border-radius: 0.75rem;
    font-weight: 600;
    font-size: 1rem;
    cursor: pointer;
    transition: all 0.3s ease;
    backdrop-filter: blur(10px);
    text-decoration: none;
}

.primary:hover {
    background-color: rgba(255, 255, 255, 0.1);
    transform: translateY(-2px);
    box-shadow: 0 6px 12px rgba(0, 0, 0, 0.15);
    text-decoration: none;
}

.secondary {
    display: inline-block;
    background-color: rgba(255, 255, 255, 0.1);
    backdrop-filter: blur(10px);
    border: 1px solid rgba(255, 255, 255, 0.2);
    color: #ffffff;
    padding: 1rem 2rem;
    border-radius: 0.75rem;
    font-weight: 600;
    font-size: 1rem;
    cursor: pointer;
    transition: all 0.3s ease;
    text-decoration: none;
}

.secondary:hover {
    background-color: rgba(255, 255, 255, 0.2);
    border-color: rgba(255, 255, 255, 0.3);
    transform: translateY(-2px);
    text-decoration: none;
}

/* Navigation Arrows Styling */
.splide__arrows {
    position: absolute;
    top: 50%;
    left: 0;
    width: 100%;
    height: 0;
    display: flex;
    justify-content: space-between;
    pointer-events: none;
    transform: translateY(-50%);
    padding: 0 2rem;
    z-index: 10;
}

.splide__arrow {
    width: 3.5rem;
    height: 3.5rem;
    background: rgba(255, 255, 255, 0.95);
    border-radius: 50%;
    cursor: pointer;
    pointer-events: auto;
    display: flex;
    align-items: center;
    justify-content: center;
    transition: background-color 0.3s ease, transform 0.3s ease;
    box-shadow: 0 4px 12px rgba(0, 0, 0, 0.1);
}

.splide__arrow:hover {
    background: #669830; 
    box-shadow: 0 6px 16px rgba(0, 0, 0, 0.15);
}

.splide__arrow svg {
    fill: #0f172a;
    width: 1.5rem;
    height: 1.5rem;
}

/* Pagination Styling */
.splide__pagination {
    position: absolute;
    bottom: 1.5rem;
    width: 100%;
    display: flex;
    justify-content: center;
    padding: 0;
    margin: 0;
    list-style: none;
    z-index: 10;
}

.splide__pagination__page {
    width: 12px;
    height: 12px;
    margin: 0 6px;
    background: rgba(255, 255, 255, 0.3);
    border-radius: 50%;
    transition: all 0.3s ease;
    cursor: pointer;
}

.splide__pagination__page.is-active {
    background: rgba(255, 255, 255, 0.9);
    transform: scale(1.3);
}

/* Responsive Design */
@media (max-width: 1280px) {
    .slide-content {
        padding: 3rem 4rem;
        gap: 3rem;
    }

 
    .slide-image img {
        max-height: 450px;
    }
}

@media (max-width: 1024px) {
    .slide-content {
        padding: 3rem;
        gap: 2rem;
    }

    .slide-text h1 {
        font-size: 2.5rem;
    }

    .slide-text p {
        font-size: 1rem;
    }

    .slide-image img {
        max-height: 400px;
    }
}

@media (max-width: 768px) {
    .slide-content {
        flex-direction: column;
        text-align: center;
        padding: 2rem;
        min-height: auto;
        gap: 2rem;
    }

    .slide-text {
        max-width: 100%;
        padding: 0 1rem;
    }

    .slide-text h2 {
        font-size: 0.875rem;
    }

    .slide-text h1 {
        font-size: 2rem;
        margin-bottom: 1rem;
    }

    .slide-text p {
        font-size: 0.975rem;
        margin-bottom: 1.5rem;
    }

    .slide-text .button-group {
        justify-content: center;
        flex-wrap: wrap;
        gap: 1rem;
    }

    .slide-image {
        width: 100%;
        padding: 0;
    }

    .slide-image img {
        max-height: 300px;
        width: 100%;
        border-radius: 1rem;
    }

    button.primary,
    button.secondary {
        width: 100%;
        max-width: 300px;
        padding: 0.875rem 1.5rem;
        font-size: 0.975rem;
    }

    .splide__arrow {
        width: 3rem;
        height: 3rem;
    }

    .splide__arrow svg {
        width: 1.2rem;
        height: 1.2rem;
    }
}

.list_responsive {
    display: flex;
    gap: 4px !important;
}

@media (max-width: 480px) {
    .slide-content {
        padding: 1.5rem 1rem;
        gap: 1.5rem;
    }

    .slide-text h1 {
        font-size: 1.75rem;
    }

    .slide-text p {
        font-size: 0.875rem;
        line-height: 1.6;
    }

    .slide-image img {
        max-height: 250px;
        border-radius: 0.75rem;
    }

    button.primary,
    button.secondary {
        padding: 0.75rem 1.25rem;
        font-size: 0.875rem;
    }

    .splide__arrow {
        width: 2.5rem;
        height: 2.5rem;
    }

    .splide__arrow svg {
        width: 1rem;
        height: 1rem;
    }

    .splide__pagination__page {
        width: 10px;
        height: 10px;
        margin: 0 4px;
    }
}

@media (max-width: 768px) {
    .splide__pagination {
        bottom: 1rem;
    }
}

@media (max-width: 480px) {
    .splide__pagination {
        bottom: 0.75rem;
        bottom: 0.75rem; /* Further adjusted for very small screens */
    }
}

@media (hover: none) {
    /* Disable hover effects on touch devices */
    .slide-image img:hover {
        transform: none;
        box-shadow: 0 20px 40px rgba(0, 0, 0, 0.3);
      
    }

    button.primary:hover,
    button.secondary:hover {
        transform: none;
    }

    /* Keep pagination visible on touch devices */
    .splide__pagination__page {
        cursor: pointer;
    }
}

.text-overlay {
    max-width: 600px;
    margin: 0 auto;
}

.text-overlay h2 {
    margin-bottom: 1rem;
    font-size: 2.5rem;
}

.text-overlay ul {
    list-style-type: none;
    padding: 0;
    margin: 1.5rem 0;
}

.text-overlay li {
    margin: 0.5rem 0;
    font-size: 1.2rem;
}

.cta-button {
    background: #007bff;
    color: white;
    border: none;
    padding: 0.8rem 1.5rem;
    border-radius: 5px;
    font-size: 1.1rem;
    cursor: pointer;
    transition: background 0.3s ease;
}

.cta-button:hover {
    background: #0056b3;
}

/*  
.china-service-slide {
    text-align: center;
    max-width: 800px;
    margin: 0 auto;
    padding: 2rem;
}

.china-service-slide ul {
    list-style: none;
    padding: 0;
    margin: 2rem 0;
}

.china-service-slide li {
    background: rgba(255, 255, 255, 0.1);
    backdrop-filter: blur(10px);
    margin: 1rem 0;
    padding: 1rem 2rem;
    border-radius: 12px;
    font-size: 1.1rem;
    color: #ffffff;
    transition: transform 0.3s ease;
}

.china-service-slide li:hover {
    transform: translateY(-2px);
    background: rgba(255, 255, 255, 0.15);
}
/* 
/* Modern styling for China Service slide */
.china-service-slide {
    text-align: left; /* Left-aligned text for modern look */
    max-width: 900px;
    padding: 3rem;
}

.china-service-slide h2 {
    font-size: 1.125rem;
    text-transform: uppercase;
    color: #60A5FA; /* Modern blue accent */
    margin-bottom: 1rem;
    letter-spacing: 0.1em;
}

.china-service-slide h1 {
    font-size: 3.5rem;
    font-weight: 800;
    background: linear-gradient(to right, #ffffff, #93C5FD);
    -webkit-background-clip: text;
    -webkit-text-fill-color: transparent;
    margin-bottom: 1.5rem;
} */ */

/* .china-service-slide p {
    font-size: 1.25rem;
    line-height: 1.7;
    color: rgba(255, 255, 255, 0.9);
    margin-bottom: 2.5rem;
}

.china-service-slide ul {
    display: grid;
    grid-template-columns: repeat(auto-fit, minmax(250px, 1fr));
    gap: 1.5rem;
    margin: 2.5rem 0;
}

.china-service-slide li {
    background: rgba(255, 255, 255, 0.05);
    backdrop-filter: blur(12px);
    border: 1px solid rgba(255, 255, 255, 0.1);
    padding: 1.5rem;
    border-radius: 1rem;
    font-size: 1.1rem;
    color: #ffffff;
    transition: all 0.3s ease;
    display: flex;
    align-items: center;
    gap: 1rem;
} */

/* .china-service-slide li:hover {
    transform: translateY(-4px);
    background: rgba(255, 255, 255, 0.1);
    border-color: rgba(255, 255, 255, 0.2);
    box-shadow: 0 20px 40px rgba(0, 0, 0, 0.2);
} */

/* Update the overlay for better contrast */
.overlay-slide {
    background: linear-gradient(
        135deg,
        rgba(0, 0, 0, 0.75) 0%,
        rgba(0, 0, 0, 0.3) 100%
    );
    backdrop-filter: blur(8px);
}

/* Responsive adjustments */
/* @media (max-width: 768px) {
    .china-service-slide {
        text-align: center;
        padding: 2rem;
    }

    .china-service-slide h1 {
        font-size: 2.5rem;
    }

    .china-service-slide ul {
        grid-template-columns: 1fr;
        gap: 1rem;
    }
} */
</style>

<div class="splide">
    <div class="splide__track">
        <ul class="splide__list">
            <!-- First Slide -->
            <li class="splide__slide">
                <section class="imgFirst">
                    <div class="slide-content">
                        <div class="slide-text">
                            <h2>Sign up once and do unlimited shipping</h2>
                            <h1>Shipping with us is easy!</h1>
                            <p>
                                We offer the fastest, convenient, quality, and reliable shipping service in Jamaica.
                                Buy from your favorite online store with your own unique USA shipping address.
                                Experience our reliability when you ship with us. We offer competitive rates and a
                                speedy delivery service.
                            </p>
                            <div class="button-group">
                                <a href="https://sts.jashippers.com/register" class="primary">Get Ready Now!</a>
                            </div>
                        </div>
                        <div class="slide-image ">
                            <img 
                                class="object-fit object-center"
                                src="{{ asset('images/cargo.png') }}" 
                                alt="Shiptosureja Cargo Shipping" 
                                loading="lazy">
                        </div>
                    </div>
                </section>
            </li>

            <!-- Second Slide -->
            <li class="splide__slide">
                <section class="secondBgColorx">
                    <div class="slide-content">
                        <div class="slide-text">
                            <h2>Sea Freight Weightless Shipping</h2>
                            <h1>Sea Freight Weightless Pricing</h1>
                            <p>
                                We do not charge per lbs or kilo but by the dimensions of the item's box/crate. L * W * H.
                                Pay one flat rate barrel shipments.
                            </p>
                            <div class="button-group">
                                <a href="https://sts.jashippers.com/register" class="primary">Get Ready Now!</a>
                            </div>
                        </div>
                        <div class="slide-image">
                            <img 
                                src="{{ asset('images/shiptosureHeavy.png') }}" 
                                alt="Shiptosureja Container Ship" 
                                loading="lazy">
                        </div>
                    </div>
                </section>
            </li>

            <!-- Third Slide -->
            <li class="splide__slide">
                <section class="thirdBgColor">
                    <div class="slide-content">
                        <div class="slide-text">
                            <h2>Air Freight Express Shipping</h2>
                            <h1>Fast Delivery Within 3-5 Days</h1>
                            <p>
                                Express shipping for urgent deliveries. Get your items quickly and securely.
                            </p>
                            <div class="button-group">
                                <a href="https://sts.jashippers.com/register" class="primary">Ship Now</a>
                            </div>
                        </div>
                        <div class="slide-image">
                            <img  
                                src="{{ asset('images/shiptosureCrane.jpeg') }}" 
                                alt="Shiptosureja Air Freight" 
                                loading="lazy">
                        </div>
                    </div>
                </section>
            </li>

            <!-- New Fourth Slide -->
            <li class="splide__slide">
                <section class="fourthBgColor">
                    <div class="slide-content">
                        <div class="slide-text">
                            <h2>Global Shipping Solutions</h2>
                            <h1>Your Trusted Shipping Partner</h1>
                            <p>
                                ShipToSureja offers comprehensive shipping solutions with door-to-door delivery, 
                                real-time tracking, and competitive rates worldwide. Experience seamless 
                                international shipping with our expert team.
                            </p>
                            <div class="button-group">
                                <a href="https://sts.jashippers.com/register" class="primary">Get Ready Now!</a>
                            </div>
                        </div>
                        <div class="slide-image">
                            <img 
                                src="{{ asset('images/container.jpg') }}"
                                alt="Global Shipping Container" 
                                loading="lazy">
                        </div>
                    </div>
                </section>
            </li>

            <li class="splide__slide">
                    <section class="fourthBgColor relative" style="
                        background-image: url({{ asset('images/ship_to_sure_ja_from_china.png') }});
                    background-repeat: no-repeat;
                    background-size: cover;
                    background-position: center;">
                    <!-- Dark overlay with stronger opacity -->
                    <div class="absolute top-0 left-0 w-full h-full bg-black opacity-75"></div>
                    <div class="overlay-slide relative z-10"> <!-- Content stays above overlay -->
                        <div class="slide-content">
                            <div class="slide-text">
                                <h2>China Shipment Service</h2>
                                <h1>Buy & Ship with Ease from China</h1>
                                <p>
                                    Experience seamless importing from China with our comprehensive shipping solutions
                                </p>
                                <ul class=" w-full grid grid-cols-1 lg:grid-cols-1 gap-4 mb-6 ">
                                    <li class="flex items-center   bg-red-900 gap-4 px-6 py-4 text-sm sm:text-base md:text-lg text-white bg-white/5 backdrop-blur-xl border border-white/10 rounded-2xl transition-all duration-300 hover:-translate-y-1 hover:bg-white/10 hover:border-white/20 hover:shadow-lg">✨ Direct purchasing from trusted Chinese suppliers</li>
                                    <li class="flex items-center  bg-red-900  gap-4 px-6 py-4 text-sm sm:text-base md:text-lg text-white bg-white/5 backdrop-blur-xl border border-white/10 rounded-2xl transition-all duration-300 hover:-translate-y-1 hover:bg-white/10 hover:border-white/20 hover:shadow-lg">🚢 End-to-end shipping logistics management</li>
                                    <li class="flex items-center bg-red-900  gap-4 px-6 py-4 text-sm sm:text-base md:text-lg text-white bg-white/5 backdrop-blur-xl border border-white/10 rounded-2xl transition-all duration-300 hover:-translate-y-1 hover:bg-white/10 hover:border-white/20 hover:shadow-lg">⚡ Swift and secure delivery</li>
                                </ul>
                                <!-- <div class=" flex items-center justify-center  ">
                                    <button class="primary">Start Shipping Now</button> 
                                </div> -->
                            </div>
                        </div>
                    </div>
                </section>
            </li>

             
        </ul>
    </div>

    <!-- Navigation Arrows -->
    <div class="splide__arrows">
        <button class="splide__arrow splide__arrow--prev" aria-label="Previous Slide">
            <!-- SVG Icon for Previous -->
            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24">
                <path d="M15 18l-6-6 6-6"/>
            </svg>
        </button>
        <button class="splide__arrow splide__arrow--next" aria-label="Next Slide">
            <!-- SVG Icon for Next -->
            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24">
                <path d="M9 6l6 6-6 6"/>
            </svg>
        </button>
    </div>

    <!-- Pagination -->
    <ul class="splide__pagination"></ul>
</div>

<script>
document.addEventListener('DOMContentLoaded', function() {
    new Splide('.splide', {
        type: 'fade',
        rewind: true,
        autoplay: true,
        interval: 6000,
        speed: 1000,
        pauseOnHover: false, // Better for touch devices
        pauseOnFocus: false, // Better for touch devices
        arrows: true, // Ensure arrows are enabled
        pagination: true, // Enable pagination
        perPage: 1,
        perMove: 1,
        easing: 'cubic-bezier(0.16, 1, 0.3, 1)',

        breakpoints: {
            1024: {
                arrows: true, // Keep arrows on medium screens
            },
            768: {
                arrows: true, // Show arrows on tablets
                pagination: true,
            },
            480: {
                arrows: true, // Show arrows on mobile
                pagination: true,
            }
        },
    }).mount();
});
</script>
<!-- Keep original script source -->
<script src="https://cdn.jsdelivr.net/npm/@splidejs/splide@2.4.21/dist/js/splide.min.js"></script>
