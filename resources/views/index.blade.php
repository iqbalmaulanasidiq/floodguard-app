@extends('layouts.main')
@include('components.nav')
@section('content')


<section class="bg-center bg-no-repeat bg-gray-700 bg-blend-multiply h-screen flex items-center justify-center" style="background-image: url('{{ asset('storage/img/citarum.jpg') }}');">
    <div class="px-4 mx-auto max-w-screen-xl text-center py-24 lg:py-56 relative">
        <h1 class="mb-4 text-4xl font-extrabold tracking-tight leading-none text-white md:text-5xl lg:text-6xl fade-in">FLOODGUARD - SIAGA WARGA MAJALAYA</h1>
        <p class="mb-8 text-lg font-normal text-gray-300 lg:text-xl sm:px-16 lg:px-48 delay-5 fade-in-two">
            FloodGuard adalah aplikasi untuk monitoring banjir yang terintegrasi dengan perangkat IoT. FloodGuard memberikan informasi terkini mengenai curah hujan, status banjir, level air, dan debit air di sungai Citarum. FloodGuard Menjadi media informasi yang dapat diakses oleh warga Majalaya untuk memantau kondisi banjir di sekitar wilayahnya.
        </p>
        <div class="flex flex-col space-y-4 sm:flex-row sm:justify-center sm:space-y-0">
            <a href="#infoData" class="inline-flex justify-center items-center py-3 px-5 text-base font-medium text-center text-white rounded-lg bg-blue-700 gradient-hover focus:ring-4 focus:ring-blue-300 dark:focus:ring-blue-900">
                Mulai Pantau
                <svg class="w-3.5 h-3.5 ms-2 rtl:rotate-180" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 10">
                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M1 5h12m0 0L9 1m4 4L9 9"/>
                </svg>
            </a>            
        </div>
    </div>
</section>



