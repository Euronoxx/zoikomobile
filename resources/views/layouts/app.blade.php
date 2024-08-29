<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="shortcut icon" href="{{ URL::asset('/images/favicon.png') }}" />

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=Nunito" rel="stylesheet">
    <link href="{{ asset('/css/mainstyle.css') }}" rel="stylesheet">

    <!-- Scripts -->
    @vite(['resources/sass/app.scss', 'resources/js/app.js'])
</head>
<body>
    <div id="app">
        <nav class="navbar bg-company-red sticky-top navbar-expand-md navbar-light bg-white shadow-sm">
            <div class="container">
                <a class="navbar-brand" href="{{ url('/home') }}">
                    <img src="{{ URL::asset('/images/zoikomobile_logo.png') }}" width="140" />
                </a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <!-- Left Side Of Navbar -->
                    <ul class="navbar-nav ms-auto">
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle mainmenu" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">Zoiko Plans</a>
                            <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                                <li><a class="dropdown-item" href="{{ route('all-plans') }}">All Plans</a></li>
                                <li><a class="dropdown-item" href="#">Punbil Sector Lifetime Deals</a></li>
                                
                                <li><a class="dropdown-item" href="#">Low Income Deals</a></li>
                                <li><a class="dropdown-item" href="#">Student Deals</a></li>
                                <li><a class="dropdown-item" href="#">Data Only SIMs</a></li>
                                <li><hr class="dropdown-divider"></li>
                                <li><a class="dropdown-item" href="#">30-Day 'No Contract' Plans</a></li>
                                <li><a class="dropdown-item" href="#">30-Day Plans With Phones</a></li>
                                <li><a class="dropdown-item" href="#">Contract Plans With Phones</a></li>
                                <li><a class="dropdown-item" href="#">International Calling Plans</a></li>
                                <li><a class="dropdown-item" href="#">International Bolt-On Plans</a></li>
                            </ul>
                        </li>
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle mainmenu" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">Business Deals</a>
                            <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                                <li><a class="dropdown-item" href="#">SIM Only Plans</a></li>
                                <li><a class="dropdown-item" href="#">Data Only SIMs</a></li>
                                <li><a class="dropdown-item" href="#">Super-Fast Broadband</a></li>
                                <li><a class="dropdown-item" href="#">Digital Lines</a></li>
                                <li><a class="dropdown-item" href="#">Day Pass Roaming Plans</a></li>
                            </ul>
                        </li>
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle mainmenu" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">Devices</a>
                            <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                                <li><a class="dropdown-item" href="#">Refurbished Smartphones</a></li>
                                <li><a class="dropdown-item" href="#">Tablets</a></li>
                                <li><a class="dropdown-item" href="#">Accessories</a></li>
                            </ul>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link mainmenu" href="#">About Us</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link mainmenu" href="#">Contact Us</a>
                        </li>
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle mainmenu" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                Support
                            </a>
                            <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                                <li><a class="dropdown-item" href="#">Action</a></li>
                                <li><a class="dropdown-item" href="#">Another action</a></li>
                                <li><hr class="dropdown-divider"></li>
                                <li><a class="dropdown-item" href="#">Something else here</a></li>
                            </ul>
                        </li>
                    </ul>

                    <!-- Right Side Of Navbar -->
                    <ul class="navbar-nav ms-auto">
                        <!-- Authentication Links -->
                        @guest
                            @if (Route::has('login'))
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                                </li>
                            @endif

                            @if (Route::has('register'))
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
                                </li>
                            @endif
                        @else
                            <li class="nav-item dropdown">
                                <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                    {{ Auth::user()->name }}
                                </a>

                                <div class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
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
                        @endguest
                    </ul>
                </div>
            </div>
        </nav>

        <main>
            @yield('content')
        </main>
    </div>

    <!-- Footer section starts -->
     <div class="containerfliud topfooter">
        <div class="container">
            <div class="row">
                <div class="col-md-4">
                    <a class="navbar-brand" href="{{ url('/') }}">
                        <img src="{{ URL::asset('/images/zoikomobile_logo.png') }}" width="260" />
                    </a>
                </div>
                <div class="col">
                    <h4>Zoiko Mobile</h4>
                    <ul>
                        <li>Zoiko Mobile Plans</li>
                        <li>Business SIM Deals</li>
                        <li>Data Only SIMs</li>
                        <li>30-Day Plans</li>
                        <li>Coverage Checker</li>
                    </ul>
                </div>
                <div class="col">
                    <h4>Zoiko Rates</h4>
                    <ul>
                        <li>Roaming and Overage</li>
                        <li>Zero Cost SMS</li>
                        <li>Discounted Rates</li>
                        <li>Refer A Friend</li>
                        <li class="dropdown"><a href="#">Zioko Programs <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-chevron-down" viewBox="0 0 16 16">
  <path fill-rule="evenodd" d="M1.646 4.646a.5.5 0 0 1 .708 0L8 10.293l5.646-5.647a.5.5 0 0 1 .708.708l-6 6a.5.5 0 0 1-.708 0l-6-6a.5.5 0 0 1 0-.708"/>
