@extends('layouts.main')
@include('components.nav')
@section('content')
<section class="relative bg-gray-700 bg-blend-multiply overflow-hidden h-screen">
    <img src="{{ asset('storage/img/bg.jpg') }}" alt="Background Image" class="absolute inset-0 w-full h-full object-cover" />
    <div class="absolute inset-0 bg-black bg-opacity-40"></div>
    <div class="absolute inset-0 flex flex-col items-center justify-center text-center text-white px-4">
        <div class="text-xl md:text-6xl font-bold mb-4 flex space-x-2 animate-wave">
            <span class="animate-fade-in delay-0">F</span>
            <span class="animate-fade-in delay-1">L</span>
            <span class="animate-fade-in delay-2">O</span>
            <span class="animate-fade-in delay-3">O</span>
            <span class="animate-fade-in delay-4">D</span>
            <span class="animate-fade-in delay-5">G</span>
            <span class="animate-fade-in delay-6">U</span>
            <span class="animate-fade-in delay-7">A</span>
            <span class="animate-fade-in delay-8">R</span>
            <span class="animate-fade-in delay-9">D</span>
        </div>
        <p class="text-3xl md:text-2xl animate-wave">Siaga Warga Majalaya</p>
    </div>
</section>






<section class="bg-white dark:bg-gray-900">
    <div class="py-8 px-4 mx-auto max-w-screen-2xl lg:py-16">
        <div class="bg-gray-50 dark:bg-gray-800 border border-gray-200 dark:border-gray-700 rounded-lg p-8 md:p-12 mb-5 anime-fade-up animate__animated animate__fadeInUp delay-6">
            
            <h1 class="text-gray-900 dark:text-white text-3xl md:text-5xl font-extrabold mb-4">Tentang Kami</h1>
            <p class="text-lg font-normal text-gray-500 dark:text-gray-400 mb-6">
                Selamat datang di FLOODGUARD, platform yang didedikasikan untuk membawa pengalaman pemantauan bencana banjir terbaik langsung ke hadapan Anda! Kami adalah penyedia informasi banjir yang memahami keunikan setiap pengguna. FLOODGUARD bertujuan untuk memberikan pemantauan banjir secara real-time dan rekomendasi tindakan yang tepat untuk Anda.
                <br><br>
                FLOODGUARD didirikan dengan hasrat untuk membawa ketenangan dan keselamatan melalui pemantauan bencana banjir. Kami percaya bahwa setiap daerah memiliki dinamika yang unik, Khususnya untuk daerah majalaya, dan FLOODGUARD hadir sebagai alat yang dapat memberikan informasi yang tepat pada waktu yang tepat. Kami memandang dunia pemantauan banjir sebagai wadah di mana kita dapat menemukan solusi, kesiapsiagaan, dan terkadang bahkan penemuan yang tak terduga. 
                <br><br>
                Mari bersama-sama menjelajahi dunia pemantauan bencana banjir melalui FLOODGUARD dan temukan informasi yang sesuai dengan kebutuhan Anda!
            </p>
            
        </div>
 
        <div class="grid md:grid-cols-2 gap-8">
            <div class="flex flex-col items-center bg-white border border-gray-200 rounded-lg shadow hover:bg-gray-100 dark:border-gray-700 dark:bg-gray-800 dark:hover:bg-gray-700 animate__animated animate__fadeInLeft delay-8">
                <img class="object-cover w-full rounded-t-lg h-fullmd:h-48 transition-all duration-300 cursor-pointer filter grayscale hover:grayscale-0 animate__animated animate__zoomIn " src="{{ asset('storage/img/warist.jpg') }}" alt="">
                <div class="flex flex-col justify-between p-4 leading-normal">
                    <h5 class="mb-2 text-2xl font-bold tracking-tight text-gray-900 dark:text-white">Software Engineer</h5>
                    <p class="mb-3 font-normal text-gray-700 dark:text-gray-400">
                        Hallo Semuanya !! <br>
                        Saya Warist Riyadi, seorang Project Manager di FLOODGUARD dari Universitas Pendidikan Indonesia. Tugas saya adalah mengelola proyek ini dengan cermat dan efisien. Saya bertanggung jawab untuk memastikan bahwa semua aspek proyek berjalan sesuai rencana dan bahwa setiap tahap selesai tepat waktu. Dengan dukungan tim dan komitmen kami untuk keunggulan, kami bertekad untuk menjadikan FLOODGUARD sebagai solusi terkemuka dalam pemantauan dan manajemen bencana banjir.
                        <br>
                    </p>
                </div>
            </div>

            <div class="flex flex-col items-center bg-white border border-gray-200 rounded-lg shadow hover:bg-gray-100 dark:border-gray-700 dark:bg-gray-800 dark:hover:bg-gray-700 animate__animated animate__fadeInRight delay-10">
                <img class="object-cover w-full rounded-t-lg h-fullmd:h-48 transition-all duration-300 cursor-pointer filter grayscale hover:grayscale-0 animate__animated animate__zoomIn" src="{{ asset('storage/img/aris.jpg') }}" alt="">
                <div class="flex flex-col justify-between p-4 leading-normal">
                    <h5 class="mb-2 text-2xl font-bold tracking-tight text-gray-900 dark:text-white">Software Engineer</h5>
                    <p class="mb-3 font-normal text-gray-700 dark:text-gray-400">
                        Hallo Semuanya !! 
                        <br>
                        Saya Aris Triono, seorang Software Engineer di FLOODGUARD dari Universitas Muhammadiyah Purwokerto. Tugas saya adalah mengembangkan dan merancang sebuah Mobile apps untuk monitoring banjir. Saya bertanggung jawab untuk memastikan bahwa aplikasi yang kami kembangkan dapat memberikan informasi yang akurat dan tepat waktu. Dengan dukungan tim dan komitmen kami untuk keunggulan, kami bertekad untuk menjadikan FLOODGUARD sebagai solusi terkemuka dalam pemantauan dan manajemen bencana banjir.
                    </p>
                </div>
            </div>
        </div>

        <div class="grid md:grid-cols-3 gap-8 mt-10">
            <div class="flex flex-col items-center bg-white border border-gray-200 rounded-lg shadow hover:bg-gray-100 dark:border-gray-700 dark:bg-gray-800 dark:hover:bg-gray-700 animate__animated animate__fadeInUp delay-12">
                <img class="object-cover w-full rounded-t-lg h-96md:h-48 transition-all duration-300 cursor-pointer filter grayscale hover:grayscale-0 animate__animated animate__zoomIn" src="{{ asset('storage/img/iqbal.jpg') }}" alt="">
                <div class="flex flex-col justify-between p-4 leading-normal">
                    <h5 class="mb-2 text-2xl font-bold tracking-tight text-gray-900 dark:text-white">Firmware Engineer</h5>
                    <p class="mb-3 font-normal text-gray-700 dark:text-gray-400">
                        Hallo Semuanya !! <br>
                        Saya Iqbal Maulana Sidiq, seorang Firmware Engineer di FLOODGUARD, dari Universitas Pasundan. Tugas saya adalah membuat website apps untuk monitoring dan user kontrol admin, selain dari itu tugas saya adalah membuat koneksi antara firebase sebagai basis data dan web dashboard agar tampil data hasil pembacaan pada alat bisa tampil secara realtime pada web dashboard, dengan dukungan tim dan komitmen kami untuk keunggulan, kami bertekad untuk menjadikan FLOODGUARD sebagai solusi terkemuka dalam pemantauan dan manajemen bencana banjir.
                    </p>
                </div>
            </div>

            <div class="flex flex-col items-center bg-white border border-gray-200 rounded-lg shadow hover:bg-gray-100 dark:border-gray-700 dark:bg-gray-800 dark:hover:bg-gray-700 animate__animated animate__fadeInDown delay-14">
                <img class="object-cover w-full rounded-t-lg h-96md:h-48 transition-all duration-300 cursor-pointer filter grayscale hover:grayscale-0 animate__animated animate__zoomIn" src="{{ asset('storage/img/nindia.jpg') }}" alt="">
                <div class="flex flex-col justify-between p-4 leading-normal">
                    <h5 class="mb-2 text-2xl font-bold tracking-tight text-gray-900 dark:text-white">Hardware Engineer</h5>
                    <p class="mb-3 font-normal text-gray-700 dark:text-gray-400">
                        Hallo Semuanya !! <br>
                        Saya Nindia Justita. M, seorang Hardware Engineer di FLOODGUARD dari Universitas Tidar. Tugas saya adalah membuat dan merakit alat, membuat flowchart alat, membuat wiring diagram, mengetes semua komponen sensor yang akan digunakan serta memprogram alat agar siap di gunakan untuk nantinya di terapkan di tempat agar berjalan untuk memonitoring bencana banjir di daerah setempat, dengan dukungan tim dan komitmen kami untuk keunggulan, kami bertekad untuk menjadikan FLOODGUARD sebagai solusi terkemuka dalam pemantauan dan manajemen bencana banjir. 
                    </p>
                </div>
            </div>

            <div class="flex flex-col items-center bg-white border border-gray-200 rounded-lg shadow hover:bg-gray-100 dark:border-gray-700 dark:bg-gray-800 dark:hover:bg-gray-700 animate__animated animate__fadeInUp delay-16">
                <img class="object-cover w-full rounded-t-lg h-96md:h-48 transition-all duration-300 cursor-pointer filter grayscale hover:grayscale-0 animate__animated animate__zoomIn" src="{{ asset('storage/img/lutfi.jpg') }}" alt="">
                <div class="flex flex-col justify-between p-4 leading-normal">
                    <h5 class="mb-2 text-2xl font-bold tracking-tight text-gray-900 dark:text-white">UI/UX Designer</h5>
                    <p class="mb-3 font-normal text-gray-700 dark:text-gray-400">
                        Hallo Semuanya !! 
                        <br>
                        Saya Luthfi Maulana, seorang UI/UX Designer di FLOODGUARD dari Universitas Pendidikan Indonesia. Tugas saya adalah memdesain tampilan dari mobile dan website apps, mendesain komponen alat, serta mengelola social media dari tim FLOODGUARD, agar informasi yang disampaikan dapat diterima dengan baik oleh pengguna. Dengan dukungan tim dan komitmen kami untuk keunggulan, kami bertekad untuk menjadikan FLOODGUARD sebagai solusi terkemuka dalam pemantauan dan manajemen bencana banjir.
                    </p>
                </div>
            </div>
        </div>
    </div>
</section>






<hr class=" border-gray-200 s dark:border-gray-700 " />





@include('components.footer')
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
@endsection