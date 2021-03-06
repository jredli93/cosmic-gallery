<ul class="navigation-list">
    <li class="navigation-item"><img class="navigation-item-logo" src="{{asset('/assets/images/logo-cosmicgallery.png')}}" alt="logo" /></li>
    <li class="navigation-item"><a href="{{ URL::route('home') }}">Home</a></li>
    <li class="navigation-item"><a href="{{ URL::route('studio') }}">Studio</a></li>
    <li class="navigation-item"><a href="{{ URL::route('artists') }}">Artists</a></li>
    <li class="navigation-item"><a href="{{ URL::route('tattoo') }}">Tattoo</a></li>
    <li class="navigation-item"><a href="{{ URL::route('contact') }}">Contact</a></li>
    {{-- <li class="navigation-item"><a href="{{ URL::route('faq') }}">FAQ</a></li> --}}
    <!-- Authentication Links -->
    {{-- @guest
        <li class="nav-item">
            <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
        </li> --}}
{{--        @if (Route::has('register'))--}}
{{--            <li class="nav-item">--}}
{{--                <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>--}}
{{--            </li>--}}
{{--        @endif--}}
    {{-- @else
        <li class="nav-item dropdown">
            <a id="navbarDropdown" class="nav-link dropdown-toggle" href="/admin" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                {{ Auth::user()->name }}
            </a>

            <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                <a class="dropdown-item" href="{{ route('logout') }}"
                   onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                    {{ __('Logout') }}
                </a>

                <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                    @csrf
                </form>
            </div>
        </li>
    @endguest --}}
</ul>
<div class="navigation-mobile" id="navigation-mobile">
    <img class="navigation-mobile-logo" src="{{asset('/assets/images/logo-cosmicgallery.png')}}" alt="logo" />
    <span class="navigation-hamburger"><i class="fas fa-bars"></i></span>
</div>
