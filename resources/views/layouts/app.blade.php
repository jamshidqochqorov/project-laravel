<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Laravel</title>
    <!-- Bootstrap Css -->
    <link href="{{ asset('assets/css/bootstrap.min.css')}}" id="bootstrap-style" rel="stylesheet" type="text/css" />
    <!-- Icons Css -->
    <link href="{{ asset('assets/css/icons.min.css')}}" rel="stylesheet" type="text/css" />
    <!-- App Css-->
    <link href="{{ asset('assets/css/app.min.css')}}" id="app-style" rel="stylesheet" type="text/css" />
</head>
<body>
<div class="container-fluid">
    <div class="row justify-content-center">
        <div class="col-xl-9 col-lg-8">
            <div class="card">
                <!-- Nav tabs -->
                <ul class="nav nav-tabs nav-tabs-custom justify-content-center pt-2" role="tablist">
                    <li class="nav-item">
                        <a class="nav-link {{Route::is('home')?"active":""}}" href="{{route('home')}}" >
                            Home
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link {{Route::is('articleIndex')?"active":""}}" href="{{route('articleIndex')}}" >
                            Articles
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link {{Route::is('articleIndexs')?"active":""}}" href="{{route('articleIndex')}}" >
                            Login
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link {{Route::is('articleIndexs')?"active":""}}" href="{{route('articleIndex')}}" >
                            Register
                        </a>
                    </li>
                </ul>


            </div>
        </div>

@yield('content')

</div>

</body>

<!-- JAVASCRIPT -->
<script src="{{ asset('assets/libs/jquery/jquery.min.js')}}"></script>
<script src="{{ asset('assets/libs/bootstrap/js/bootstrap.bundle.min.js')}}"></script>
<script src="{{ asset('assets/libs/metismenu/metisMenu.min.js')}}"></script>
<script src="{{ asset('assets/libs/simplebar/simplebar.min.js')}}"></script>
<script src="{{ asset('assets/libs/node-waves/waves.min.js')}}"></script>

<script src="{{ asset('assets/js/app.js')}}"></script>
</html>
