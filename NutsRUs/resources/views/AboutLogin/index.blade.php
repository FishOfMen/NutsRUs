@extends('Layouts.public')
@section('content')
<div class="content">
<h1>Welcome!</h1>
    @if (Auth::guest())
        <form role="form" method="post" action="{{ url('/login') }}">
            {{ csrf_field() }}
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
                                <label>Remember me
                                    <input type="checkbox" name="remember" id="remember"></label>
                            </div>
                        </div>

                        <div class="center"><button type="submit">Login</button></div>
                    </fieldset>

                    <br /><br />
                </div></div>
        </form>
        <div class="center">
            <a href='SignUp/create' class='button'>Create Account</a>
        </div>

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
    @else
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
    @endif

</div>
@stop
