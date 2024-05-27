<!DOCTYPE html>
<html>
<head>
    <title>Realtime Data</title>
    <script src="https://www.gstatic.com/firebasejs/10.12.1/firebase-app.js"></script>
    <script src="https://www.gstatic.com/firebasejs/10.12.1/firebase-analytics.js"></script>
    <script src="https://www.gstatic.com/firebasejs/10.12.1/firebase-database.js"></script>
</head>
<body>
    <form method="POST" action="{{ route('button.update') }}">
        @csrf
        <input type="hidden" name="status" value="1">
        <button type="submit" class="btn btn-primary">ON</button>
    </form>
    
    <form method="POST" action="{{ route('button.update') }}">
        @csrf
        <input type="hidden" name="status" value="0">
        <button type="submit" class="btn btn-secondary">OFF</button>
    </form>
    
</body>
</html>
