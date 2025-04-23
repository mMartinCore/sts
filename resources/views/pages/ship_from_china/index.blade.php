<x-app-layout>
<!-- Google tag (gtag.js) - Google Analytics -->
<script async src="https://www.googletagmanager.com/gtag/js?id=UA-183813942-1">
</script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'UA-183813942-1');
</script>

@section('title', 'ShipToSure - #1 China to Jamaica Shipping Service | Fast & Reliable')
@section('meta_description', 'ShipToSure offers the fastest shipping from China to Jamaica - 7-10 days air freight, reliable sea freight options. Shop Alibaba, Taobao, and all Chinese marketplaces with our reliable shipping solution.')

@section('meta_tags')
<meta name="keywords" content="ShipToSure, China to Jamaica shipping, China shipping Jamaica, Alibaba Jamaica shipping, Taobao Jamaica shipping, Shop from China, shipping agent Jamaica, freight forwarder Jamaica, Jamaica import service, ecommerce shipping Jamaica">
<meta name="author" content="ShipToSure">
<meta property="og:title" content="ShipToSure - #1 China to Jamaica Shipping Service | Fast & Reliable">
<meta property="og:description" content="Get your products from China to Jamaica in just 7-10 days with ShipToSure's premium shipping service. Shop Alibaba, Taobao, AliExpress & more with confidence.">
<meta property="og:type" content="website">
<meta property="og:url" content="{{ url()->current() }}">
<meta property="og:image" content="{{ asset('images/ship.png') }}">
<meta name="twitter:card" content="summary_large_image">
<meta name="twitter:title" content="ShipToSure - China to Jamaica Shipping">
<meta name="twitter:description" content="7-10 day shipping from China to Jamaica. Shop Chinese marketplaces with confidence.">
<meta name="twitter:image" content="{{ asset('images/ship.png') }}">
<link rel="canonical" href="{{ url()->current() }}">
@endsection

