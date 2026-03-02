<!DOCTYPE html>
<html lang="en">
<!-- Bootstrap CSS -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
<!-- Bootstrap JS -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>

<style>
    body{
        font-family: "Lucida Console", "Courier New", monospace;
        display: flex;
        flex-direction: column;
       
    }
    .nav-link {
        padding: 8px 14px;
        border-radius: 6px;
        transition: box-shadow 0.3s ease;
        color: white;
    }

    .nav-link.active {
        box-shadow: 0 0 12px 3px rgba(230, 237, 239, 0.8); /* light blue glow */
        
    }
    html, body {
        height: 100%;
        margin: 0;
    }


    .page-content {
        flex: 1; /* pushes footer down */
    }
    header{
    }

    footer {
        color: white;
        text-align: center;
        margin-top: 22%;
    }

</style>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title')</title>
</head>

<body>
<div class="border border-dark" style="text-align: center;">
    <nav class="border border-dark" style="display: flex; gap: 100px; justify-content: center; background-color: #C8AD7F; padding:2%;">
        <h4><a href="/" class="nav-link {{ request()->is('/') ? 'active' : '' }}">Home</a></h4>
        <h4><a href="/manage" class="nav-link {{ request()->is('manage') ? 'active' : '' }}">manage</a></h4>
        <h4><a href="/search" class="nav-link {{ request()->is('search') ? 'active' : '' }}">search</a></h4>
        <h4><a href="/about" class="nav-link {{ request()->is('about') ? 'active' : '' }}">about</a></h4>
    </nav>
    <br/>

    <header class="border border-dark" >
        <img style=" border: 1px solid black; border-radius: 140px; box-shadow:  0 0 12px 3px rgba(231, 222, 161, 0.8);"
            src="{{ asset('images/homepage_logo.png') }}"
            alt="an image"
            height="250"
            width="250"
        />
    </header>
    <br/>

    <main class= "page-content">
       @yield('content')
    </main>
        <br/>

    <footer class="border border-dark" style=" background-color: #C8AD7F; padding:2%;">
       <h4> &#169; Colin okafor</h4>
    </footer>
</div>
</body>

</html>