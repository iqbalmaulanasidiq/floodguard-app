
<!doctype html>
<html>
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link href="/dist/output.css" rel="stylesheet">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  @vite(['resources/css/app.css','resources/js/app.js'])
</head>
<body class="bg-gray-50">

 


  @include('components.navbar')
    @yield('content')




</body>
</html>


 