@section('styles')
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css" />
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css" />
<style>
    /* Animation Keyframes */
    @keyframes float {
        0% { transform: translateY(0px); }
        50% { transform: translateY(-20px); }
        100% { transform: translateY(0px); }
    }
    
    @keyframes wave {
        0% { margin-left: 0; }
        100% { margin-left: -1600px; }
    }
    
    @keyframes swell {
        0%, 100% { transform: translateY(-5px); }
        50% { transform: translateY(5px); }
    }
    
    @keyframes fly {
        0% { transform: translateX(-100px) translateY(0); }
        50% { transform: translateX(calc(100% + 100px)) translateY(-30px); }
        51% { transform: translateX(-100px) translateY(30px); }
        100% { transform: translateX(calc(100% + 100px)) translateY(0); }
    }

    /* Element Styling */
    .floating {
        animation: float 6s ease-in-out infinite;
        will-change: transform;
    }
    
    .hero-ship {
        position: absolute;
        bottom: -20px;
        right: -50px;
        width: 350px;
        z-index: 30;
        filter: drop-shadow(0 10px 15px rgba(0,0,0,0.2));
    }
    
    /* Ocean Animation */
    .ocean {
        position: relative;
        height: 80px;
        width: 100%;
        overflow: hidden;
    }
    
    .wave {
        background: url('https://s3-us-west-2.amazonaws.com/s.cdpn.io/85486/wave.svg') repeat-x;
        position: absolute;
        bottom: 0;
        width: 6400px;
        height: 80px;
        animation: wave 7s cubic-bezier(0.36, 0.45, 0.63, 0.53) infinite;
        transform: translate3d(0, 0, 0);
        will-change: transform;
    }
    
    .wave:nth-of-type(2) {
        animation: wave 7s cubic-bezier(0.36, 0.45, 0.63, 0.53) -0.125s infinite, swell 7s ease -1.25s infinite;
        opacity: 1;
    }
    
    /* Aircraft Animation */
    .airplane-container {
        position: relative;
        height: 100px;
        overflow: hidden;
    }
    
    .airplane {
        position: absolute;
        width: 100px;
        transform: translateX(-100px);
        animation: fly 8s linear infinite;
        will-change: transform;
    }
    
    /* Step Animation */
    .step-card {
        opacity: 0;
        transform: translateY(20px);
        transition: opacity 0.5s ease, transform 0.5s ease;
    }
    
    .step-visible {
        opacity: 1;
        transform: translateY(0);
    }
    
    /* Card Hover Effects */
    .platform-card {
        transition: transform 0.5s cubic-bezier(0.175, 0.885, 0.32, 1.275);
        will-change: transform;
    }
    
    .platform-card:hover {
        transform: perspective(1000px) rotateY(5deg) scale(1.03);
        box-shadow: 0 20px 25px -5px rgba(0, 0, 0, 0.1), 0 10px 10px -5px rgba(0, 0, 0, 0.04);
    }
    
    .benefit-card {
        transition: all 0.3s ease;
    }
    
    .benefit-card:hover {
        transform: translateY(-10px);
        box-shadow: 0 20px 25px -5px rgba(0, 0, 0, 0.1), 0 10px 10px -5px rgba(0, 0, 0, 0.04);
    }
    
    .contact-card {
        transition: all 0.3s ease;
    }
    
    .contact-card:hover {
        transform: translateY(-5px);
        box-shadow: 0 20px 25px -5px rgba(0, 0, 0, 0.1), 0 10px 10px -5px rgba(0, 0, 0, 0.04);
    }
    
    /* Custom Gradients */
    .bg-gradient-black {
        background: linear-gradient(135deg, #000000 0%, #333333 100%);
    }
    
    .bg-gradient-gray {
        background: linear-gradient(135deg, #2d3748 0%, #4a5568 100%);
    }
    
    /* Typography Enhancement */
    .text-shadow {
        text-shadow: 0 2px 4px rgba(0,0,0,0.1);
    }
    
    /* Mobile Optimization */
    @media (max-width: 768px) {
        .hero-ship {
            width: 250px;
            right: -30px;
            bottom: -10px;
        }
    }
</style>
@endsection

<!-- Hero Section with Modern Jumbotron Design -->
<section class="relative overflow-hidden bg-gradient-to-br from-red-800 via-red-900 to-red-950 text-white py-24 lg:py-32">
    <!-- Animated Background Elements -->
    <div class="absolute inset-0 overflow-hidden">
        <div id="particles-js" class="absolute inset-0 z-10 opacity-20"></div>
    </div>
    
    <!-- Container for centered content -->
    <div class="container mx-auto px-4 relative z-20">
        <!-- Main Content - Centered -->
        <div class="max-w-5xl mx-auto text-center">
            <!-- Badge -->
            <div class="inline-block animate__animated animate__fadeIn mb-8">
                <span class="inline-flex items-center px-4 py-2 rounded-full bg-red-700/80 text-yellow-50 text-sm font-medium backdrop-blur-sm border border-red-600/40">
                    <svg class="w-4 h-4 mr-2" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                        <path fill-rule="evenodd" d="M5 2a1 1 0 011 1v1h1a1 1 0 010 2H6v1a1 1 0 01-2 0V6H3a1 1 0 010-2h1V3a1 1 0 011-1z" clip-rule="evenodd"></path>
                    </svg>
                    Fast & Reliable China to Jamaica Shipping
                </span>
            </div>
            
            <!-- Main Heading -->
            <h1 class="text-5xl md:text-6xl lg:text-7xl font-extrabold leading-tight animate__animated animate__fadeInUp mb-6">
                <span class="block bg-clip-text text-transparent bg-gradient-to-r from-yellow-300 to-yellow-500 drop-shadow-sm">ShipToSure</span>
                <span class="block text-white mt-2">Premium Shipping Service</span>
            </h1>
            
            <!-- Subheading -->
            <p class="text-xl md:text-2xl text-yellow-100 animate__animated animate__fadeInUp animate__delay-1s max-w-3xl mx-auto mb-12">
                Jamaica's #1 Fast, Reliable, and Cost-Effective Shipping Solutions from China
            </p>
            
            <!-- CTA Buttons -->
            <div class="flex flex-wrap justify-center gap-4 mt-10 animate__animated animate__fadeInUp animate__delay-2s">
                <a href="#services" class="inline-flex items-center px-8 py-4 rounded-full bg-yellow-500 text-red-900 font-semibold transition duration-300 hover:bg-yellow-400 hover:-translate-y-1 shadow-lg text-lg">
                    <span>Get Started</span>
                    <svg class="w-5 h-5 ml-2" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 7l5 5m0 0l-5 5m5-5H6"></path>
                    </svg>
                </a>
                <a href="#how-it-works" class="inline-flex items-center px-8 py-4 rounded-full border-2 border-yellow-500/70 text-yellow-100 font-semibold transition duration-300 hover:bg-yellow-500/10 hover:-translate-y-1 text-lg">
                    <span>Learn More</span>
                    <svg class="w-5 h-5 ml-2" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"></path>
                    </svg>
                </a>
            </div>
            
            <!-- Trust Indicators -->
            <div class="flex flex-wrap justify-center gap-4 mt-10 animate__animated animate__fadeIn animate__delay-3s">
                <div class="flex items-center px-4 py-2 bg-red-800/70 backdrop-blur-md rounded-lg border border-red-600/40">
                    <svg class="w-5 h-5 mr-2 text-yellow-400" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                        <path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"></path>
                    </svg>
                    <span>7-10 Day Delivery</span>
                </div>
                <div class="flex items-center px-4 py-2 bg-red-800/70 backdrop-blur-md rounded-lg border border-red-600/40">
                    <svg class="w-5 h-5 mr-2 text-yellow-400" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                        <path fill-rule="evenodd" d="M2.166 4.999A11.954 11.954 0 0010 1.944 11.954 11.954 0 0017.834 5c.11.65.166 1.32.166 2.001 0 5.225-3.34 9.67-8 11.317C5.34 16.67 2 12.225 2 7c0-.682.057-1.35.166-2.001zm11.541 3.708a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd"></path>
                    </svg>
                    <span>100% Secure</span>
                </div>
                <div class="flex items-center px-4 py-2 bg-red-800/70 backdrop-blur-md rounded-lg border border-red-600/40">
                    <svg class="w-5 h-5 mr-2 text-yellow-400" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                        <path fill-rule="evenodd" d="M6.267 3.455a3.066 3.066 0 001.745-.723 3.066 3.066 0 013.976 0 3.066 3.066 0 001.745.723 3.066 3.066 0 012.812 2.812c.051.643.304 1.254.723 1.745a3.066 3.066 0 010 3.976 3.066 3.066 0 00-.723 1.745 3.066 3.066 0 01-2.812 2.812 3.066 3.066 0 00-1.745.723 3.066 3.066 0 01-3.976 0 3.066 3.066 0 00-1.745-.723 3.066 3.066 0 01-2.812-2.812 3.066 3.066 0 00-.723-1.745 3.066 3.066 0 010-3.976 3.066 3.066 0 00.723-1.745 3.066 3.066 0 012.812-2.812zm7.44 5.252a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd"></path>
                    </svg>
                    <span>Premium Service</span>
                </div>
            </div>
        </div>
    </div>
    
    <!-- Wave Animation at Bottom -->
    <div class="absolute bottom-0 left-0 right-0 z-10">
        <div class="ocean h-20 w-full relative">
            <div class="wave"></div>
            <div class="wave"></div>
        </div>
    </div>
    
    <!-- Bottom Gradient -->
    <div class="absolute bottom-0 left-0 w-full h-16 bg-gradient-to-t from-red-950 to-transparent z-10"></div>
</section>




<!-- E-commerce Platforms Section -->
<section class="py-20 bg-white" id="platforms">
    <div class="container mx-auto px-4">
        <div class="text-center mb-16">
            <span class="inline-block px-3 py-1 rounded-full bg-gray-100 text-gray-900 text-sm font-semibold mb-3">Shop Anywhere in China</span>
            <h2 class="text-3xl md:text-4xl font-bold text-gray-900">Shop from China's Top Platforms</h2>
            <div class="w-24 h-1 bg-black mx-auto mt-4 rounded-full"></div>
            <p class="text-gray-600 mt-6 max-w-2xl mx-auto">
                Access millions of products directly from China's largest marketplaces with Jamaica's most trusted shipping service
            </p>
        </div>
        
        <div class="grid grid-cols-2 md:grid-cols-3 lg:grid-cols-5 gap-6 md:gap-8">
            <!-- Alibaba -->
            <div class="bg-white rounded-xl shadow-lg p-6 flex flex-col items-center justify-center text-center transition duration-500 hover:shadow-xl hover:-translate-y-2 platform-card group border border-gray-100">
                <a href="https://www.alibaba.com" target="_blank" rel="noopener noreferrer" class="flex flex-col items-center no-underline mb-4">
                    <img src="{{ asset('images/svg/Alibaba.svg') }}" alt="Alibaba" class="h-16 w-auto object-contain">
                </a>
                <a href="https://www.alibaba.com" target="_blank" rel="noopener noreferrer" class="no-underline">
                    <h4 class="text-lg font-bold mb-2 text-gray-900 group-hover:text-black transition duration-300">Alibaba</h4>
                    <p class="text-gray-600 text-sm">B2B marketplace for global wholesale trade with verified suppliers</p>
                </a>
            </div>
            
            <!-- Aliexpress -->
            <div class="bg-white rounded-xl shadow-lg p-6 flex flex-col items-center justify-center text-center transition duration-500 hover:shadow-xl hover:-translate-y-2 platform-card group border border-gray-100">
                <a href="https://www.aliexpress.com" target="_blank" rel="noopener noreferrer" class="flex flex-col items-center no-underline mb-4">
                    <img src="{{ asset('images/svg/Aliexpress.svg') }}" alt="Aliexpress" class="h-16 w-auto object-contain">
                </a>
                <a href="https://www.aliexpress.com" target="_blank" rel="noopener noreferrer" class="no-underline">
                    <h4 class="text-lg font-bold mb-2 text-gray-900 group-hover:text-black transition duration-300">AliExpress</h4>
                    <p class="text-gray-600 text-sm">Global retail platform with consumer goods at competitive prices</p>
                </a>
            </div>
            
            <!-- Taobao -->
            <div class="bg-white rounded-xl shadow-lg p-6 flex flex-col items-center justify-center text-center transition duration-500 hover:shadow-xl hover:-translate-y-2 platform-card group border border-gray-100">
                <a href="https://world.taobao.com" target="_blank" rel="noopener noreferrer" class="flex flex-col items-center no-underline mb-4">
                    <img src="{{ asset('images/svg/Taobao.svg') }}" alt="Taobao" class="h-16 w-auto object-contain">
                </a>
                <a href="https://world.taobao.com" target="_blank" rel="noopener noreferrer" class="no-underline">
                    <h4 class="text-lg font-bold mb-2 text-gray-900 group-hover:text-black transition duration-300">Taobao</h4>
                    <p class="text-gray-600 text-sm">China's largest C2C online shopping platform with unique items</p>
                </a>
            </div>
            
            <!-- 1688 -->
            <div class="bg-white rounded-xl shadow-lg p-6 flex flex-col items-center justify-center text-center transition duration-500 hover:shadow-xl hover:-translate-y-2 platform-card group border border-gray-100">
                <a href="https://www.1688.com" target="_blank" rel="noopener noreferrer" class="flex flex-col items-center no-underline mb-4">
                    <img src="{{ asset('images/svg/1688.svg') }}" alt="1688" class="h-16 w-auto object-contain">
                </a>
                <a href="https://www.1688.com" target="_blank" rel="noopener noreferrer" class="no-underline">
                    <h4 class="text-lg font-bold mb-2 text-gray-900 group-hover:text-black transition duration-300">1688</h4>
                    <p class="text-gray-600 text-sm">Alibaba's Chinese wholesale marketplace for factory-direct prices</p>
                </a>
            </div>
            
            <!-- Pinduoduo -->
            <div class="bg-white rounded-xl shadow-lg p-6 flex flex-col items-center justify-center text-center transition duration-500 hover:shadow-xl hover:-translate-y-2 platform-card group border border-gray-100">
                <a href="https://www.pinduoduo.com" target="_blank" rel="noopener noreferrer" class="flex flex-col items-center no-underline mb-4">
                    <img src="{{ asset('images/Pinduoduo.png') }}" alt="Pinduoduo" class="h-16 w-auto object-contain">
                </a>
                <a href="https://www.pinduoduo.com" target="_blank" rel="noopener noreferrer" class="no-underline">
                    <h4 class="text-lg font-bold mb-2 text-gray-900 group-hover:text-black transition duration-300">Pinduoduo</h4>
                    <p class="text-gray-600 text-sm">Social commerce platform with group buying for greater discounts</p>
                </a>
            </div>
        </div>
        
        <div class="mt-12 text-center">
            <p class="text-gray-600 italic">Need help navigating these platforms? <a href="#contact" class="text-black hover:text-gray-800 font-medium">Contact our team</a> for assistance.</p>
        </div>
    </div>
</section>








<!-- Benefits Section -->
<section class="py-20 bg-gray-50" id="benefits">
    <div class="container mx-auto px-4">
        <div class="text-center mb-16">
            <span class="inline-block px-3 py-1 rounded-full bg-gray-200 text-gray-900 text-sm font-semibold mb-3">Why Choose ShipToSure Jamaica</span>
            <h2 class="text-3xl md:text-4xl font-bold text-gray-900">Jamaica's Premier China Shipping Service</h2>
            <div class="w-24 h-1 bg-black mx-auto mt-4 rounded-full"></div>
            <p class="text-gray-600 mt-6 max-w-2xl mx-auto">Trusted by thousands of Jamaican businesses and individuals for reliable China-to-Jamaica shipping</p>
        </div>
        
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-8">
            <!-- Speed Card -->
            <div class="bg-white rounded-xl shadow-lg p-8 transform transition duration-300 hover:-translate-y-2 hover:shadow-2xl benefit-card">
                <div class="text-gray-900 mb-6 inline-flex items-center justify-center w-16 h-16 rounded-full bg-gray-100">
                    <i class="fas fa-shipping-fast text-3xl"></i>
                </div>
                <h3 class="text-xl font-bold mb-3 text-gray-900">Speed</h3>
                <p class="text-gray-600 mb-4">Fast 7-10 day air freight shipping from China to Jamaica</p>
                <div class="flex items-center text-xl font-bold text-gray-900">
                    <span class="counter" data-count="7">0</span>-<span class="counter" data-count="10">0</span> 
                    <span class="ml-2 text-base font-medium">Days</span>
                </div>
            </div>

            <!-- Reliability Card -->
            <div class="bg-white rounded-xl shadow-lg p-8 transform transition duration-300 hover:-translate-y-2 hover:shadow-2xl benefit-card">
                <div class="text-gray-900 mb-6 inline-flex items-center justify-center w-16 h-16 rounded-full bg-gray-100">
                    <i class="fas fa-shield-alt text-3xl"></i>
                </div>
                <h3 class="text-xl font-bold mb-3 text-gray-900">Reliability</h3>
                <p class="text-gray-600 mb-4">Direct shipping routes with guaranteed delivery times</p>
                <div class="flex items-center text-xl font-bold text-gray-900">
                    <span class="counter" data-count="99">0</span>
                    <span class="ml-2 text-base font-medium">% On-time</span>
                </div>
            </div>

            <!-- Cost-Effective Card -->
            <div class="bg-white rounded-xl shadow-lg p-8 transform transition duration-300 hover:-translate-y-2 hover:shadow-2xl benefit-card">
                <div class="text-gray-900 mb-6 inline-flex items-center justify-center w-16 h-16 rounded-full bg-gray-100">
                    <i class="fas fa-dollar-sign text-3xl"></i>
                </div>
                <h3 class="text-xl font-bold mb-3 text-gray-900">Cost-Effective</h3>
                <p class="text-gray-600 mb-4">Competitive pricing and transparent fee structure</p>
                <div class="flex items-center text-xl font-bold text-gray-900">
                    <span class="counter" data-count="25">0</span>
                    <span class="ml-2 text-base font-medium">% Savings</span>
                </div>
            </div>

            <!-- Trade War Solution Card -->
            <div class="bg-white rounded-xl shadow-lg p-8 transform transition duration-300 hover:-translate-y-2 hover:shadow-2xl benefit-card">
                <div class="text-gray-900 mb-6 inline-flex items-center justify-center w-16 h-16 rounded-full bg-gray-100">
                    <i class="fas fa-handshake text-3xl"></i>
                </div>
                <h3 class="text-xl font-bold mb-3 text-gray-900">Trade War Solution</h3>
                <p class="text-gray-600 mb-4">Navigate trade challenges with our expert assistance</p>
                <div class="flex items-center text-xl font-bold text-gray-900">
                    <span class="counter" data-count="100">0</span>
                    <span class="ml-2 text-base font-medium">% Support</span>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Services Section -->
<section class="py-20 bg-white" id="services">
    <div class="container mx-auto px-4">
        <div class="text-center mb-16">
            <span class="inline-block px-3 py-1 rounded-full bg-gray-100 text-gray-900 text-sm font-semibold mb-3">ShipToSure Jamaica Services</span>
            <h2 class="text-3xl md:text-4xl font-bold text-gray-900">China to Jamaica Shipping Options</h2>
            <div class="w-24 h-1 bg-black mx-auto mt-4 rounded-full"></div>
            <p class="text-gray-600 mt-6 max-w-2xl mx-auto">Choose the perfect shipping solution for your Jamaican business with our fast air freight or cost-effective sea freight options</p>
        </div>
        
        <div class="grid grid-cols-1 lg:grid-cols-2 gap-10">
            <!-- Air Freight Card -->
            <div class="bg-white rounded-xl shadow-xl overflow-hidden transform transition duration-500 hover:shadow-2xl hover:-translate-y-1 border border-gray-200">
                <div class="bg-gradient-black p-8 text-white">
                    <div class="flex justify-between items-center">
                        <h3 class="text-2xl font-bold">CHINA AIR FREIGHT</h3>
                        <span class="bg-white bg-opacity-20 text-white px-3 py-1 rounded-full text-sm backdrop-blur-sm">7-10 DAYS</span>
                    </div>
                </div>
                <div class="airplane-container bg-gray-50">
                    <img src="https://cdn-icons-png.flaticon.com/512/3125/3125713.png" alt="Airplane" class="airplane">
                </div>
                <div class="p-8">
                    <div class="flex flex-col gap-4 mb-6">
                        <div class="flex items-start">
                            <span class="flex-shrink-0 w-10 h-10 rounded-full bg-gray-100 flex items-center justify-center text-gray-900 mr-4">
                                <i class="fas fa-dollar-sign"></i>
                            </span>
                            <div>
                                <h4 class="font-semibold text-gray-900">Pricing</h4>
                                <p class="text-gray-600">$11 USD for first pound, $9 USD for each additional pound</p>
                            </div>
                        </div>
                        <div class="flex items-start">
                            <span class="flex-shrink-0 w-10 h-10 rounded-full bg-gray-100 flex items-center justify-center text-gray-900 mr-4">
                                <i class="fas fa-box"></i>
                            </span>
                            <div>
                                <h4 class="font-semibold text-gray-900">Best for</h4>
                                <p class="text-gray-600">Small, lightweight items</p>
                            </div>
                        </div>
                        <div class="flex items-start">
                            <span class="flex-shrink-0 w-10 h-10 rounded-full bg-gray-100 flex items-center justify-center text-gray-900 mr-4">
                                <i class="fas fa-calendar-alt"></i>
                            </span>
                            <div>
                                <h4 class="font-semibold text-gray-900">Shipping schedule</h4>
                                <p class="text-gray-600">Every Friday via Airfreight directly from China</p>
                            </div>
                        </div>
                    </div>
                    
                    <div class="border border-gray-200 rounded-lg p-4 mt-6 bg-gray-50">
                        <h4 class="text-lg font-bold mb-3 text-gray-900">Your China Air Freight Shipping Address:</h4>
                        <div class="text-gray-700 mb-4 space-y-1">
                            <p>Address Line 1: A18 Yundong Garden, #333, Baiyun Avenue, South Baiyun Dist</p>
                            <p>Apt/suite/mailbox: MS6073 STS Air</p>
                            <p>City: Guangzhou</p>
                            <p>Zipcode: 510405</p>
                            <p>Tel#: 13527839367</p>
                        </div>
                        <img src="{{ asset('images/China_Air_address.jpeg') }}" alt="ShipToSure Jamaica - China Air Freight Shipping Address for Jamaican customers" class="w-full h-auto mt-4 rounded-lg shadow">
                    </div>
                </div>
            </div>

            <!-- Sea Freight Card -->
            <div class="bg-white rounded-xl shadow-xl overflow-hidden transform transition duration-500 hover:shadow-2xl hover:-translate-y-1 border border-gray-200">
                <div class="bg-gradient-gray p-8 text-white">
                    <div class="flex justify-between items-center">
                        <h3 class="text-2xl font-bold">CHINA SEA FREIGHT</h3>
                        <span class="bg-white bg-opacity-20 text-white px-3 py-1 rounded-full text-sm backdrop-blur-sm">35-55 DAYS</span>
                    </div>
                </div>
                <div class="ocean">
                    <div class="wave"></div>
                    <div class="wave"></div>
                </div>
                <div class="p-8">
                    <div class="flex flex-col gap-4 mb-6">
                        <div class="flex items-start">
                            <span class="flex-shrink-0 w-10 h-10 rounded-full bg-gray-100 flex items-center justify-center text-gray-900 mr-4">
                                <i class="fas fa-dollar-sign"></i>
                            </span>
                            <div>
                                <h4 class="font-semibold text-gray-900">Rate</h4>
                                <p class="text-gray-600">$525 USD per CBM (includes shipping and clearance)</p>
                            </div>
                        </div>
                        <div class="flex items-start">
                            <span class="flex-shrink-0 w-10 h-10 rounded-full bg-gray-100 flex items-center justify-center text-gray-900 mr-4">
                                <i class="fas fa-clock"></i>
                            </span>
                            <div>
                                <h4 class="font-semibold text-gray-900">Wait time</h4>
                                <p class="text-gray-600">35-55 days</p>
                            </div>
                        </div>
                        <div class="flex items-start">
                            <span class="flex-shrink-0 w-10 h-10 rounded-full bg-gray-100 flex items-center justify-center text-gray-900 mr-4">
                                <i class="fas fa-calendar-alt"></i>
                            </span>
                            <div>
                                <h4 class="font-semibold text-gray-900">Shipping schedule</h4>
                                <p class="text-gray-600">1-2 containers leave China on the 18th of every month</p>
                            </div>
                        </div>
                        <div class="flex items-start">
                            <span class="flex-shrink-0 w-10 h-10 rounded-full bg-gray-100 flex items-center justify-center text-gray-900 mr-4">
                                <i class="fas fa-box"></i>
                            </span>
                            <div>
                                <h4 class="font-semibold text-gray-900">Best for</h4>
                                <p class="text-gray-600">Heavy, bulky, and expensive items</p>
                            </div>
                        </div>
                    </div>
                    
                    <div class="border border-gray-200 rounded-lg p-4 mt-6 bg-gray-50">
                        <h4 class="text-lg font-bold mb-3 text-gray-900">China Sea Freight Shipping Address:</h4> 
                        <img src="{{ asset('images/China_Sea_address.jpeg') }}" alt="ShipToSure Jamaica - China Sea Freight Shipping Address for Jamaican importers" class="w-full h-auto mt-4 rounded-lg shadow">
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- How It Works Section -->
<section class="py-24 bg-gradient-to-b from-gray-50 to-white" id="how-it-works">
    <div class="container mx-auto px-4 sm:px-6 lg:px-8">
        <div class="text-center mb-16 max-w-3xl mx-auto">
            <span class="inline-block px-4 py-1.5 rounded-full bg-gray-200 text-gray-900 text-sm font-semibold mb-4 shadow-sm">Simple Shipping Process</span>
            <h2 class="text-3xl md:text-4xl lg:text-5xl font-bold text-gray-900 leading-tight">How ShipToSure Jamaica Works</h2>
            <div class="w-24 h-1.5 bg-gradient-to-r from-gray-900 to-gray-700 mx-auto mt-5 rounded-full"></div>
            <p class="text-gray-600 mt-6 text-lg">Our streamlined process makes shipping from China to Jamaica simple, fast, and hassle-free for all Jamaican customers</p>
        </div>
        
        <div class="max-w-5xl mx-auto">
            <div class="relative">
                <!-- Timeline line (visible on medium screens and up) -->
                <div class="absolute left-8 md:left-10 top-0 h-full w-1 bg-gradient-to-b from-gray-400 to-gray-600 hidden md:block rounded-full"></div>
                
                <!-- Steps Container -->
                <div class="space-y-12 md:space-y-20">
                    <!-- Step 1 -->
                    <div class="flex flex-col md:flex-row md:items-center group">
                        <!-- Step Number -->
                        <div class="relative z-10 flex-shrink-0 mb-6 md:mb-0">
                            <div class="flex-shrink-0 w-16 h-16 md:w-20 md:h-20 rounded-full bg-gradient-to-r from-gray-900 to-gray-700 text-white flex items-center justify-center text-2xl font-bold shadow-lg group-hover:shadow-gray-200 transition-all duration-300 group-hover:scale-110">
                                <span>01</span>
                            </div>
                        </div>
                        
                        <!-- Step Content -->
                        <div class="bg-white rounded-2xl shadow-xl p-8 md:ml-10 flex-1 transform transition duration-500 hover:shadow-2xl border border-gray-100 group-hover:border-gray-200 group-hover:-translate-y-1">
                            <div class="flex flex-col md:flex-row md:items-center gap-6">
                                <div class="bg-gray-100 rounded-2xl p-4 flex items-center justify-center md:w-24 md:h-24 flex-shrink-0">
                                    <i class="fas fa-mobile-alt text-4xl text-gray-800"></i>
                                </div>
                                <div class="flex-1">
                                    <h3 class="text-xl md:text-2xl font-bold mb-3 text-gray-900 group-hover:text-black transition-colors">Download E-commerce Apps</h3>
                                    <p class="text-gray-600 text-lg mb-4">Download Alibaba, DHL, Aliexpress, Taobao, 1688, or Pinduoduo Apps to start shopping from China.</p>
                                    <div class="flex flex-wrap gap-2">
                                        <span class="inline-flex items-center px-3 py-1.5 rounded-full bg-gray-100 text-gray-900 text-sm font-medium border border-gray-200">
                                            <img src="{{ asset('images/svg/Alibaba.svg') }}" alt="Alibaba" class="h-4 w-auto mr-1.5"> Alibaba
                                        </span>
                                        <span class="inline-flex items-center px-3 py-1.5 rounded-full bg-gray-100 text-gray-900 text-sm font-medium border border-gray-200">
                                            <img src="{{ asset('images/svg/Aliexpress.svg') }}" alt="Aliexpress" class="h-4 w-auto mr-1.5"> Aliexpress
                                        </span>
                                        <span class="inline-flex items-center px-3 py-1.5 rounded-full bg-gray-100 text-gray-900 text-sm font-medium border border-gray-200">
                                            <img src="{{ asset('images/svg/Taobao.svg') }}" alt="Taobao" class="h-4 w-auto mr-1.5"> Taobao
                                        </span>
                                        <span class="inline-flex items-center px-3 py-1.5 rounded-full bg-gray-100 text-gray-900 text-sm font-medium border border-gray-200">
                                            <img src="{{ asset('images/svg/1688.svg') }}" alt="1688" class="h-4 w-auto mr-1.5"> 1688
                                        </span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    
                    <!-- Step 2 -->
                    <div class="flex flex-col md:flex-row md:items-center group">
                        <!-- Step Number -->
                        <div class="relative z-10 flex-shrink-0 mb-6 md:mb-0">
                            <div class="flex-shrink-0 w-16 h-16 md:w-20 md:h-20 rounded-full bg-gradient-to-r from-gray-900 to-gray-700 text-white flex items-center justify-center text-2xl font-bold shadow-lg group-hover:shadow-gray-200 transition-all duration-300 group-hover:scale-110">
                                <span>02</span>
                            </div>
                        </div>
                        
                        <!-- Step Content -->
                        <div class="bg-white rounded-2xl shadow-xl p-8 md:ml-10 flex-1 transform transition duration-500 hover:shadow-2xl border border-gray-100 group-hover:border-gray-200 group-hover:-translate-y-1">
                            <div class="flex flex-col md:flex-row md:items-center gap-6">
                                <div class="bg-gray-100 rounded-2xl p-4 flex items-center justify-center md:w-24 md:h-24 flex-shrink-0">
                                    <i class="fas fa-shopping-cart text-4xl text-gray-800"></i>
                                </div>
                                <div class="flex-1">
                                    <h3 class="text-xl md:text-2xl font-bold mb-3 text-gray-900 group-hover:text-black transition-colors">Select Items & Add Shipping Address</h3>
                                    <p class="text-gray-600 text-lg mb-4">Select your desired items to purchase and add your China shipping address then checkout.</p>
                                    <div class="flex items-center mt-3 py-3 px-4 rounded-xl bg-gray-100 border border-gray-200">
                                        <i class="fas fa-info-circle text-xl text-gray-700 mr-3"></i>
                                        <span class="text-gray-800 font-medium">Use the shipping addresses provided in the Services section</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    
                    <!-- Step 3 -->
                    <div class="flex flex-col md:flex-row md:items-center group">
                        <!-- Step Number -->
                        <div class="relative z-10 flex-shrink-0 mb-6 md:mb-0">
                            <div class="flex-shrink-0 w-16 h-16 md:w-20 md:h-20 rounded-full bg-gradient-to-r from-gray-900 to-gray-700 text-white flex items-center justify-center text-2xl font-bold shadow-lg group-hover:shadow-gray-200 transition-all duration-300 group-hover:scale-110">
                                <span>03</span>
                            </div>
                        </div>
                        
                        <!-- Step Content -->
                        <div class="bg-white rounded-2xl shadow-xl p-8 md:ml-10 flex-1 transform transition duration-500 hover:shadow-2xl border border-gray-100 group-hover:border-gray-200 group-hover:-translate-y-1">
                            <div class="flex flex-col md:flex-row md:items-center gap-6">
                                <div class="bg-gray-100 rounded-2xl p-4 flex items-center justify-center md:w-24 md:h-24 flex-shrink-0">
                                    <i class="fab fa-whatsapp text-4xl text-gray-800"></i>
                                </div>
                                <div class="flex-1">
                                    <h3 class="text-xl md:text-2xl font-bold mb-3 text-gray-900 group-hover:text-black transition-colors">Send Delivery Confirmation</h3>
                                    <p class="text-gray-600 text-lg mb-4">Send your delivery confirmation to us on WhatsApp.</p>
                                    <div class="flex items-center mt-3 py-3 px-4 rounded-xl bg-gray-100 border border-gray-200">
                                        <i class="fab fa-whatsapp text-xl text-gray-800 mr-3"></i>
                                        <span class="text-gray-800 font-medium">We'll confirm receipt within 24 hours</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    
                    <!-- Step 4 -->
                    <div class="flex flex-col md:flex-row md:items-center group">
                        <!-- Step Number -->
                        <div class="relative z-10 flex-shrink-0 mb-6 md:mb-0">
                            <div class="flex-shrink-0 w-16 h-16 md:w-20 md:h-20 rounded-full bg-gradient-to-r from-gray-900 to-gray-700 text-white flex items-center justify-center text-2xl font-bold shadow-lg group-hover:shadow-gray-200 transition-all duration-300 group-hover:scale-110">
                                <span>04</span>
                            </div>
                        </div>
                        
                        <!-- Step Content -->
                        <div class="bg-white rounded-2xl shadow-xl p-8 md:ml-10 flex-1 transform transition duration-500 hover:shadow-2xl border border-gray-100 group-hover:border-gray-200 group-hover:-translate-y-1">
                            <div class="flex flex-col md:flex-row md:items-center gap-6">
                                <div class="bg-gray-100 rounded-2xl p-4 flex items-center justify-center md:w-24 md:h-24 flex-shrink-0">
                                    <i class="fas fa-bell text-4xl text-gray-800"></i>
                                </div>
                                <div class="flex-1">
                                    <h3 class="text-xl md:text-2xl font-bold mb-3 text-gray-900 group-hover:text-black transition-colors">Receive Notification</h3>
                                    <p class="text-gray-600 text-lg mb-4">We will notify you of your delivery within 72 hours.</p>
                                    <div class="flex items-center mt-3 py-3 px-4 rounded-xl bg-gray-100 border border-gray-200">
                                        <i class="fas fa-sync-alt text-xl text-gray-800 mr-3"></i>
                                        <span class="text-gray-800 font-medium">We'll keep you updated with status changes throughout shipping</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    
                    <!-- Step 5 -->
                    <div class="flex flex-col md:flex-row md:items-center group">
                        <!-- Step Number -->
                        <div class="relative z-10 flex-shrink-0 mb-6 md:mb-0">
                            <div class="flex-shrink-0 w-16 h-16 md:w-20 md:h-20 rounded-full bg-gradient-to-r from-gray-900 to-gray-700 text-white flex items-center justify-center text-2xl font-bold shadow-lg group-hover:shadow-gray-200 transition-all duration-300 group-hover:scale-110">
                                <span>05</span>
                            </div>
                        </div>
                        
                        <!-- Step Content -->
                        <div class="bg-white rounded-2xl shadow-xl p-8 md:ml-10 flex-1 transform transition duration-500 hover:shadow-2xl border border-gray-100 group-hover:border-gray-200 group-hover:-translate-y-1">
                            <div class="flex flex-col md:flex-row md:items-center gap-6">
                                <div class="bg-gray-100 rounded-2xl p-4 flex items-center justify-center md:w-24 md:h-24 flex-shrink-0">
                                    <i class="fas fa-box-open text-4xl text-gray-800"></i>
                                </div>
                                <div class="flex-1">
                                    <h3 class="text-xl md:text-2xl font-bold mb-3 text-gray-900 group-hover:text-black transition-colors">Pickup Ready Message</h3>
                                    <p class="text-gray-600 text-lg mb-4">Wait for "ready for pickup" message from us at a Ship to Sure convenient location in Jamaica!</p>
                                    <div class="py-3 px-4 rounded-xl bg-gradient-to-r from-gray-900 to-gray-800 text-white flex items-center justify-center">
                                        <i class="fas fa-check-circle text-xl mr-3"></i>
                                        <span class="font-medium text-lg">Your package has arrived and is ready for pickup!</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>



<!-- Custom Sourcing Section -->
<section class="py-20 bg-gradient-black text-white" id="sourcing">
    <div class="container mx-auto px-4">
        <div class="flex flex-wrap items-center">
            <div class="w-full lg:w-1/2 mb-10 lg:mb-0">
                <span class="inline-block px-3 py-1 rounded-full bg-white bg-opacity-20 text-white text-sm font-semibold mb-6 backdrop-blur-sm">Jamaica's China Sourcing Experts</span>
                <h2 class="text-3xl md:text-4xl font-bold mb-6">ShipToSure Jamaica - Product Sourcing from China</h2>
                <p class="text-white text-opacity-90 mb-4">Need products from China but don't know where to start? ShipToSure's Jamaica-based sourcing team can help you find the right suppliers, negotiate prices, and ensure quality control.</p>
                <p class="text-white text-opacity-90 mb-8">Our expert team has helped hundreds of Jamaican businesses source quality products from China's top manufacturers at competitive prices.</p>
                <a href="#contact" class="inline-block bg-white text-black hover:bg-gray-100 font-semibold uppercase tracking-wider py-3 px-6 rounded-full shadow-lg transform transition hover:-translate-y-1 hover:shadow-xl">
                    Contact ShipToSure Jamaica
                </a>
            </div>
            <div class="w-full lg:w-1/2">
                <div id="globe-container" class="h-96 w-full rounded-xl overflow-hidden shadow-xl"></div>
            </div>
        </div>
    </div>
</section>

<!-- Contact Help Desk Section -->
<section class="py-20 bg-gray-50" id="contact">
    <div class="container mx-auto px-4">
        <div class="text-center mb-16">
            <span class="inline-block px-3 py-1 rounded-full bg-gray-200 text-gray-900 text-sm font-semibold mb-3">Contact ShipToSure Jamaica</span>
            <h2 class="text-3xl md:text-4xl font-bold text-gray-900">Jamaica's China Shipping Help Desk</h2>
            <div class="w-24 h-1 bg-black mx-auto mt-4 rounded-full"></div>
            <p class="text-gray-600 mt-6 max-w-2xl mx-auto">Send invoices and delivery confirmations to one of our Kingston-based ShipToSure Jamaica help desk agents:</p>
        </div>
        
        <div class="max-w-3xl mx-auto grid grid-cols-1 md:grid-cols-2 gap-6">
            <!-- Delton Frater -->
            <div class="bg-white rounded-xl shadow-md p-6 flex items-center transition duration-300 hover:-translate-y-1 hover:shadow-lg contact-card border border-gray-100">
                <div class="h-14 w-14 rounded-full bg-black text-white flex items-center justify-center mr-4 flex-shrink-0">
                    <i class="fab fa-whatsapp text-2xl"></i>
                </div>
                <div>
                    <h4 class="text-xl font-bold text-gray-900">Delton Frater</h4>
                    <p class="text-gray-600">1-658-207-6349 / 876-359-3405</p>
                    <div class="mt-2">
                        <a href="https://wa.me/16582076349" class="text-black text-sm font-medium hover:text-gray-700 inline-flex items-center">
                            <span>Message on WhatsApp</span>
                            <i class="fas fa-chevron-right ml-1 text-xs"></i>
                        </a>
                    </div>
                </div>
            </div>
            
            <!-- Taschine Campbell -->
            <div class="bg-white rounded-xl shadow-md p-6 flex items-center transition duration-300 hover:-translate-y-1 hover:shadow-lg contact-card border border-gray-100">
                <div class="h-14 w-14 rounded-full bg-black text-white flex items-center justify-center mr-4 flex-shrink-0">
                    <i class="fab fa-whatsapp text-2xl"></i>
                </div>
                <div>
                    <h4 class="text-xl font-bold text-gray-900">Taschine Campbell</h4>
                    <p class="text-gray-600">876-797-5028</p>
                    <div class="mt-2">
                        <a href="https://wa.me/8767975028" class="text-black text-sm font-medium hover:text-gray-700 inline-flex items-center">
                            <span>Message on WhatsApp</span>
                            <i class="fas fa-chevron-right ml-1 text-xs"></i>
                        </a>
                    </div>
                </div>
            </div>
            
            <!-- Aneike Bailey -->
            <div class="bg-white rounded-xl shadow-md p-6 flex items-center transition duration-300 hover:-translate-y-1 hover:shadow-lg contact-card border border-gray-100">
                <div class="h-14 w-14 rounded-full bg-black text-white flex items-center justify-center mr-4 flex-shrink-0">
                    <i class="fab fa-whatsapp text-2xl"></i>
                </div>
                <div>
                    <h4 class="text-xl font-bold text-gray-900">Aneike Bailey</h4>
                    <p class="text-gray-600">876-310-9030</p>
                    <div class="mt-2">
                        <a href="https://wa.me/8763109030" class="text-black text-sm font-medium hover:text-gray-700 inline-flex items-center">
                            <span>Message on WhatsApp</span>
                            <i class="fas fa-chevron-right ml-1 text-xs"></i>
                        </a>
                    </div>
                </div>
            </div>
            
            <!-- Sachelle Bentley -->
            <div class="bg-white rounded-xl shadow-md p-6 flex items-center transition duration-300 hover:-translate-y-1 hover:shadow-lg contact-card border border-gray-100">
                <div class="h-14 w-14 rounded-full bg-black text-white flex items-center justify-center mr-4 flex-shrink-0">
                    <i class="fab fa-whatsapp text-2xl"></i>
                </div>
                <div>
                    <h4 class="text-xl font-bold text-gray-900">Sachelle Bentley</h4>
                    <p class="text-gray-600">1-658-212-0442</p>
                    <div class="mt-2">
                        <a href="https://wa.me/16582120442" class="text-black text-sm font-medium hover:text-gray-700 inline-flex items-center">
                            <span>Message on WhatsApp</span>
                            <i class="fas fa-chevron-right ml-1 text-xs"></i>
                        </a>
                    </div>
                </div>
            </div>
            
            <!-- Roshane Scott -->
            <div class="bg-white rounded-xl shadow-md p-6 flex items-center transition duration-300 hover:-translate-y-1 hover:shadow-lg contact-card md:col-span-2 border border-gray-100">
                <div class="h-14 w-14 rounded-full bg-black text-white flex items-center justify-center mr-4 flex-shrink-0">
                    <i class="fab fa-whatsapp text-2xl"></i>
                </div>
                <div>
                    <h4 class="text-xl font-bold text-gray-900">Roshane Scott</h4>
                    <p class="text-gray-600">876-813-1312</p>
                    <div class="mt-2">
                        <a href="https://wa.me/8768131312" class="text-black text-sm font-medium hover:text-gray-700 inline-flex items-center">
                            <span>Message on WhatsApp</span>
                            <i class="fas fa-chevron-right ml-1 text-xs"></i>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

@section('scripts')
<script src="https://cdn.jsdelivr.net/npm/particles.js@2.0.0/particles.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/gsap@3.12.2/dist/gsap.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/gsap@3.12.2/dist/ScrollTrigger.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/three@0.154.0/build/three.min.js" defer></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/animejs/3.2.1/anime.min.js" defer></script>

<!-- Structured Data for SEO -->
<script type="application/ld+json">
{
  "@context": "https://schema.org",
  "@type": "DeliveryService",
  "name": "ShipToSure",
  "url": "{{ url()->current() }}",
  "logo": "{{ asset('images/ship.png') }}",
  "description": "Jamaica's premier shipping service from China. Shop on Alibaba, Taobao, AliExpress and get your items delivered to Jamaica in 7-10 days with our air freight service.",
  "areaServed": {
    "@type": "Country",
    "name": "Jamaica"
  },
  "serviceType": ["Air Freight", "Sea Freight", "China Import", "Product Sourcing"],
  "hoursAvailable": "Mo-Fr 09:00-17:00",
  "contactPoint": {
    "@type": "ContactPoint",
    "telephone": "+1-658-207-6349",
    "contactType": "customer service"
  },
  "address": {
    "@type": "PostalAddress",
    "addressCountry": "Jamaica"
  },
  "offers": [
    {
      "@type": "Offer",
      "name": "Air Freight Service",
      "description": "Fast 7-10 day shipping from China to Jamaica",
      "price": "11.00",
      "priceCurrency": "USD",
      "availability": "https://schema.org/InStock"
    },
    {
      "@type": "Offer",
      "name": "Sea Freight Service",
      "description": "Cost-effective 35-55 day sea shipping from China to Jamaica",
      "price": "525.00",
      "priceCurrency": "USD",
      "availability": "https://schema.org/InStock"
    }
  ]
}
</script>

<script>
    // Initialize particles when document is fully loaded
    document.addEventListener('DOMContentLoaded', function() {
        // Optimize performance by checking if elements exist before performing operations
        const particlesElement = document.getElementById('particles-js');
        const splitTextElements = document.querySelectorAll('.split-text');
        const counterElements = document.querySelectorAll('.counter');
        const stepCards = document.querySelectorAll('.step-card');
        const globeContainer = document.getElementById('globe-container');
        
        // Initialize particles
        if (particlesElement) {
            particlesJS('particles-js', {
                "particles": {
                    "number": {
                        "value": 50, // Reduced for better performance
                        "density": {
                            "enable": true,
                            "value_area": 800
                        }
                    },
                    "color": {
                        "value": "#ffffff"
                    },
                    "shape": {
                        "type": "circle",
                        "stroke": {
                            "width": 0,
                            "color": "#000000"
                        }
                    },
                    "opacity": {
                        "value": 0.5,
                        "random": false,
                        "anim": {
                            "enable": false,
                            "speed": 1,
                            "opacity_min": 0.1,
                            "sync": false
                        }
                    },
                    "size": {
                        "value": 3,
                        "random": true,
                        "anim": {
                            "enable": false,
                            "speed": 40,
                            "size_min": 0.1,
                            "sync": false
                        }
                    },
                    "line_linked": {
                        "enable": true,
                        "distance": 150,
                        "color": "#ffffff",
                        "opacity": 0.4,
                        "width": 1
                    },
                    "move": {
                        "enable": true,
                        "speed": 2,
                        "direction": "none",
                        "random": false,
                        "straight": false,
                        "out_mode": "out",
                        "bounce": false,
                        "attract": {
                            "enable": false,
                            "rotateX": 600,
                            "rotateY": 1200
                        }
                    }
                },
                "interactivity": {
                    "detect_on": "canvas",
                    "events": {
                        "onhover": {
                            "enable": true,
                            "mode": "grab"
                        },
                        "onclick": {
                            "enable": true,
                            "mode": "push"
                        },
                        "resize": true
                    },
                    "modes": {
                        "grab": {
                            "distance": 140,
                            "line_linked": {
                                "opacity": 1
                            }
                        },
                        "push": {
                            "particles_nb": 4
                        }
                    }
                },
                "retina_detect": true
            });
        }
        
        // Split text animation function
        if (splitTextElements.length > 0) {
            splitTextElements.forEach(element => {
                // Get the text content
                const text = element.textContent;
                // Clear the element
                element.innerHTML = '';
                
                // Create a wrapper for the letters
                const wrapper = document.createElement('span');
                wrapper.className = 'letters-wrapper';
                
                // Add each letter wrapped in a span
                for (let i = 0; i < text.length; i++) {
                    const letterSpan = document.createElement('span');
                    letterSpan.className = 'letter';
                    letterSpan.style.opacity = '0';
                    letterSpan.textContent = text[i] === ' ' ? '\u00A0' : text[i];
                    wrapper.appendChild(letterSpan);
                }
                
                element.appendChild(wrapper);
            });
            
            // Animate the letters
            if (typeof anime !== 'undefined') {
                anime.timeline()
                    .add({
                        targets: '.split-text .letter',
                        opacity: [0, 1],
                        translateY: [50, 0],
                        translateZ: 0,
                        easing: "easeOutExpo",
                        duration: 1200,
                        delay: (el, i) => 100 + 30 * i
                    });
            }
        }
        
        // Counter animation function with performance optimization
        const animateCounter = (el) => {
            const target = parseInt(el.getAttribute('data-count'));
            const duration = 1500; // Reduced for better performance
            const startTime = performance.now();
            const updateInterval = Math.min(duration / 60, 16.67); // Cap at 60fps
            
            let rafId;
            
            const updateCounter = (timestamp) => {
                const elapsed = timestamp - startTime;
                const progress = Math.min(elapsed / duration, 1);
                const currentValue = Math.round(progress * target);
                
                el.textContent = currentValue;
                
                if (progress < 1) {
                    rafId = requestAnimationFrame(updateCounter);
                } else {
                    el.textContent = target;
                }
            };
            
            rafId = requestAnimationFrame(updateCounter);
            
            // Cleanup function for when element is removed
            return () => {
                if (rafId) {
                    cancelAnimationFrame(rafId);
                }
            };
        };
        
        // Use IntersectionObserver for performance optimization
        if ('IntersectionObserver' in window) {
            // Setup intersection observer for counters
            if (counterElements.length > 0) {
                const counterObserver = new IntersectionObserver((entries) => {
                    entries.forEach(entry => {
                        if (entry.isIntersecting) {
                            animateCounter(entry.target);
                            counterObserver.unobserve(entry.target);
                        }
                    });
                }, { threshold: 0.5, rootMargin: '0px 0px -10% 0px' });
                
                counterElements.forEach(counter => {
                    counterObserver.observe(counter);
                });
            }
            
            // Step animation with IntersectionObserver
            if (stepCards.length > 0) {
                const stepObserver = new IntersectionObserver((entries) => {
                    entries.forEach(entry => {
                        if (entry.isIntersecting) {
                            entry.target.classList.add('step-visible');
                            stepObserver.unobserve(entry.target);
                        }
                    });
                }, { threshold: 0.2, rootMargin: '0px 0px -10% 0px' });
                
                stepCards.forEach(card => {
                    stepObserver.observe(card);
                });
            }
        }
        
        // Smooth scrolling with better performance
        document.querySelectorAll('a[href^="#"]').forEach(anchor => {
            anchor.addEventListener('click', function(e) {
                e.preventDefault();
                const targetId = this.getAttribute('href');
                const targetElement = document.querySelector(targetId);
                
                if (targetElement) {
                    window.scrollTo({
                        top: targetElement.offsetTop - 80,
                        behavior: 'smooth'
                    });
                }
            });
        });
        
        // Lazy load 3D Globe for performance optimization
        function initGlobe() {
            if (typeof THREE !== 'undefined' && globeContainer && window.innerWidth > 768) {
                // Check if the element is in view
                const rect = globeContainer.getBoundingClientRect();
                if (rect.top < window.innerHeight && rect.bottom > 0) {
                    const scene = new THREE.Scene();
                    const camera = new THREE.PerspectiveCamera(75, globeContainer.clientWidth / globeContainer.clientHeight, 0.1, 1000);
                    
                    const renderer = new THREE.WebGLRenderer({ antialias: true, alpha: true });
                    renderer.setSize(globeContainer.clientWidth, globeContainer.clientHeight);
                    renderer.setPixelRatio(Math.min(window.devicePixelRatio, 2)); // Performance optimization
                    globeContainer.appendChild(renderer.domElement);
                    
                    // Create globe with simplified geometry for better performance
                    const geometry = new THREE.SphereGeometry(5, 24, 24); // Reduced complexity
                    const textureLoader = new THREE.TextureLoader();
                    textureLoader.load('https://threejs.org/examples/textures/land_ocean_ice_cloud_2048.jpg', function(texture) {
                        const material = new THREE.MeshBasicMaterial({ map: texture });
                        const globe = new THREE.Mesh(geometry, material);
                        scene.add(globe);
                        
                        // Position camera
                        camera.position.z = 10;
                        
                        // Animation loop with performance optimization
                        let frameCount = 0;
                        const maxFPS = 30; // Limit FPS for performance
                        const frameDelay = 1000 / maxFPS;
                        let lastFrameTime = 0;
                        
                        function animate(timestamp) {
                            if (timestamp - lastFrameTime > frameDelay) {
                                globe.rotation.y += 0.005;
                                renderer.render(scene, camera);
                                lastFrameTime = timestamp;
                            }
                            requestAnimationFrame(animate);
                        }
                        
                        requestAnimationFrame(animate);
                        
                        // Handle window resize
                        const handleResize = () => {
                            if (globeContainer) {
                                const width = globeContainer.clientWidth;
                                const height = globeContainer.clientHeight;
                                
                                camera.aspect = width / height;
                                camera.updateProjectionMatrix();
                                renderer.setSize(width, height);
                            }
                        };
                        
                        // Throttled resize handler for performance
                        let resizeTimeout;
                        window.addEventListener('resize', () => {
                            if (resizeTimeout) clearTimeout(resizeTimeout);
                            resizeTimeout = setTimeout(handleResize, 100);
                        });
                    });
                    
                    // Remove event listener once globe is initialized
                    window.removeEventListener('scroll', checkGlobeVisibility);
                }
            }
        }
        
        // Check globe visibility on scroll for lazy loading
        function checkGlobeVisibility() {
            if (globeContainer) {
                const rect = globeContainer.getBoundingClientRect();
                if (rect.top < window.innerHeight && rect.bottom > 0) {
                    initGlobe();
                }
            }
        }
        
        // Add scroll event listener for lazy loading the globe
        if (globeContainer) {
            window.addEventListener('scroll', checkGlobeVisibility, {passive: true});
            checkGlobeVisibility(); // Check initially
        }
        
        // Initialize GSAP animations if available
        if (typeof gsap !== 'undefined' && typeof ScrollTrigger !== 'undefined') {
            // Register ScrollTrigger plugin
            gsap.registerPlugin(ScrollTrigger);
            
            // Platform card animations
            const platformCards = gsap.utils.toArray('.platform-card');
            if (platformCards.length > 0) {
                // Use a staggered animation for better performance
                gsap.set(platformCards, { y: 50, opacity: 0 });
                ScrollTrigger.batch(platformCards, {
                    start: "top bottom-=100",
                    onEnter: batch => gsap.to(batch, {
                        y: 0,
                        opacity: 1,
                        duration: 0.8,
                        ease: "power2.out",
                        stagger: 0.05
                    }),
                    once: true
                });
            }
            
            // Service cards animation
            const serviceCards = gsap.utils.toArray('.bg-white.rounded-xl.shadow-xl.overflow-hidden');
            if (serviceCards.length > 0) {
                gsap.set(serviceCards, { scale: 0.9, opacity: 0 });
                ScrollTrigger.batch(serviceCards, {
                    start: "top bottom-=150",
                    onEnter: batch => gsap.to(batch, {
                        scale: 1,
                        opacity: 1,
                        duration: 0.8,
                        ease: "back.out(1.7)",
                        stagger: 0.1
                    }),
                    once: true
                });
            }
            
            // Benefit cards animation
            const benefitCards = gsap.utils.toArray('.benefit-card');
            if (benefitCards.length > 0) {
                gsap.set(benefitCards, { y: 30, opacity: 0 });
                ScrollTrigger.batch(benefitCards, {
                    start: "top bottom-=100",
                    onEnter: batch => gsap.to(batch, {
                        y: 0,
                        opacity: 1,
                        duration: 0.5,
                        ease: "power3.out",
                        stagger: 0.1
                    }),
                    once: true
                });
            }
        }
    });
</script>
@endsection
</x-app-layout>

