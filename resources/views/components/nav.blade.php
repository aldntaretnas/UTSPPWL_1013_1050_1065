<nav class="navbar navbar-expand-lg bg-body-tertiary">
    <div class="container-fluid">
        <a class="navbar-brand" href="#">Navbar</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown"
            aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNavDropdown">
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link {{ $active == 'home' ? 'active' : ' ' }}" href="{{ route('index') }}">
                        <button type="button"
                            class="btn btn{{ $active == 'home' ? '-' : '-outline-' }}secondary">Home</button></a>
                </li>
                <li class="nav-item">
                    <a class="nav-link {{ $active == 'brand' ? 'active' : ' ' }}" href="{{ route('brand') }}">
                        <button type="button"
                            class="btn btn{{ $active == 'brand' ? '-' : '-outline-' }}secondary">Brand</button>
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link {{ $active == 'categories' ? 'active' : ' ' }}" href="{{ route('categories') }}">
                        <button type="button"
                            class="btn btn{{ $active == 'categories' ? '-' : '-outline-' }}secondary">Categories</button>
                    </a>
                </li>
            </ul>
        </div>
    </div>
</nav>