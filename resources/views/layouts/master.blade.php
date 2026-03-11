<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>My Profile</title>
    <link rel="stylesheet" href="{{ asset('assets/css/style.css') }}">
</head>

<body>

    <nav class="navbar">

        <div class="logo">MyProfile</div>

        <div class="menu">
            <a href="/">Home</a>
            <a href="/about">About</a>
            <a href="/contact">Contact</a>
        </div>

    </nav>

    <div class="container">
        @yield('content')
    </div>

    <footer>
        <p>© 2026 Fito Rifqi</p>
    </footer>

</body>

</html>