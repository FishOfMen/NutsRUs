@extends('Layouts.public')
@section('content')
    <div class="content">
        <h1>Order</h1>
        <form action="{{ url('/Order/post') }}" method="POST">
            {{ csrf_field() }}
            <div class="row">
                <div class="six columns">
                    <fieldset><legend>Oder Information</legend>
                        <div class="row"><label>Enter desired unit for each item:</label></div>
                        <div class="row"><label name="peanut">Peanuts<input type="int" class="form-control" id="peanutCheck" name="PeaC" value="0" required></label></div>

                        <div class="row"><label name="almond">Almonds<input type="int" id="almondCheck" name="AlmC" value="0" required></label></div>

                        <div class="row"><label name="cas">Cashews<input type="int" id="CasCheck" name="CasC" value="0" required></label></div>

                        <div class="row"><label name="mac">Macadamias<input type="int" id="macCheck" name="MacC" value="0" required></label></div>

                        <div class="row"><label name="walnut">Walnuts<input type="int" id="walnutCheck" name="WalC" value="0" required></label></div>

                        <div class="row"><label name="driedrasp">Dried Raspberries<input type="int" id="raspCheck" name="DriRasC" value="0" required></label></div>

                        <div class="row"><label name="mnm">M&M's<input type="int" id="mnmCheck" name="MnMC" value="0" required></label></div>

                    </fieldset>
                </div></div>

            <div class="row">
                <div class="six column"><input type="submit" value="Proceed to Checkout"></div>
            </div>
        </form>
    </div>
@stop