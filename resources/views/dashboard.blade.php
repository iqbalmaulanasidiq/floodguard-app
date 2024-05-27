@extends('layouts.app')

@section('content')
<div class="p-10 sm:ml-64 bg-white min-h-screen">
    <div class="p-4 ">
        <div class="grid grid-cols-3 gap-4 mb-4">
            {{-- BREADCRUMB --}}
            <nav class="flex" aria-label="Breadcrumb">
                <ol class="inline-flex items-center space-x-1 md:space-x-2 rtl:space-x-reverse">
                    <li class="inline-flex items-center">
                        <a href="/dashboard"
                            class="inline-flex items-center text-sm font-medium text-gray-700 hover:text-blue-600 dark:text-gray-400 dark:hover:text-white-800">
                            <svg class="w-3 h-3 me-2.5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg"
                                fill="currentColor" viewBox="0 0 20 20">
                                <path
                                    d="m19.707 9.293-2-2-7-7a1 1 0 0 0-1.414 0l-7 7-2 2a1 1 0 0 0 1.414 1.414L2 10.414V18a2 2 0 0 0 2 2h3a1 1 0 0 0 1-1v-4a1 1 0 0 1 1-1h2a1 1 0 0 1 1 1v4a1 1 0 0 0 1 1h3a2 2 0 0 0 2-2v-7.586l.293.293a1 1 0 0 0 1.414-1.414Z" />
                            </svg>
                            Dashboard Admin
                        </a>
                    </li>
                </ol>
            </nav>
        </div>
                
        <p id="login-success-message"></p>


        {{-- TULISAN DASHBOARD ADMIN --}}
        <div class="flex items-center justify-left h-1 mb-4 mt-10 rounded ">
            
            <p class="text-lg font-medium text-gray-700">Dashboard Admin</p>
            {{-- <p class="text-lg font-medium text-gray-700">Selamat Datang, {{ $user->name }}</p> --}}
           

        </div>
        <div class="flex items-center justify-center h-1 mb-4 mt-10 rounded ">
            <p class="text-3xl font-medium text-gray-700 text-center">Selamat Datang di Halaman Admin, nikmati fitur yang tersedia</p>
        </div>
        
        <section id="infoData">
            <div class="px-10 mx-auto">
                <div class="py-8 px-4 mx-auto lg:py-16">
                    <div class="grid md:grid-cols-4 gap-8">
                        <!-- Column 1: Larger column (3/4 of the width) -->
                        <div class="md:col-span-3 grid grid-cols-1 sm:grid-cols-2 gap-4 ">
                            <div class="bg-white p-4 rounded-md flex flex-col items-center justify-center space-y-4 shadow-md h-80 gradient-hover-card" id="raindrops-card">
                                <!-- Circular Progress -->
                                <div class="w-24 h-24 rounded-full flex items-center justify-center bg-gray-50 relative">
                                    <svg class="-rotate-90 w-20 h-20">
                                        <!-- Outer circle -->
                                        <circle style="color: #ffffff" stroke-width="8" stroke="currentColor" fill="transparent" r="32" cx="40" cy="40" />
                                        <!-- Inner circle with animated stroke -->
                                        <circle style="color: #6FCF97" stroke-width="8" stroke="currentColor" fill="transparent" stroke-linecap="round" r="32" cx="40" cy="40" stroke-dasharray="240" stroke-dashoffset="60" id="raindrop-progress" />
                                    </svg>
                                    <!-- Text to show the percentage -->
                                    <span class="absolute font-quicksand font-bold text-sm text-dark" id="curahHujanPercentage"></span>
                                </div>
                                <!-- Text to display the weather and rainfall -->
                                <div class="text-center" id="raindrop">
                                    <p class="text-lg text-gray-600">Cuaca: <span id="cuaca"></span></p>
                                    <h1 class="text-2xl text-gray-900">Curah Hujan: <span id="curahHujan"></span></h1>
                                </div>
                            </div>
                            
                            
                            <!-- Card 2 -->
                            <div class="bg-white p-4 rounded-md flex flex-col items-center justify-center space-y-4 shadow-md h-80 gradient-hover-card">
                                
                                <div class="text-center ">
                                    <p class="text-xl font-extrabold">Status</p>
                                    <h1 class="mb-4 text-4xl font-extrabold tracking-tight leading-none text-red-700 md:text-5xl lg:text-6xl animate-wave"><span id="status"></span></h1>
                                </div>
                            </div>
                            <!-- Card 3 -->
                            <div class="bg-white p-4 rounded-md flex flex-col items-center justify-center space-y-4 shadow-md h-80 gradient-hover-card">
                                <!-- Example Content for Third Card -->
                                <div class="flex flex-col items-center justify-center ">
                                    <h1 id="statusUltrasonik" class="mb-2 text-center text-xl font-extrabold tracking-tight leading-none md:text-xl lg:text-2xl"></h1>
                                    <div id="statusIcon" class="mt-2"></div>
                                </div>
                                <div class="text-center">
                                    <p class="text-lg text-gray-600">Ultrasonik</p>
                                    <h1 class="text-2xl text-gray-900">Level Air: <span id="ultrasonic"></span></h1>
                                </div>
                            </div>
                            <!-- Card 4 -->
                            
                            <div id="waterflow-card" class="bg-white p-4 rounded-md flex flex-col items-center justify-center space-y-4 shadow-md h-80 gradient-hover-card">
                                <!-- Example Content for Fourth Card -->
                                <div class="flex flex-col items-center justify-center relative">
                                    <h1 id="statuswaterFlow" class="mb-2 text-center text-xl font-extrabold tracking-tight leading-none md:text-xl lg:text-2xl"></h1>
                                    <svg id="waterflow-arrow" class="w-20 h-20 text-red-700 animate-wave" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <path d="M12 19V5M12 5L5 12M12 5L19 12" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                                    </svg>
                                    
                                </div>
                                <div class="text-center">
                                    <p class="text-lg text-gray-600">Waterflow</p>
                                    <h1 class="text-2xl text-gray-900">Debit Air: <span id="waterflow"></span></h1>
                                </div>
                            </div>
                        </div>
            
                        <!-- Column 2: Smaller column (1/4 of the width) -->
                        <div class="md:col-span-1 bg-white p-4 rounded-md shadow-md flex flex-col items-center justify-center space-y-4 gradient-hover-card">
                            <img src="{{ asset('storage/logo.png') }}" class="h-52 w-auto" alt="FlowBite Logo" />
                            <h1 class="text-2xl text-gray-900 font-bold text-center">Siaga Warga Majalaya</h1>
                            <button type="button" class="mt-5 text-white bg-[#4285F4] hover:bg-[#4285F4]/90 focus:ring-4 focus:outline-none focus:ring-[#4285F4]/50 font-medium rounded-lg text-sm px-4 py-2 sm:px-6 sm:py-3 md:px-8 md:py-3 lg:px-10 lg:py-4 text-center inline-flex items-center dark:focus:ring-[#4285F4]/55">
                                <a href="#" class="text-sm sm:text-lg md:text-xl lg:text-2xl font-bold">GET APP</a>
                            </button>
                            
                        </div>
                    </div>
                </div>
            </div>
            </section>
        
        

        {{-- <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-4 mt-10">
            <!-- Gunakan grid untuk menyusun tautan akses cepat -->
            <a href="#"
                class="block max-w-sm p-6 bg-white rounded-lg shadow-lg border border-gray-200 hover:border-gray-300 hover:shadow-xl active:border-blue-500 h-full">
                <h5 class="mb-2 text-2xl font-bold tracking-tight text-gray-900">Jumlah Pengguna Biasa</h5>
                <h5 class="mb-2 text-6xl font-bold tracking-tight text-gray-900">10</h5>
            </a>

            <a href="#"
                class="block max-w-sm p-6 bg-white rounded-lg shadow-lg border border-gray-200 hover:border-gray-300 hover:shadow-xl active:border-blue-500 h-full">
                <h5 class="mb-2 text-2xl font-bold tracking-tight text-gray-900">Jumlah Admin</h5>
                <h5 class="mb-2 text-6xl font-bold tracking-tight text-gray-900">10</h5>
            </a>

            <a href="#"
                class="block max-w-sm p-6 bg-white rounded-lg shadow-lg border border-gray-200 hover:border-gray-300 hover:shadow-xl active:border-blue-500 h-full">
                <h5 class="mb-2 text-2xl font-bold tracking-tight text-gray-900">Jumlah Seluruh Pengguna</h5>
                <h5 class="mb-2 text-6xl font-bold tracking-tight text-gray-900">20</h5>
            </a>
        </div> --}}
    </div>

    <div class="grid grid-cols-2 gap-4 mb-4">
        <div class="flex items-center justify-center h-48 mb-4 rounded">
            <div class="relative overflow-x-auto shadow-md sm:rounded-lg">
                <!-- Konten tambahan di sini jika dibutuhkan -->
            </div>
        </div>
    </div>
