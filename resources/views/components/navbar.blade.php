<nav class="navbar navbar-expand-lg bg-body-tertiary">
    <div class="container-fluid">
        <a class="navbar-brand d-flex align-items-center" href="{{ route('menu.getMenuHome') }}">
            <img src="{{ asset('images/kfc-logo.png') }}" alt="logo" id="kfc-logo">
            <span id="kfc-text">KFC</span>
        </a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav me-auto mb-2 mb-lg-0">
            <li class="nav-item">
            <a class="nav-link @yield('menu-active')" href="{{ route('menu.getMenuHome') }}">Menu</a>
            </li>
            <li class="nav-item">
            <a class="nav-link @yield('inventory-active')" href="#">Order</a>
            </li>
        </div>
    </div>
</nav>
