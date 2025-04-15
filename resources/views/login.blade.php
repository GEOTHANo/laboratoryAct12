<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Register</title>
</head>
<body>
    <div>
        <h1>Login</h1>
        <form method="POST" action="/login">
            @csrf
            <input name="email" type="email" placeholder="Email" required>
            <br><br>
            <input name="password" type="password" placeholder="Password" required>
            <br><br>
            <button type="submit">Login</button>
        </form>
        <p>Don't have an account? <a href="/login">Register here</a></p>
    </div>

      
</body>
</html>