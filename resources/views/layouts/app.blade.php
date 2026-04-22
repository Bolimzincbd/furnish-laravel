<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Furnish - @yield('title', 'Home')</title>
    @vite(['resources/scss/style.scss', 'resources/js/main.js', 'resources/js/custom.js', 'resources/js/swiper.js'])
</head>
<body class="font-sans text-gray-800">

    <nav class="navbar navbar-expand-lg bg-white shadow-sm px-4 py-3 navbar-custom">
        <div class="container-fluid px-0">
            <a class="navbar-brand" href="{{ route('home') }}">
                <span class="d-flex flex-column text-uppercase text-xs fw-bold lh-sm">
                    <span style="letter-spacing: .12rem;">Furnish</span>
                    <span>Template</span>
                </span>
            </a>

            <div class="mx-auto d-lg-block d-none">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                    <li class="nav-item">
                        <a class="nav-link {{ request()->routeIs('home') ? 'active' : '' }}" href="{{ route('home') }}">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link {{ request()->routeIs('products.*') ? 'active' : '' }}" href="{{ route('products.index') }}">Products</a>
                    </li>
                </ul>
            </div>
            
            <div class="d-flex align-items-center gap-4">
                <span class="d-flex align-items-center gap-2 fw-bold">
                    <span><i class="bi bi-telephone"></i></span>
                    <span>+901234576</span>
                </span>
                <a data-bs-toggle="offcanvas" href="#offcanvasExample" role="button" aria-controls="offcanvasExample">
                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="currentColor" class="bi bi-list" viewBox="0 0 16 16">
                        <path fill-rule="evenodd" d="M2.5 12a.5.5 0 0 1 .5-.5h10a.5.5 0 0 1 0 1H3a.5.5 0 0 1-.5-.5m0-4a.5.5 0 0 1 .5-.5h10a.5.5 0 0 1 0 1H3a.5.5 0 0 1-.5-.5m0-4a.5.5 0 0 1 .5-.5h10a.5.5 0 0 1 0 1H3a.5.5 0 0 1-.5-.5"/>
                    </svg>
                </a>
            </div>
        </div>
    </nav>

    <main>
        @if(session('success'))
            <div class="alert alert-success text-center mb-0 rounded-0">
                {{ session('success') }}
            </div>
        @endif

        @yield('content')
    </main>

    <footer class="bg-dark pt-8 footer">
        <div class="container">
            <div class="row pb-3">
                <div class="col-md-6 text-center text-md-start">
                    <p class="mb-0 text-white">&copy; {{ date('Y') }} Furnish. Laravel Integration.</p>
                </div>
            </div>
        </div>
    </footer>

    <div class="offcanvas offcanvas-end" tabindex="-1" id="offcanvasExample" aria-labelledby="offcanvasExampleLabel">
        <div class="offcanvas-header px-4">
            <h5 class="offcanvas-title">Menu</h5>
            <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
        </div>
        <div class="offcanvas-body">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                <li class="nav-item"><a class="nav-link" href="{{ route('home') }}">Home</a></li>
                <li class="nav-item"><a class="nav-link" href="{{ route('products.index') }}">Products</a></li>
            </ul>
        </div>
    </div>
</body>
</html>