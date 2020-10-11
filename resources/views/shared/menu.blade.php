<ul class="nav nav-pills justify-content-center align-items-center p-3 px-md-4 mb-3 bg-white border-bottom shadow-sm">
    <li class="nav-item">
        <a class="nav-link {{ Route::currentRouteName() == 'home' ? 'active' : '' }}" href="{{ route('home') }}">
            HOME
        </a>
    </li>

    <li class="nav-item">
        <a class="nav-link {{ Route::currentRouteName() == 'about' ? 'active' : '' }}" href="{{ route('about') }}">
            CHI SONO
        </a>
    </li>

    <li class="nav-item">
        <a class="nav-link {{ Route::currentRouteName() == 'products.index' ? 'active' : '' }}"
           href="{{ route('products.index') }}">
            PRODOTTI
        </a>
    </li>

    <li class="nav-item">
        <a class="nav-link {{ Route::currentRouteName() == 'contact' ? 'active' : '' }}" href="{{ route('contact') }}">
            CONTATTI
        </a>
    </li>
</ul>
