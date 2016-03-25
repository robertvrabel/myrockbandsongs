<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>My Rock Band Songs</title>

    <link href="/css/app.css" rel="stylesheet">

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
</head>
<body>

<div class="top-bar">
    <div class="top-bar-left">
        <ul class="menu">
            <li class="menu-text">myrockbandsongs.com</li>
            <li><a href="/">Home</a></li>
        </ul>
    </div>
    <div class="top-bar-right">
        <ul class="dropdown menu" data-dropdown-menu>
            @if (Auth::guest())
                <li><a href="/auth/login">Login</a></li>
                <li><a href="/auth/register">Register</a></li>
            @else
                <li>
                    <a href="#">{{ Auth::user()->name }} <span class="caret"></span></a>
                    <ul class="menu vertical">
                        <li><a href="/user/settings/">Settings</a></li>
                        <li><a href="/auth/logout">Logout</a></li>
                    </ul>
                </li>
            @endif
        </ul>
    </div>
</div>

<div class="row">
    <div class="large-12 columns">
        @include('flash::message')
    </div>
</div>

<div class="content">
    @yield('content')
</div>

<!-- Scripts -->
@if (getenv('APP_ENV') == 'local')
    <script src="/js/jquery.min.js"></script>
    <script src="/js/foundation.min.js"></script>
@else
    <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/2.2.2/jquery.min.js"></script>
    <script src="//cdnjs.cloudflare.com/ajax/libs/foundation/6.2.0/foundation.min.js"></script>
@endif

@yield('footer')
<script src="/js/app.js"></script>

</body>
</html>