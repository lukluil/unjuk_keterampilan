<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title {{config('app.name')}}>Wes Makmur</title>
        <!-- Favicon-->
        <link rel="icon" type="image/x-icon" href="{{asset('blog/assets/favicon.ico')}}" />
        <!-- Core theme CSS (includes Bootstrap)-->
        <link href="{{asset('blog/css/styles.css')}}" rel="stylesheet" />
    </head>
    <body>
        <!-- Responsive navbar-->
        <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
            <div class="container">
                <a class="navbar-brand" href="{{url('beranda')}}">Wes Makmur</a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation"><span class="navbar-toggler-icon"></span></button>
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
                      {{--  @if (Route::has('login'))
                            <div class="nav-item">
                                @auth
                                    <a href="{{ url('/home') }}" class="font-semibold text-gray-600 hover:text-gray-900 dark:text-gray-400 dark:hover:text-white focus:outline focus:outline-2 focus:rounded-sm focus:outline-red-500">Home</a>
                                @else
                                    <a href="{{ route('login') }}" class="nav-item font-semibold text-gray-600 hover:text-gray-900 dark:text-gray-400
                                    dark:hover:text-white focus:outline focus:outline-2 focus:rounded-sm focus:outline-red-500">Log in</a>
                                    @if (Route::has('register'))
                                        <a href="{{ route('register') }}" class="ml-4 font-semibold text-gray-600 hover:text-gray-900
                                        dark:text-gray-400 dark:hover:text-white focus:outline focus:outline-2 focus:rounded-sm focus:outline-red-500">Register</a>
                                    @endif
                                @endauth
                            </div>
                        @endif--}}
                        <li class="nav-item"><a class="nav-link active" aria-current="page" href="{{ route('login') }}">Login</a></li>
                        <li class="nav-item"><a class="nav-link active" aria-current="page" href="{{ route('register') }}">Register</a></li>
                    </ul>
                </div>
            </div>
        </nav>
        <!-- Page content-->
        <div class="container">
            <div class="row">
                <div class="container-fluid text-dark">
                    @yield('main')
                </div>

            </div>
        </div>
        <!-- Footer-->
        {{--<footer class="py-5 bg-dark">
            <div class="container"><p class="m-0 text-center text-white">Copyright &copy; Your Website 2023</p></div>
        </footer>
        <!-- Bootstrap core JS-->
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
        <!-- Core theme JS-->
        <script src="{{asset('blog/js/scripts.js')}}"></script>--}}
    </body>
</html>

