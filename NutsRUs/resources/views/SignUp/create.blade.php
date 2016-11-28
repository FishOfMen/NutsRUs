@extends('Layouts.public')
@section('content')
<div class="content">
    <h3>Sign Up</h3>
    <form method="post" action="{{ url('/register') }}">
        {{ csrf_field() }}
        <div class="row">
            {{--<input name="recipient" type="hidden" value="put the EMAIL OF RECIPIENTS for the form here" />
            <input name="Subject" type="hidden" value="put the NAME for the form HERE (only the RECIPIENTS will see this NAME)" />
            <input name="redirect" type="hidden" value="nutsareusdev.com/ThankYou" />--}}

            <fieldset><legend>Registration Information</legend>

                <div class="row">
                    <div class="six columns"><label>Full Name
                            <input id="name" name="name" placeholder="John" type="text" /></label></div>
                </div>

                <div class="row">
                    <div class="six columns"><label>Email
                            <input id="email" name="email" type="email" /></label></div>
                </div>

                <div class="row">
                    <div class="six columns"><label>Password
                            <input id="password" name="password" type="password" /></label></div>

                    <div class="six columns"><label>Confirm Password
                            <input id="password-confirm" type="password" name="password_confirmation" /></label></div>
                </div>

                {{--<hr />
                <legend>Shipping Information</legend>

                <div class="row">
                    <div class="six columns"><label>House Number
                            <input id="house_number" name="house_number" placeholder="3200" type="number" /></label></div>

                    <div class="six columns"><label>Street
                            <input id="street" name="street" placeholder="College Ave" type="text" /></label></div>
                </div>

                <div class="row">
                        <div class="six columns"><label>City
                                <input id="city" name="city" placeholder="Beaver Falls" type="text" /></label></div>

                        <div class="six columns"><label>State
                                <input id="state" name="state" placeholder="Pa" type="text" /></label></div>
                </div>

                <div class="row">
                    <div class="six columns"><label>Zip Code
                            <input id="zip" name="zip" placeholder="15010" type="number" /></label></div>
                </div>--}}
                <div class="center"><button type="submit">Register</button></div>
            </fieldset>

        </div>
    </form>
</div>
@stop