<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{mix('/css/app.css')}}">
    <link rel="stylesheet" href="{{mix('/css/theme.css')}}">
    <title>NeoTech-IT</title>
    <!-- Tell the browser to be responsive to screen width -->
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
    <!-- Font Awesome -->
    
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700,300italic,400italic,600italic">
  </head>
<body class="hold-transition sidebar-mini layout-fixed layout-navbar-fixed layout-footer-fixed">
   
    <div class="wrapper">
        <nav class="main-header navbar navbar-expand navbar-blue navbar-light bg-primary">
            <!-- Left navbar links -->
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
                </li>
                <li class="nav-item"><img href="#"></li>
                <li class="nav-item"><a class="nav-link" href="{{route('candidats.index')}}"> Home </a></li>
                <li class="nav-item"><a class="nav-link" href="{{route('candidats.create')}}"> Nouveau Candidature </a></li>
                <li class="nav-item"><a class="nav-link" href="{{route('about')}}"> About </a></li>
            </ul>
        </nav>
    </div>

    

    @if(session()->has('status'))
        <h3 style="color:green">
            {{ session()->get('status')}}
        </h3>
    @endif

    <div class="container">
        @yield('content')
    </div>

<script src="{{ mix('/js/app.js')}}"></script>
</body>
</html>