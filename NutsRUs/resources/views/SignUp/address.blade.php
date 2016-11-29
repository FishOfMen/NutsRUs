@extends('Layouts.public')
@section('content')
    <div class="content">
        <h3>Next Step!</h3>
        <p>We just need some other information to complete registration.</p>
        <form method="POST" action="{{ url('/SignUp/shipping') }}">
            {{ csrf_field() }}
            <div class="row">
                <fieldset>
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
                    </div>
                    <div class="center"><button type="submit">Submit</button></div>
                </fieldset>

            </div>
        </form>
    </div>
@stop