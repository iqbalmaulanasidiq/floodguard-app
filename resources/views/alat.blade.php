@extends('layouts.main')
@include('components.nav')
@section('content')
<section class="relative bg-gray-700 bg-blend-multiply overflow-hidden h-screen">
    <img src="{{ asset('storage/img/bg2.jpg') }}" alt="Background Image" class="absolute inset-0 w-full h-full object-cover" />
    <div class=" bg-black bg-opacity-40"></div>
    <div class="absolute inset-0 flex  items-center justify-center text-center text-white px-4">
        <p class="text-xl md:text-6xl font-bold animate-wave">PERALATAN IOT YANG DIGUNAKAN</p>
    </div>
</section>






<section class="bg-white dark:bg-gray-900">
    <div class="py-8 px-4 mx-auto max-w-screen-2xl lg:py-16">
        
        

        <div class="grid md:grid-cols-2 gap-8 mt-10">
            <div class="flex flex-col items-center bg-white border border-gray-200 rounded-lg shadow hover:bg-gray-100 dark:border-gray-700 dark:bg-gray-800 dark:hover:bg-gray-700 animate__animated animate__fadeInUp delay-12">
                <img class="object-cover w-full h-full rounded-t-lg  transition-all duration-300 cursor-pointer filter grayscale hover:grayscale-0 animate__animated animate__zoomIn" src="{{ asset('storage/img/esp32.jpg') }}" alt="">
                <div class="flex flex-col justify-between p-4 leading-normal">
                    <h5 class="mb-2 text-2xl font-bold tracking-tight text-gray-900 dark:text-white">ESP 32 DOIT</h5>
                    <p class="mb-3 font-normal text-gray-700 dark:text-gray-400">
                        ESP32 adalah mikrokontroler yang dikembangkan oleh Espressif Systems. ESP32 memiliki dua inti prosesor Xtensa LX6 yang dapat berjalan hingga 240 MHz, serta memiliki konektivitas Wi-Fi dan Bluetooth. ESP32 juga memiliki memori flash 4 MB dan RAM 520 KB. ESP32 dapat digunakan untuk berbagai aplikasi IoT, seperti sensor suhu, sensor kelembaban, sensor gas, dan lain-lain. 
                    </p>
                </div>
            </div>
            
            <div class="flex flex-col items-center bg-white border border-gray-200 rounded-lg shadow hover:bg-gray-100 dark:border-gray-700 dark:bg-gray-800 dark:hover:bg-gray-700 animate__animated animate__fadeInUp delay-12">
                <img class="object-cover w-full rounded-t-lg h-full transition-all duration-300 cursor-pointer filter grayscale hover:grayscale-0 animate__animated animate__zoomIn" src="{{ asset('storage/img/ultra.jpg') }}" alt="">
                <div class="flex flex-col justify-between p-4 leading-normal">
                    <h5 class="mb-2 text-2xl font-bold tracking-tight text-gray-900 dark:text-white">ULTRASONIK HY-SRF05</h5>
                    <p class="mb-3 font-normal text-gray-700 dark:text-gray-400">
                        Sensor ultrasonik HY-SRF05 adalah sensor yang digunakan untuk mengukur jarak dengan menggunakan gelombang ultrasonik. Sensor ini memiliki jarak pengukuran 2 cm hingga 450 cm dengan akurasi 3 mm. Sensor ini memiliki dua pin, yaitu pin trigger dan pin echo. Pin trigger digunakan untuk mengirimkan sinyal ultrasonik, sedangkan pin echo digunakan untuk menerima sinyal ultrasonik yang dipantulkan oleh objek. Pada proyek ini sensor ultrasonik digunakan untuk mengukur ketinggian air di sungai.
                    </p>
                </div>
            </div>

            <div class="flex flex-col items-center bg-white border border-gray-200 rounded-lg shadow hover:bg-gray-100 dark:border-gray-700 dark:bg-gray-800 dark:hover:bg-gray-700 animate__animated animate__fadeInUp delay-16">
                <img class="object-cover w-full rounded-t-lg h-full transition-all duration-300 cursor-pointer filter grayscale hover:grayscale-0 animate__animated animate__zoomIn" src="{{ asset('storage/img/solar.jpg') }}" alt="">
                <div class="flex flex-col justify-between p-4 leading-normal">
                    <h5 class="mb-2 text-2xl font-bold tracking-tight text-gray-900 dark:text-white">SOLAR PANEL USB OUTPUT 5V 2W</h5>
                    <p class="mb-3 font-normal text-gray-700 dark:text-gray-400">
                        Solar panel USB output 5V 2W adalah panel surya yang digunakan untuk menghasilkan daya listrik dari sinar matahari. Panel surya ini memiliki output 5V dan daya 2W. Panel surya ini memiliki ukuran 13 cm x 8 cm x 0.2 cm dan berat 50 gram. Panel surya ini memiliki kabel USB sehingga dapat langsung dihubungkan ke perangkat yang memiliki port USB. Panel surya ini digunakan untuk mengisi daya baterai pada proyek ini.
                    </p>
                </div>
            </div>

            <div class="flex flex-col items-center bg-white border border-gray-200 rounded-lg shadow hover:bg-gray-100 dark:border-gray-700 dark:bg-gray-800 dark:hover:bg-gray-700 animate__animated animate__fadeInUp delay-16">
                <img class="object-cover w-full rounded-t-lg h-full transition-all duration-300 cursor-pointer filter grayscale hover:grayscale-0 animate__animated animate__zoomIn" src="{{ asset('storage/img/rain.jpg') }}" alt="">
                <div class="flex flex-col justify-between p-4 leading-normal">
                    <h5 class="mb-2 text-2xl font-bold tracking-tight text-gray-900 dark:text-white">Raindrops Sensor</h5>
                    <p class="mb-3 font-normal text-gray-700 dark:text-gray-400">
                        Raindrops sensor adalah sensor yang digunakan untuk mendeteksi adanya hujan. Sensor ini memiliki dua pin, yaitu pin VCC dan pin GND. Sensor ini memiliki output digital yang akan aktif ketika terjadi hujan. Pada proyek ini sensor hujan digunakan untuk mendeteksi adanya hujan dengan mengukur curah hujannya. Sensor ini akan memberikan sinyal ke ESP32 ketika terjadi hujan.
                    </p>
                </div>
            </div>
            <div class="flex flex-col items-center bg-white border border-gray-200 rounded-lg shadow hover:bg-gray-100 dark:border-gray-700 dark:bg-gray-800 dark:hover:bg-gray-700 animate__animated animate__fadeInUp delay-16">
                <img class="object-cover w-full rounded-t-lg h-full transition-all duration-300 cursor-pointer filter grayscale hover:grayscale-0 animate__animated animate__zoomIn" src="{{ asset('storage/img/water.jpg') }}" alt="">
                <div class="flex flex-col justify-between p-4 leading-normal">
                    <h5 class="mb-2 text-2xl font-bold tracking-tight text-gray-900 dark:text-white">Waterflow Sensor</h5>
                    <p class="mb-3 font-normal text-gray-700 dark:text-gray-400">
                        Waterflow sensor adalah sensor yang digunakan untuk mengukur aliran air. Sensor ini memiliki dua pin, yaitu pin VCC dan pin GND. Sensor ini memiliki output digital yang akan aktif ketika terjadi aliran air. Pada proyek ini sensor aliran air digunakan untuk mengukur debit air di sungai. Sensor ini akan memberikan sinyal ke ESP32 ketika terjadi aliran air deras atau lambat nya aliran air sungai.
                    </p>
                </div>
            </div>

            <div class="flex flex-col items-center bg-white border border-gray-200 rounded-lg shadow hover:bg-gray-100 dark:border-gray-700 dark:bg-gray-800 dark:hover:bg-gray-700 animate__animated animate__fadeInUp delay-16">
                <img class="object-cover w-full rounded-t-lg h-full transition-all duration-300 cursor-pointer filter grayscale hover:grayscale-0 animate__animated animate__zoomIn" src="{{ asset('storage/img/image.png') }}" alt="">
                <div class="flex flex-col justify-between p-4 leading-normal">
                    <h5 class="mb-2 text-2xl font-bold tracking-tight text-gray-900 dark:text-white">WIRING DIAGRAM</h5>
                    <p class="mb-3 font-normal text-gray-700 dark:text-gray-400">
                        Wiring diagram adalah gambar yang menunjukkan bagaimana rangkaian elektronika disusun. Wiring diagram digunakan untuk memudahkan dalam merakit rangkaian elektronika. Wiring diagram juga digunakan untuk memahami bagaimana rangkaian elektronika bekerja. Pada proyek ini wiring diagram digunakan untuk merakit rangkaian sensor ultrasonik dan ESP32. Jadi secara garis besar gambaran setiap alat yang digunakan pada proyek ini memilki gambar seperti wiring diagram tersebut.
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