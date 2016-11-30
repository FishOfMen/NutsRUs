
<!DOCTYPE html>
<!-- Made referencing https://scotch.io/tutorials/simple-laravel-layouts-using-blade-->
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <meta charset="utf-8"/>
    <!--Prevent Internet Explorer from eating glue -->
    <meta content="IE=edge" http-equiv="X-UA-Compatible"/>

    <!-- MOBILE SPECIFIC METAS ================================= -->
    <meta content="width=device-width initial-scale=1.0 maximum-scale=1.0 user-scalable=yes" name="viewport"/>

    <!--styling libraries-->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.7.2/jquery.min.js" type="text/javascript"></script>
    <link href="https://www.geneva.edu/_files/css/skeleton.css" rel="stylesheet"/>
    <link href="https://www.geneva.edu/_files/css/responsive-form-fieldset.css" rel="stylesheet" type="text/css"/>
    <!--fonts-->
    <link href="https://fonts.googleapis.com/css?family=Oswald:300,400|Gentium+Basic" rel="stylesheet" type="text/css"/>
    <!--iframe stuff -->
    <link href="http://www.geneva.edu/_files/css/colorbox.css" rel="stylesheet"/>
    <script src="http://www.geneva.edu/_files/js/jquery.colorbox-min.js" type="text/javascript">
    </script>
    <!--custom styling-->
    <link href="{{ url('/css/style.css') }}" rel="stylesheet" type="text/css"/>
    <script src="js/script-includes.js" type="text/javascript">
    </script>
    <title>Nuts R US</title>
{{--@include('includes.header')--}}

</head>
<body>

<div>
    <div class="bannerContainer">
        <div class="banner">
            <div class="center"><a href="/index.php"> <img alt="Nuts R US Logo" class="bannerImage" src="/images/transparent_text_effect.png"/></a> <br/>
                <p><i>R NUTS R CLEAN</i></p>
            </div>
        </div>
    </div>
</div>
{{--@include('includes.banner')--}}
<nav>
    <div class="dropdown-menu-right">
        @if (Auth::guest())
            <a class="button" href="{{ url('/SignUp/create') }}">Register</a>
        @else
            <div>
                <a href="#" class="button" role="button" >
                    {{ Auth::user()->name }} <span class="caret"></span>
                </a>

                <a href="{{ url('/EditInfo') }}" class="button" role="button" >Edit Info</a>

                <a href="{{ url('/Order') }}" class="button" role="button" >Order</a>

                <a class="button" href="{{ url('/logout') }}"
                   onclick="event.preventDefault();
                                         document.getElementById('logout-form').submit();">
                    Logout
                </a>

                <form id="logout-form" action="{{ url('/logout') }}" method="POST">
                    {{ csrf_field() }}
                </form>
            </div>
        @endif
    </div>
</nav>
<div class="body">
<div class="container">

<!-- main body -->
@yield('content')
<!-- end main body -->

</div>
</div>

@include('includes.footer')

</body>
</html>