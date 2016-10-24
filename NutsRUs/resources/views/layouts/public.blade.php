<!DOCTYPE html>
<!-- Made referencing https://scotch.io/tutorials/simple-laravel-layouts-using-blade-->
<html xmlns="http://www.w3.org/1999/xhtml">
<head>

@include('includes.header')

</head>
<body>

@include('includes.banner')

@include('includes.neck')


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