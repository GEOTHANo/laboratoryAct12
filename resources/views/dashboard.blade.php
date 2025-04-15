<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Dashboard</title>
    <link rel="stylesheet" href="{{ asset('build/assets/css/bootstrap.min.css') }}">
</head>
<body>
    <div class="container d-flex justify-content-center align-items-center vh-100">
        <div class="card shadow-lg border-0 w-100" style="max-width: 400px;">   
            <div class="card-header text-center">
                <h1>Dashboard</h1>
            </div>
            <div class="card-body text-center">
                <h2>Welcome, {{ auth()->user()->name }}!</h2>
                <p>You are logged in as <strong>{{ auth()->user()->email }}</strong></p>
                <form method="POST" action="/logout" class="mt-3">
                    @csrf
                    <button type="submit" class="btn btn-danger w-100">Logout</button>
                </form>
            </div>
        </div>
    </div>

    <script src="{{ asset('build/assets/js/bootstrap.bundle.min.js') }}"></script>
</body>
</html>