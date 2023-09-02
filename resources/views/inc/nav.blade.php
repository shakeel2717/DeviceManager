<ul class="navbar-nav me-auto mb-2 mb-lg-0">
    <li class="nav-item">
        <a class="nav-link {{ Request::is('number') ? 'active' : '' }}" aria-current="page" href="{{ route('number.index') }}">All Numbers</a>
    </li>
    <li class="nav-item">
        <a class="nav-link {{ Request::is('country*') ? 'active' : '' }}" aria-current="page" href="{{ route('country.index') }}">All Countries</a>
    </li>
    <li class="nav-item">
        <a class="nav-link" aria-current="page" href="#">Privacy</a>
    </li>
</ul>
