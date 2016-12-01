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
            <div class="center"><a href="/AboutLogin"> <img alt="Nuts R US Logo" class="bannerImage" src="/images/transparent_text_effect.png"/></a> <br/>
                <p><i>R NUTS R CLEAN</i></p>
            </div>
        </div>
    </div>
</div>
{{--@include('includes.banner')--}}
<div>
    <div class="navContainer nopadtopbot">
        <div class="nav"><img alt="Menu" class="mobileIcon" src="/images/mobile_menu_icon.png"/>
            <div class="box">
                <div class="boxHead">
                    <h3>Menu</h3>
                </div>
                @if (Auth::guest())

                    <ul class="optionBox-menu">
                        <li class="optionBox-menu-title" ><a href="{{ url('/SignUp/create') }}" style="color: white;" ><span class="menu-title">Register</span></a>
                        </li>
                    </ul>

                @else
                    <span style ="height: 15px; color: white; font-size: 16px; padding-left: 7px;">Hello, {{ Auth::user()->name }}
</span>
                    <ul class="optionBox-menu">
                        <li class="optionBox-menu-title" ><a href="{{ url('/EditInfo') }}" style="color: white;" ><span class="menu-title">Edit Info</span></a>
                        </li>
                    </ul>
                    <ul class="optionBox-menu">
                        <li class="optionBox-menu-title" ><a href="{{ url('/Order') }}" style="color: white;" ><span class="menu-title">Order</span></a>
                        </li>
                    </ul>
                    <ul class="optionBox-menu">
                        <li class="optionBox-menu-title" ><a href="{{ url('/History') }}" style="color: white;" ><span class="menu-title">History</span></a>
                        </li>
                    </ul>
                    <ul class="optionBox-menu">
                        <li class="optionBox-menu-title" ><a href="{{ url('/logout') }}" onclick="event.preventDefault();  document.getElementById('logout-form').submit();" style="color: white;" ><span class="menu-title">Logout</span></a>

                            <form id="logout-form" action="{{ url('/logout') }}" method="POST">
                                {{ csrf_field() }}
                            </form>
                        </li>
                    </ul>
                @endif
            </div>
        </div>
    </div>
</div>
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