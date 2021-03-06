<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
  <!-- Global site tag (gtag.js) - Google Analytics -->
  <script async src="https://www.googletagmanager.com/gtag/js?id=UA-69839649-5"></script>
  <script>
    window.dataLayer = window.dataLayer || [];
    function gtag(){dataLayer.push(arguments);}
    gtag('js', new Date());

    gtag('config', 'UA-69839649-5');
  </script>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <!-- CSRF Token -->
  <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>
        @if(View::hasSection('title'))
            @yield('title')
        @else
            {{ config('app.name', 'AudiWallpapers.com') }}
        @endif
    </title>

  <meta name="description" content="The number one resource for Audi wallpapers">

  <!-- Scripts -->
  <script src="{{ asset('js/app.js') }}" defer></script>

  <!-- Fonts -->
  <link rel="dns-prefetch" href="//fonts.gstatic.com">
  <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

  {{-- Viewport --}}
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

  <!-- Styles -->
  <link href="{{ asset('css/app.css') }}" rel="stylesheet">
  <link href="{{ asset('css/mobile.css') }}" rel="stylesheet">
  {{-- FontAwesome --}}
  <link href="{{ asset('css/all.css') }}" rel="stylesheet">

</head>
<body style="background-color: #2e2e2e">
    <div id="app">
    	<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
            {{-- <div class="container"> --}}
        	    <a class="navbar-brand" href="{{route('home')}}">Audi Wallpapers</a>
        	    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
            	    <span class="navbar-toggler-icon"></span>
        	    </button>
        	    <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
            	    <div class="navbar-nav">
                        <a class="nav-item nav-link {{ request()->is('/') ? 'active' : '' }}" href="{{route('home')}}">Home <span class="sr-only">(current)</span></a>
                        {{-- <a class="nav-item nav-link" href="#">Categories</a> --}}
                        {{-- <a class="nav-item nav-link" href="#">Pricing</a> --}}
                        <a class="nav-item nav-link upload-btn btn btn-primary {{ request()->is('/') ? 'active' : '' }}" href="{{route('upload')}}">Upload</a>
            	    </div>
        	    
                    <!-- Left Side Of Navbar -->
                    <ul class="navbar-nav mr-auto">

                    </ul>

                    <!-- Right Side Of Navbar -->
                    {{-- <ul class="navbar-nav ml-auto">
                        
                        @guest
                            <li class="nav-item">
                                <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                            </li>
                            @if (Route::has('register'))
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
                                </li>
                            @endif
                        @else
                            <li class="nav-item dropdown">
                                <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                    {{ Auth::user()->name }} <span class="caret"></span>
                                </a>

                                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
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
                    </ul> --}}
                </div>
            {{-- </div> --}}
    	</nav>

    	{{-- <main class="py-4"> --}}
            
                @yield('content')
            
    	{{-- </main> --}}
      <footer>
        <div class="container text-center">
          Got a nice Audi wallpaper you want to share with the community? Upload it <a href="{{url('upload')}}">here!</a><br>
          <small>Copyright &copy; AudiWallpapers.com</small>
        </div>
      </footer>
    </div>



</body>
</html>
