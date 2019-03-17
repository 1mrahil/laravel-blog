{{-- style="background-color:rgba(0,0,0,0.5) !important;" --}}

<div id="app">
        <nav  class="navbar navbar-expand-md navbar-dark fixed-top bg-dark">
            <div class="container-fluid" >
                <a class="navbar-brand" href="{{ url('/') }}">
                    {{ config('app.name', 'Selamat Jalan') }}
                </a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <!-- Left Side Of Navbar -->
                    <ul class="navbar-nav mr-auto">
                            <li class="nav-item"><a class="nav-link" href="/pages/blog" >Blog</a></li>
                            <li class="nav-item"><a class="nav-link" href="#">About</a></li>
                            <li class="nav-item"><a class="nav-link" href="/pages/blog/contact">Contact</a></li>
                            <!--<li class="nav-item"><a class="nav-link" href="/pages/blog/create" >Create Post</a></li>-->
                    </ul>

                    <!-- Right Side Of Navbar -->
                    <ul class="navbar-nav ml-auto">
                        <li class="nav-item"><a class="nav-link" href="https://www.facebook.com" target="_blank"><i class="fa fa-facebook fa-fw"></i></a></li>
                        <li class="nav-item"><a class="nav-link" href="https://www.twitter.com" target="_blank"><i class="fa fa-twitter fa-fw"></i></a></li>
                        <li class="nav-item"><a class="nav-link" href="https://plus.google.com/" target="_blank"><i class="fa fa-google-plus fa-fw"></i></a></li>
                        <!-- Authentication Links -->
                        @guest
                       
                            <li class="nav-item">
                                <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                            </li>
                            <li class="nav-item">
                                @if (Route::has('register'))
                                    <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
                                @endif
                            </li>
                        @else
                            <li class="nav-item dropdown">
                                <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                    {{ Auth::user()->name }} <span class="caret"></span>
                                </a>
                                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                                    <a class="dropdown-item" href="/pages/blog/create" >Nieuwe post</a>
                                    <a class="dropdown-item" href="/pages/blog/" >Overzicht posts</a>
                                    <a class="dropdown-item" href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        {{ __('Logout') }}
                                    </a>
                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                        @csrf
                                    </form>
                                </div>
                            </li>
                        @endguest
                    </ul>
                </div>
            </div>
        </nav>

        
    </div>
</div>
</div>
        
        






