@extends('Layouts.private')
@section('content')
<div class="content">
<h1>Welcome!</h1>
<form>
    <div class="row">
    <div class="six columns">
    <fieldset>
        <legend>Login</legend>

        <div class="row">
            <div class="six column">
                <label>E-mail
                    <input type="email" name="email" id="email"></label>
            </div>
        </div>

        <div class="row">
            <div class="six column">
                <label>Password
                    <input type="password" name="password" id="password"></label>
            </div>
        </div>

        <div class="row">
            <div class="six column">
                <label>Remember me</label>
                    <input type="checkbox" name="remember" id="remember">
            </div>
        </div>

        <div class="center"><input type="submit" value="Login"></div>
    </fieldset>

        <br /><br />

    <div class="center">
        <a href='SignUp' class='button'>Create Account</a>
    </div>

    </div></div>
</form>

    <hr />

<h2>About</h2>
<p>Everyone Loves Nuts - <br />
    and our goal is provide nuts and other mixed snacks to those avid snackers.
    Sometimes we are hungry and want a quick, nourishing snack to satisfy us
    until the next meal.  Or, sometimes, we want to reward ourselves with a
    little treat to lighten our mood.  NutsRUs wants to take all these little
    "Sometimes" and fulfill the snackers inside of us all with a healthy and well-
    balanced treat.
</p>
<p>
    NutsRUs brings to the Northeast coast a mixture of snacks that are
    nutritionist-approved.  Each snack includes wholesome ingredients that
    have no artifical sweenteners, flavors, or colors.  We make snacking satisfyingly
    fun and naturally easy.
</p>
<p>
    In this fast-paced world, snacks can serve many needs.  We Serve Yours.
</p>
    </div>
@stop
