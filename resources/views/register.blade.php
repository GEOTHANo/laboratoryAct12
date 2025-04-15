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
        <h1>Register</h1>
        <form method="POST" action="/register">
            @csrf
            <input name="name" placeholder="Name" required>
            <br><br>
            <input name="email" type="email" placeholder="Email" required>
            <br><br>
            <input name="password" type="password" placeholder="Password" required>
            <br><br>
            <input name="password_confirmation" type="password" placeholder="Confirm Password" required>
            <br><br>
            <button type="submit">Register</button>
        </form>
        <p>Already have an account? <a href="/register">Login here</a></p>
    </div>

      
</body>
</html>