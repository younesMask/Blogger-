<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>
     <script>
    @if(Session::has('success'))

        toastr.success("{{ Session::get('success') }}");

    @endif
    
    </script>
      
    <!-- Fonts -->
    <link rel="dns-prefetch" href="https://fonts.gstatic.com">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.0/css/all.css" integrity="sha384-lZN37f5QGtY3VHgisS14W3ExzMWZxybE1SJSEsQp9S+oqd12jhcu+A56Ebc1zFSJ" crossorigin="anonymous">
   
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet" type="text/css">
 
 
    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
     
 </head>
<body>
    <div id="app">
        <nav class="navbar navbar-expand-md navbar-light navbar-laravel">
            <div class="container">
                <a class="navbar-brand" href="{{ url('/') }}">
                    {{ config('app.name', 'Laravel') }}
                </a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <!-- Left Side Of Navbar -->
                    <ul class="navbar-nav mr-auto">

                    </ul>

                    <!-- Right Side Of Navbar -->
                    <ul class="navbar-nav ml-auto">
                        <!-- Authentication Links -->
                        @guest
                            <li class="nav-item">
                                <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
                            </li>
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
                    </ul>
                </div>
            </div>
        </nav>

        <main class="py-4">
               <div class="container">
                   <div class="row">

                     @if(auth::check())
                     <div class="col-lg-4">
                         <ul class="list-group">
                         <li class="list-group-item">
                                <a href="{{ route('home') }} ">Home</a>                            
                            </li>   

                            <li class="list-group-item">
                                 <a href="{{ route('category.create') }}">Create new Category </a> 
                            </li>  
                            <li class="list-group-item">
                                 <a href="{{ route('categories') }}">Show Categories </a> 
                            </li>  


                            <li class="list-group-item">
                                 <a href="{{ route('post.create') }}">Create new post </a> 
                            </li> 

                            <li class="list-group-item">
                                 <a href="{{ route('posts') }}">show  posts </a> 
                            </li> 
                            <li class="list-group-item">
                                 <a href="{{ route('post.trashed') }}">show  trashed Posts </a> 
                            </li> 

                            </li> 
                            <li class="list-group-item">
                                 <a href="{{ route('tags') }}">show tags </a> 
                            </li> 
                            <li class="list-group-item">
                                 <a href="{{ route('tag.create') }}">Create new tag </a> 
                            </li> 
                           @if(Auth::user()->admin)
                           <li class="list-group-item">
                                 <a href="{{ route('users') }}">Users </a> 
                            </li> 
                            
                            <li class="list-group-item">
                                 <a href="{{ route('user.create') }}">Create new user </a> 
                            </li> 
                             
                            <li class="list-group-item">
                                 <a href="{{ route('user.profile') }}">My profile </a> 
                            </li> 
                           @endif

                           @if(Auth::user()->admin)
                           <li class="list-group-item">
                                 <a href="{{ route('settings') }}">Settings   </a> 
                            </li> 
                          
                           @endif
                           
              


                         </ul> 
                         
                       </div>
                     @endif

                       <div class="col-lg-8">

                       @include('admin.includes.flash-message')
                       @yield('content')
                       
                       </div>

                   </>
               </div>
        </main>
    </div>
 
</body>
</html>
