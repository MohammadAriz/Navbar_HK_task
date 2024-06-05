<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Navbar</title>
    <style>
        /* Basic styling for navbar */
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
        }

        nav {
            background-color: #333;
            color: #fff;
            text-align: center;
            padding: 10px 0;
        }

        nav a {
            color: #fff;
            text-decoration: none;
            margin: 0 10px;
        }

        nav a:hover {
            text-decoration: underline;
        }
    </style>
</head>

<body>
    <nav>
        <a href="{{ url('/home') }}">Home</a>
        <a href="{{ url('/about') }}">About</a>
        <a href="{{ url('/contact') }}">Contact</a>
    </nav>
</body>

</html>

@yield('main-content')
