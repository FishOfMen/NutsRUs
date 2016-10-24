@extends('Layouts.private')
@section('content')
    <div class="content">
        <h1>Order</h1>
        <form>
            <div class="row">
            <div class="six columns">
            <fieldset><legend>Oder Information</legend>
                <div class="row">
                    <div class="six columns"><label name="item">Item</label></div>
                    <div class="six columns"><label name="Units">Units</label></div>
                </div>

                <div class="row">
                    <div class="six columns"><label name="peanut">Peanuts</label></div>
                    <div class="six columns"><input type="number" id="peanutCheck" name="peanutCheck"></div>
                </div>

                <div class="row">
                    <div class="six columns"><label name="almond">Almonds</label></div>
                    <div class="six columns"><input type="number" id="almondCheck" name="almondCheck"></div>
                </div>

                <div class="row">
                    <div class="six columns"><label name="mac">Macademians</label></div>
                    <div class="six columns"><input type="number" id="macCheck" name="macCheck"></div>
                </div>

                <div class="row">
                    <div class="six columns"><label name="walnut">Walnuts</label></div>
                    <div class="six columns"><input type="number" id="walnutCheck" name="walnutCheck"></div>
                </div>

                <div class="row">
                    <div class="six columns"><label name="driedrasp">Dried Raspberries</label></div>
                    <div class="six columns"><input type="number" id="raspCheck" name="raspCheck"></div>
                </div>

                <div class="row">
                    <div class="six columns"><label name="mnm">M&M's</label></div>
                    <div class="six columns"><input type="number" id="mnmCheck" name="mnmCheck"></div>
                </div>

                <hr />

                <div class="row">
                    <div class="six columns"><label name="total">Total</label></div>
                    <div class="six columns"><input type="text" name="totalcalcu" readonly></div>
                </div>
            </fieldset>
            </div></div>

            <div class="row">
                <div class="six column"><input type="submit" value="Proceed to Checkout"></div>
            </div>
        </form>
    </div>
@stop