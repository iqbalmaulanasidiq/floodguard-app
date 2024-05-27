<!-- @extends('layouts.template')

@section('title', 'Dashboard')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <form method="POST" action="{{ route('button.update') }}">
            @csrf
            <input type="hidden" name="status" value="{{ $btn == 1 ? 0 : 1 }}">
            <button type="submit" class="btn btn-primary">
                {{ $btn == 1 ? 'OFF' : 'ON' }}
            </button>
        </form>
        
        <p class="text-lg text-gray-600">Button Status: <span id="btn-status">{{ $btn == 1 ? 'ON' : 'OFF' }}</span></p>  
        <p class="text-lg text-gray-600">Debit: <span id="debit"></span></p>  
        <p class="text-lg text-gray-600">TDS: <span id="tds"></span></p>  
        <p class="text-lg text-gray-600">Turbidity: <span id="turbidity"></span></p>  
        <p class="text-lg text-gray-600">Value TDS: <span id="valueTDS"></span></p>  
        <p class="text-lg text-gray-600">Value Turbidity: <span id="valueTurbidity"></span></p>
    </div> 
</div>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script>
    function updateDebit() {
        $.ajax({
            url: '{{ route('debit') }}',
            type: 'GET',
            success: function(response) {
                $('#debit').text(response.debitData);
            },
            error: function(xhr) {
                console.log(xhr.responseText);
            }
        });
    }

    function updateTDS() {
        $.ajax({
            url: '{{ route('tds') }}',
            type: 'GET',
            success: function(response) {
                $('#tds').text(response.tdsData);
            },
            error: function(xhr) {
                console.log(xhr.responseText);
            }
        });
    }

    function updateTurbidity() {
        $.ajax({
            url: '{{ route('turbidity') }}',
            type: 'GET',
            success: function(response) {
                $('#turbidity').text(response.turbidityData);
            },
            error: function(xhr) {
                console.log(xhr.responseText);
            }
        });
    }

    function updateValueTurbidity() {
        $.ajax({
            url: '{{ route('valueTurbidity') }}',
            type: 'GET',
            success: function(response) {
                $('#valueTurbidity').text(response.valueTurbidityData);
            },
            error: function(xhr) {
                console.log(xhr.responseText);
            }
        });
    }

    function updateValueTDS() {
        $.ajax({
            url: '{{ route('valueTds') }}',
            type: 'GET',
            success: function(response) {
                $('#valueTDS').text(response.valueTdsData);
            },
            error: function(xhr) {
                console.log(xhr.responseText);
            }
        });
    }

    $(document).ready(function() {
        setInterval(updateDebit, 200);
        setInterval(updateTDS, 200);
        setInterval(updateTurbidity, 200);
        setInterval(updateValueTurbidity, 200);
        setInterval(updateValueTDS, 200);
    });
</script>
@endsection



Route::get('/debit', [IndexController::class, 'showDebit'])->name('debit');
Route::get('/tds', [IndexController::class, 'showTds'])->name('tds');
Route::get('/turbidity', [IndexController::class, 'showTurbidity'])->name('turbidity');
Route::get('/valueTds', [IndexController::class, 'showVtds'])->name('valueTds');
Route::get('/valueTurbidity', [IndexController::class, 'showWVturbidty'])->name('valueTurbidity'); -->