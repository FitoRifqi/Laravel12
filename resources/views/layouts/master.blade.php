<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Personal Profile</title>
    <link rel="stylesheet" href="{{ asset('assets/css/style.css') }}">
</head>

<body>

    <nav class="navbar">

        <div class="logo">Urfit</div>

        <div class="menu-toggle" id="menu-toggle">
            ☰
        </div>

        <div class="menu" id="menu">
            <a href="/">Home</a>
            <a href="/about">About</a>
            <a href="/contact">Contact</a>
        </div>

    </nav>

    <div class="container">
        @yield('content')
    </div>

    <footer>
        <p>© 2026 by Fito Rifqi</p>
    </footer>

    <script>
    const toggle = document.getElementById("menu-toggle");
    const menu = document.getElementById("menu");

    toggle.addEventListener("click", () => {
        menu.classList.toggle("active");
    });
    </script>

</body>

</html>