<!DOCTYPE html>
<!-- Made referencing https://scotch.io/tutorials/simple-laravel-layouts-using-blade-->
<html xmlns="http://www.w3.org/1999/xhtml">
<head>

@include('includes.head')

</head>
<body>

@include('include.banner')

@include('include.neck')


<div class="body">
<div class="container">

<!-- main body -->
@yield('content')
<!-- end main body -->

</div>
</div>

@include('include.footer')

</body>
</html>