<section id="infoData">
<div class="px-10 mx-auto">
    <div class="py-8 px-4 mx-auto lg:py-16">
        <div class="grid md:grid-cols-4 gap-8">
            <!-- Column 1: Larger column (3/4 of the width) -->
            <div class="md:col-span-3 grid grid-cols-1 sm:grid-cols-2 gap-4 ">
                <!-- Card 1 -->
                <div class="bg-white p-4 rounded-md flex flex-col items-center justify-center space-y-4 shadow-md h-80 gradient-hover-card">
                    <!-- Circular Progress -->
                    <div class="w-24 h-24 rounded-full flex items-center justify-center bg-gray-50 relative">
                        <svg class="-rotate-90 w-20 h-20">
                            <circle style="color: #ffffff" stroke-width="8" stroke="currentColor" fill="transparent" r="32" cx="40" cy="40" />
                            <circle style="color: #6FCF97" stroke-width="8" stroke="currentColor" fill="transparent" stroke-linecap="round" r="32" cx="40" cy="40" stroke-dasharray="240" stroke-dashoffset="60" />
                        </svg>
                        <span class="absolute font-quicksand font-bold text-lg text-dark">75%</span>
                    </div>
                    <div class="text-center">
                        <p class="text-lg text-gray-600">Cuaca: {{ $raindropData }}</p>
                        <h1 class="text-2xl text-gray-900">Curah Hujan: {{ $raindropDataCurahHujan }}</h1>
                    </div>
                </div>
                <!-- Card 2 -->
                <div class="bg-white p-4 rounded-md flex flex-col items-center justify-center space-y-4 shadow-md h-80 gradient-hover-card">
                    <!-- Example Content for Second Card -->
                    <div class="w-24 h-24 rounded-full flex items-center justify-center bg-gray-50 relative">
                        <svg class="-rotate-90 w-20 h-20">
                            <circle style="color: #ffffff" stroke-width="8" stroke="currentColor" fill="transparent" r="32" cx="40" cy="40" />
                            <circle style="color: #FF6347" stroke-width="8" stroke="currentColor" fill="transparent" stroke-linecap="round" r="32" cx="40" cy="40" stroke-dasharray="192" stroke-dashoffset="48" />
                        </svg>
                        <span class="absolute font-quicksand font-bold text-lg text-dark">60%</span>
                    </div>
                    <div class="text-center">
                        <p class="text-lg text-gray-600">Status</p>
                        <h1 class="text-2xl text-gray-900">{{ $statusData }} </h1>
                    </div>
                </div>
                <!-- Card 3 -->
                <div class="bg-white p-4 rounded-md flex flex-col items-center justify-center space-y-4 shadow-md h-80 gradient-hover-card">
                    <!-- Example Content for Third Card -->
                    <div class="w-24 h-24 rounded-full flex items-center justify-center bg-gray-50 relative">
                        <svg class="-rotate-90 w-20 h-20">
                            <circle style="color: #ffffff" stroke-width="8" stroke="currentColor" fill="transparent" r="32" cx="40" cy="40" />
                            <circle style="color: #FF6347" stroke-width="8" stroke="currentColor" fill="transparent" stroke-linecap="round" r="32" cx="40" cy="40" stroke-dasharray="192" stroke-dashoffset="48" />
                        </svg>
                        <span class="absolute font-quicksand font-bold text-lg text-dark">60%</span>
                    </div>
                    <div class="text-center">
                        <p class="text-lg text-gray-600">Ultrasonik</p>
                        <h1 class="text-2xl text-gray-900">Level Air : {{ $ultrasonicData }} </h1>
                    </div>
                </div>
                <!-- Card 4 -->
                <div class="bg-white p-4 rounded-md flex flex-col items-center justify-center space-y-4 shadow-md h-80 gradient-hover-card">
                    <!-- Example Content for Fourth Card -->
                    <div class="w-24 h-24 rounded-full flex items-center justify-center bg-gray-50 relative">
                        <svg class="-rotate-90 w-20 h-20">
                            <circle style="color: #ffffff" stroke-width="8" stroke="currentColor" fill="transparent" r="32" cx="40" cy="40" />
                            <circle style="color: #FF6347" stroke-width="8" stroke="currentColor" fill="transparent" stroke-linecap="round" r="32" cx="40" cy="40" stroke-dasharray="192" stroke-dashoffset="48" />
                        </svg>
                        <span class="absolute font-quicksand font-bold text-lg text-dark">60%</span>
                    </div>
                    <div class="text-center">
                        <p class="text-lg text-gray-600">Waterflow</p>
                        <h1 class="text-2xl text-gray-900">Debit Air : {{ $waterflowData }}</h1>
                    </div>
                </div>
            </div>

            <!-- Column 2: Smaller column (1/4 of the width) -->
            <div class="md:col-span-1 bg-white p-4 rounded-md shadow-md flex flex-col items-center justify-center space-y-4 gradient-hover-card">
                <img src="{{ asset('storage/logo.png') }}" class="h-52 w-auto" alt="FlowBite Logo" />
                <h1 class="text-2xl text-gray-900 font-bold">Siaga Warga Majalaya</h1>
                <button type="button" class="mt-5 text-white bg-[#4285F4] hover:bg-[#4285F4]/90 focus:ring-4 focus:outline-none focus:ring-[#4285F4]/50 font-medium rounded-lg text-sm px-24 py-3 text-center inline-flex items-center dark:focus:ring-[#4285F4]/55">
                    <a href="#" class="text-2xl font-bold">GET APP</a>
                </button>
            </div>
        </div>
    </div>
</div>
</section>

<script>
    window.addEventListener('scroll', function() {
        const navbar = document.getElementById('navbar');
        if (window.scrollY > 50) {
            navbar.classList.remove('navbar-hidden');
            navbar.classList.add('navbar-visible');
        } else {
            navbar.classList.remove('navbar-visible');
            navbar.classList.add('navbar-hidden');
        }
    });
</script>
<script>
    // Function to handle smooth scrolling
    function smoothScroll(target, duration) {
        var targetElement = document.querySelector(target);
        var targetPosition = targetElement.offsetTop;
        var startPosition = window.pageYOffset;
        var distance = targetPosition - startPosition;
        var startTime = null;

        function animation(currentTime) {
            if (startTime === null) startTime = currentTime;
            var timeElapsed = currentTime - startTime;
            var run = ease(timeElapsed, startPosition, distance, duration);
            window.scrollTo(0, run);
            if (timeElapsed < duration) requestAnimationFrame(animation);
        }

        function ease(t, b, c, d) {
            t /= d / 2;
            if (t < 1) return c / 2 * t * t + b;
            t--;
            return -c / 2 * (t * (t - 2) - 1) + b;
        }

        requestAnimationFrame(animation);
    }

    // Smooth scroll when the button is clicked
    document.querySelector('a[href="#infoData"]').addEventListener('click', function(event) {
        event.preventDefault();
        smoothScroll('#infoData', 1000); // Adjust duration as needed
    });


    
</script>

@include('components.footer')
@endsection
