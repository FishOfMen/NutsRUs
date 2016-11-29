@extends('layouts.public')
@section('content')

<div class="content">
    <h3>Edit Information</h3>
    <form method="POST" action="{{ url('/EditInfo/update') }}">
        {{ csrf_field() }}
        <div class="row">
            <fieldset><legend>Update Information</legend>

                <div class="row">
                    <div class="six columns"><label>Name
                            <input id="name" name="name" value="{{ $name }}" type="text" /></label></div>
                </div>

                <div class="row">
                    <div class="six columns"><label>Email
                            <input id="email" name="email" type="email" value="{{ $email }}" /></label></div>

                </div>

                <hr />
                <legend>Shipping Information</legend>

                <div class="row">
                    <div class="six columns"><label>House Number
                            <input id="house_number" name="house_number" value="{{ $house }}" type="number" /></label></div>

                    <div class="six columns"><label>Street
                            <input id="street" name="street" value="{{ $street }}" type="text" /></label></div>
                </div>

                <div class="row">
                    <div class="six columns"><label>City
                            <input id="city" name="city" value="{{ $city }}" type="text" /></label></div>

                    <div class="six columns"><label>State
                            <input id="state" name="state" value="{{ $state }}" type="text" /></label></div>
                </div>

                <div class="row">
                    <div class="six columns"><label>Zip Code
                            <input id="zip" name="zip" value="{{ $zip }}" type="number" /></label></div>
                </div>
                <div class="center"><button type="submit">Update Information</button></div>
            </fieldset>

        </div>
    </form>
</div>
@stop
