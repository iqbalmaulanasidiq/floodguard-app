
<!doctype html>
<html>
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  {{-- <link href="/dist/output.css" rel="stylesheet"> --}}
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <head>
    <!-- Other head content -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css"/>
    {{-- <meta http-equiv="refresh" content="2" >  --}}
    

</head>

  <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
  <link href="https://cdn.jsdelivr.net/npm/flowbite@latest/dist/flowbite.min.css" rel="stylesheet">
  {{-- <script src="https://js.pusher.com/7.2/pusher.min.js"></script>
  <script src="https://www.gstatic.com/firebasejs/10.12.1/firebase-app.js"></script>
  <script src="https://www.gstatic.com/firebasejs/10.12.1/firebase-database.js"></script> --}}
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

 

    <script src="{{ mix('js/app.js') }}"></script>
  @vite(['resources/css/app.css','resources/js/app.js'])
  
  <title>Siaga Warga Majalaya</title>
  <style>
    .navbar-hidden {
    transform: translateY(-100%);
    transition: transform 0.3s ease-in-out;
}

.navbar-visible {
    transform: translateY(0);
    transition: transform 0.3s ease-in-out;
}

.animate-fade-in {
    opacity: 0;
    animation: fadeIn 0.5s forwards;
}
.fade-in {
    opacity: 0;
    animation: fadeIn 3s forwards;
}
.fade-in-two {
    opacity: 0;
    animation: fadeIn 3s forwards;
}

@keyframes fadeIn {
    to {
        opacity: 1;
    }
}

.delay-0 { animation-delay: 0s; }
.delay-1 { animation-delay: 0.2s; }
.delay-2 { animation-delay: 0.4s; }
.delay-3 { animation-delay: 0.6s; }
.delay-4 { animation-delay: 0.8s; }
.delay-5 { animation-delay: 1s; }
.delay-6 { animation-delay: 1.2s; }
.delay-7 { animation-delay: 1.4s; }
.delay-8 { animation-delay: 1.6s; }
.delay-9 { animation-delay: 1.8s; }
.delay-10 { animation-delay: 2s; }
.delay-11{ animation-delay: 2.2s; }
.delay-12 { animation-delay: 2.4s; }
.delay-13 { animation-delay: 2.6s; }
.delay-14 { animation-delay: 2.8s; }
.delay-15 { animation-delay: 3s; }
.delay-16 { animation-delay: 3.2s; }
.delay-17 { animation-delay: 3.4s; }
.delay-18 { animation-delay: 3.6s; }

@keyframes wave {
    0%, 100% {
        transform: translateY(0);
    }
    25% {
        transform: translateY(-10px);
    }
    50% {
        transform: translateY(0);
    }
    75% {
        transform: translateY(10px);
    }
}

@keyframes waveLeft {
    0%, 100% {
        transform: translateX(0);
    }
    25% {
        transform: translateX(-10px);
    }
    50% {
        transform: translateX(0);
    }
    75% {
        transform: translateX(10px);
    }
}

@keyframes waveRight {
    0%, 100% {
        transform: translateX(0);
    }
    25% {
        transform: translateX(10px);
    }
    50% {
        transform: translateX(0);
    }
    75% {
        transform: translateX(-10px);
    }
}

@keyframes waveDown {
    0%, 100% {
        transform: translateY(0);
    }
    25% {
        transform: translateY(10px);
    }
    50% {
        transform: translateY(0);
    }
    75% {
        transform: translateY(-10px);
    }
}

.animate-wave {
    animation: wave 1s infinite;
}

.animate-wave-left {
    animation: waveLeft 1s infinite;
}

.animate-wave-right {
    animation: waveRight 1s infinite;
}

.animate-wave-down {
    animation: waveDown 1s infinite;
}
.active {
    font-weight: bold;
    color: blue; /* Sesuaikan dengan gaya yang Anda inginkan */
}
/* CSS for gradient hover effect */
.gradient-hover {
    transition: background-color 0.3s ease-in-out; /* Smooth transition */
}
.gradient-hover-card {
    transition: background-color 0.3s ease-in-out; /* Smooth transition */
}

.gradient-hover:hover {
    background-image: linear-gradient(45deg, #4F46E5, #8E54E9); /* Gradient colors */
}
.gradient-hover-card:hover {
    background-image: linear-gradient(45deg, #3b4fff, #000000); /* Gradient colors */
}



</style>
</head>
<body class="bg-gray-50">

 


  
    @yield('content')



    <script src="https://cdnjs.cloudflare.com/ajax/libs/flowbite/2.3.0/flowbite.min.js"></script>
</body>
</html>


 
