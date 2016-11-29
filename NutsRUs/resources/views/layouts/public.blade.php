
<!DOCTYPE html>
<!-- Made referencing https://scotch.io/tutorials/simple-laravel-layouts-using-blade-->
<html xmlns="http://www.w3.org/1999/xhtml">
<head>

@include('includes.header')

</head>
<body>

@include('includes.banner')
<nav>
    <div class="dropdown-menu-right">
        @if (Auth::guest())
            <a class="button" href="{{ url('/SignUp/create') }}">Register</a>
        @else
            <div>
                <a href="#" class="button" role="button" >
                    {{ Auth::user()->name }} <span class="caret"></span>
                </a>

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