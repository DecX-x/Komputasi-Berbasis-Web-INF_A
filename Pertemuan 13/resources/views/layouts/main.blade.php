<!DOCTYPE html>
<html lang="en">
<head>
  <title>@yield('title', 'Aplikasi Laravel')</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</head>
<body>

<nav class="navbar navbar-expand-sm bg-dark navbar-dark">
  <div class="container-fluid">
    <a class="navbar-brand" href="#">Logo</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#collapsibleNavbar">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="collapsibleNavbar">
      <ul class="navbar-nav">
        <li class="nav-item">
          <a class="nav-link" href="{{ route('topmenu1_blade') }}">HOME</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="{{ route('topmenu2_blade') }}">ABOUT</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="{{ route('topmenu3_blade') }}">CONTACT</a>
        </li>  
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown">Dropdown</a>
          <ul class="dropdown-menu">
            <li><a class="dropdown-item" href="#">Link</a></li>
            <li><a class="dropdown-item" href="#">Another link</a></li>
            <li><a class="dropdown-item" href="#">A third link</a></li>
          </ul>
        </li>
      </ul>
    </div>
  </div>
</nav>



<main class="container-fluid mt-3">
  <h3>@yield('title', 'Aplikasi Laravel')</h3>
  @yield('content')

</main>

<footer class="bg-dark text-white text-center py-3">
    <p>&copy; 2024 Ellbendls.</p>
</footer>

</body>
</html>


