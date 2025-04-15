<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Login</title>
    <link rel="stylesheet" href="{{ asset('build/assets/css/bootstrap.min.css') }}">
</head>
<body>
    <div class="container d-flex justify-content-center align-items-center vh-100">
        <div class="card shadow-lg border-0 w-100" style="max-width: 400px;">   
            <div class="card-header text-center">
                <h1>Login</h1>
            </div>
            <div class="card-body">
                <form method="POST" action="/login">
                    @csrf
                    <div class="mb-3">
                        <input name="email" type="email" class="form-control" placeholder="Email" required>
                    </div>
                    <div class="mb-3">
                        <input name="password" type="password" class="form-control" placeholder="Password" required>
                    </div>
                    <button type="submit" class="btn btn-primary w-100">Login</button>
                </form>
                <p class="text-center mt-3">Don't have an account? <a href="/register">Register here</a></p>
            </div>
        </div>
    </div>

    <script src="{{ asset('build/assets/js/bootstrap.bundle.min.js') }}"></script>
</body>
</html>