</svg></a>
                            <ul class="dropdownmenu">
                                <li><a href="#">Student Discount Prgm</a></li>
                                <li><a href="#">Student Discount Form</a></li>
                                <li><a href="#">Join Our Network</a></li>
                                <li><a href="#">Student Ambassador Prgm</a></li>
                            </ul>
                        </li>
                    </ul>
                </div>
                <div class="col">
                    <h4>About Zoiko</h4>
                    <ul>
                        <li><a href="#">Blogs</a></li>
                        <li><a href="#">News</a></li>
                        <li><a href="#">FAQs</a></li>
                        <li><a href="#">Contact Us</a></li>
                        <li class="dropdown"><a href="">Useful Resources <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-chevron-down" viewBox="0 0 16 16">
  <path fill-rule="evenodd" d="M1.646 4.646a.5.5 0 0 1 .708 0L8 10.293l5.646-5.647a.5.5 0 0 1 .708.708l-6 6a.5.5 0 0 1-.708 0l-6-6a.5.5 0 0 1 0-.708"/>
</svg></a>
                            <ul class="dropdownmenu">
                                <li><a href="#">UK Retirement Resources</a></li>
                                <li><a href="#">UK Business Resources</a></li>
                                <li><a href="#">Customer Complaint</a></li>
                                <li><a href="#">UK Government Websites</a></li>
                                <li><a href="#">UK Family Resources</a></li>
                                <li><a href="#">Online Safty</a></li>
                            </ul>
                        </li>
                    </ul>
                </div>
                <div class="col">
                    <h4>Zoiko Legal</h4>
                    <ul>
                        <li><a href="#">Term and Conditions</a></li>
                        <li><a href="#">Vulnerability Policy</a></li>
                        <li><a href="#">Modern Slavery Policy</a></li>
                        <li><a href="#">ESG Policy</a></li>
                        <li class="dropdown"><a href="#">Zoiko Policies <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-chevron-down" viewBox="0 0 16 16">
  <path fill-rule="evenodd" d="M1.646 4.646a.5.5 0 0 1 .708 0L8 10.293l5.646-5.647a.5.5 0 0 1 .708.708l-6 6a.5.5 0 0 1-.708 0l-6-6a.5.5 0 0 1 0-.708"/>
</svg></a>
                            <ul class="dropdownmenu">
                                <li><a href="#">Privacy Policy</a></li>
                                <li><a href="#">Cookie Polycy</a></li>
                                <li><a href="#">Late Fee Policy</a></li>
                                <li><a href="#">Refund Policy</a></li>
                                <li><a href="#">Terms of Sale Policy</a></li>
                                <li><a href="#">Terms of Use for Mobile Apps</a></li>
                            </ul>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
     </div>
    <footer>
        <div class="container">
            <div class="row">
                <div class="col">
                    <ul>
                        <li><a href="https://www.google.com/maps/place/Your+City+Office/@51.5097579,-0.1447229,15z/data=!4m2!3m1!1s0x0:0x4ddfeee0d3aacc04?sa=X&ved=1t:2428&ictx=111" target="_blank"><b>Head Office</b><br />35 Berkeley Squre, Mayfair,<br />London W1J 5BF</a></li>
                        <li><a href="#"><b>Head Office +44 (0) 2071 646 399</b></a></li>
                        <li><a href="mailto:info@zoikomobile.co.uk"><b>info@zoikomobile.co.uk</b></a></li>
                    </ul>
                </div>
                <div class="col">
                    <ul>
                        <li><a href="https://www.google.com/maps/place/Suite+2%2F3+2nd+Floor,+48+W+George+St,+Glasgow+G2+1BP,+UK/data=!4m2!3m1!1s0x4888469fe6c85455:0x9346510e0eb5d9d?sa=X&ved=1t:242&ictx=111" target="_blank"><b>Gsalgow</b><br />Suite 2/3, 2nd Floor, 48 West George Street,<br />Glasgow G2 1BP</a></li>
                        <li><a href="#"><b>Glasgow +44 141 530 1560</b></a></li>
                        <li><a href="mailto:glasgow@zoikomobile.co.uk"><b>glasgow@zoikomobile.co.uk</b></a></li>
                    </ul>
                </div>
                <div class="col">
                    <ul>
                        <li><a href="https://www.google.com/maps/place/Living+Data+Ltd/@51.4655052,-3.1663962,15z/data=!4m2!3m1!1s0x0:0x6bcfaac8d50c4090?sa=X&ved=1t:2428&ictx=111" target="_blank"><b>Cardiff</b><br />Portland House, 113-116 Blue Street,<br />Cardiff CF10 5EQ</a></li>
                        <li><a href="#"><b>Cardiff +44 292 000 1374</b></a></li>
                        <li><a href="mailto:cardiff@zoikomobile.co.uk"><b>cardiff@zoikomobile.co.uk</b></a></li>
                    </ul>
                </div>
            </div>
            <p class="text-center">&copy; 2024 Zoiko Mobile is a trading name of Zoiko Telecom Ltd. Registered in England and Wales (No. 15021457). Information Commissioner's Office Registration Number ZB585887. VAT Registration Number 465 1110 23. All rights reserved.</p>
        </div>
    </footer>
</body>
</html>
