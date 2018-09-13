<nav class="navbar navbar-expand-md navbar-dark bg-dark navbar-laravel">
    <div class="container">
        <a class="navbar-brand" href="#">
            {{ config('app.name', 'Pastry Shop') }}
        </a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <!-- Left Side Of Navbar -->
            <ul class="navbar-nav mr-auto">
                <li class="nav-item"><a class="nav-link" href="#">{{ __('Home') }}</a></li>
                <li class="nav-item"><a class="nav-link" href="#cart">{{ __('Shopping Cart') }}</a></li>
            </ul>

            <!-- Right Side Of Navbar -->
            <ul class="navbar-nav ml-auto">
                <!-- Authentication Links -->
                @if (!session('logged'))
                    <li class="nav-item">
                        <a class="nav-link" href="#login">{{ __('Login') }}</a>
                    </li>
                @else
                    <li class="nav-item">
                        <a class="nav-link" href="#add">{{ __('Add Product') }}</a>
                    </li>

                    <li class="nav-item dropdown">

                        <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown">
                            {{ session()->get('logged') }}
                        </a>

                        <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                            <a class="dropdown-item" href="#products">
                                {{__('Products')}}
                            </a>
                            <a class="dropdown-item" href="#orders">
                                {{__('Orders')}}
                            </a>
                            <a class="dropdown-item" href="">
                                {{ __('Logout') }}
                            </a>
                        </div>
                    </li>

                @endif
            </ul>
        </div>
    </div>
</nav>