</div>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script>
    // Fungsi untuk memperbarui nilai curahHujan dan animasi lingkaran
 function updateCurahHujanAndProgress(data) {
     // Normalisasi data curah hujan menjadi persentase
     let percentage = (data / 4095) * 100;
 
     // Update text content for curahHujan
     $('#curahHujan').text(data); // Tampilkan nilai curah hujan
 
     // Update text content for percentage
     $('#curahHujanPercentage').text(percentage.toFixed(2) + '%'); // Tampilkan nilai persentase dengan dua angka desimal
 
     // Update stroke-dasharray and stroke-dashoffset for circular progress
     let progress = document.getElementById('raindrop-progress');
     let circumference = 2 * Math.PI * progress.getAttribute('r'); // Get the circumference of the circle
     let offset = circumference * (1 - percentage / 100); // Calculate the offset
     progress.setAttribute('stroke-dasharray', circumference);
     progress.setAttribute('stroke-dashoffset', offset);
 }
 
 
 // Panggil fungsi untuk memperbarui nilai curahHujan dan animasi lingkaran
 $(document).ready(function() {
     // Panggil fungsi pertama kali saat halaman dimuat
     updateCurahHujanAndProgress(0); // Atur nilai awal curahHujan (persentase)
 
     // Atur interval untuk memperbarui nilai setiap 1 detik (contoh saja, sesuaikan dengan kebutuhan Anda)
     setInterval(function() {
         // Fungsi untuk mengambil data dari server (AJAX)
         $.ajax({
             url: '{{ route('raindrops') }}', // Sesuaikan dengan route Anda
             type: 'GET',
             success: function(response) {
                 updateCurahHujanAndProgress(response); // Panggil fungsi untuk memperbarui nilai
             },
             error: function(xhr) {
                 console.log(xhr.responseText); // Tangani kesalahan jika terjadi
             }
         });
     }, 1000); // Set interval to 1 second (1000 milliseconds)
 });
 
 
 // Fungsi untuk memperbarui nilai cuaca
     function updateCuaca() {
         $.ajax({
             url: '{{ route('cuaca') }}', // Sesuaikan dengan route Anda
             type: 'GET',
             success: function(response) {
                 // Perbarui nilai cuaca dengan data yang diterima
                 $('#cuaca').text(response);
             },
             error: function(xhr) {
                 console.log(xhr.responseText); // Tangani kesalahan jika terjadi
             }
         });
     }
 
     function updateStatus() {
    $.ajax({
        url: '{{ route('status') }}', // Sesuaikan dengan route Anda
        type: 'GET',
        success: function(response) {
            // Perbarui nilai status dengan data yang diterima
            $('#status').text(response);

            // Periksa status dan ubah warna teks yang sesuai
            if (response === 'Aman') {
                $('#status').removeClass('text-red-700').addClass('text-green-700');
            } else if (response === 'Bahaya') {
                $('#status').removeClass('text-green-700').addClass('text-red-700');
            }
        },
        error: function(xhr) {
            console.log(xhr.responseText); // Tangani kesalahan jika terjadi
        }
    });
}

 

    // Fungsi untuk memperbarui nilai ultrasonic
    function updateUltrasonic() {
            $.ajax({
                url: '{{ route('ultrasonic') }}', // Sesuaikan dengan route Anda
                type: 'GET',
                success: function(response) {
                    // Perbarui nilai ultrasonic dengan data yang diterima
                    $('#ultrasonic').text(response);

                    // Periksa nilai ultrasonic dan perbarui status dan warnanya
                    let statusUltrasonik = $('#statusUltrasonik');
                    let statusIcon = $('#statusIcon');

                    if (response > 80) {
                        statusUltrasonik.text('Ketinggian Air Sungai Rendah, AMAN').removeClass('text-orange-500 text-red-700').addClass('text-green-700');
                        statusIcon.html('<svg class="w-20 h-20 text-green-700 animate-wave" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M12 5V19M12 19L5 12M12 19L19 12" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/></svg>');
                    } else if (response <= 80 && response >= 30) {
                        statusUltrasonik.text('Ketinggian Air Sungai Sedang, SIAGA').removeClass('text-green-700 text-red-700').addClass('text-orange-500');
                        statusIcon.html('<svg class="w-20 h-20 text-orange-500 animate-wave" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M6 12H18" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/></svg>');
                    } else {
                        statusUltrasonik.text('Ketinggian Air Sungai Tinggi, BAHAYA').removeClass('text-green-700 text-orange-500').addClass('text-red-700');
                        statusIcon.html('<svg class="w-20 h-20 text-red-700 animate-wave" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M12 5V19M12 5L5 12M12 5L19 12" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/></svg>');
                    }
                },
                error: function(xhr) {
                    console.log(xhr.responseText); // Tangani kesalahan jika terjadi
                }
            });
        }
 
      // Fungsi untuk memperbarui nilai waterflow
      function updateWaterflow() {
        $.ajax({
            url: '{{ route('waterflow') }}', // Sesuaikan dengan route Anda
            type: 'GET',
            success: function(response) {
                // Perbarui nilai waterflow dengan data yang diterima
                $('#waterflow').text(response);

                // Ubah kelas pada div berdasarkan nilai waterflow
                let statuswaterFlow = $('#statuswaterFlow');
                let waterflowArrow = $('#waterflow-arrow');
                if (response < 30) {
                    statuswaterFlow.text('Arus Sungai Lambat, AMAN').removeClass('text-orange-500 text-red-700').addClass('text-green-700');
                    waterflowArrow.removeClass('text-red-700').addClass('text-green-700 rotate-180');
                } else {
                    statuswaterFlow.text('Arus Sungai Deras, Bahaya').removeClass('text-green-700').addClass('text-red-700');
                    waterflowArrow.removeClass('text-green-700 rotate-180').addClass('text-red-700');
                }
            },
            error: function(xhr) {
                console.log(xhr.responseText); // Tangani kesalahan jika terjadi
            }
        });
    }
 
     // Panggil fungsi untuk memperbarui nilai data secara berkala setiap 2000 milidetik
     $(document).ready(function() {
         // Panggil fungsi-fungsi pertama kali saat halaman dimuat
         updateCuaca();
         updateStatus();
         updateUltrasonic();
         updateWaterflow();
         
         // Atur interval untuk memperbarui nilai setiap 1000 milidetik
         setInterval(function() {
             updateCuaca();
             updateStatus();
             updateUltrasonic();
             updateWaterflow();
         }, 1000);
     });
 
 
 
 </script>
@endsection
