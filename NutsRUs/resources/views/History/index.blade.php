@extends('layouts.public')
@section('content')
<div class="content">
    <div>
        <h2>Current Orders</h2>
        <p><strong>This is just an example!! change code in order to create history dynamically!!</strong></p>

        <div class="optionBox"><span class="optionBox-title">November 1, 2016</span><span class="optionBox-arrow">
        <img alt="Expand" border="0" height="17" id="droparrow" name="droparrow" src="include/_assets/drop.gif" width="24" /></span></div>
            <div class="hidContent">

                <p>Information for this oeder would be populated here.</p>

            </div>

    </div>
    <hr />
    <div>
        <h2>Previous Orders</h2>

        <div class="optionBox"><span class="optionBox-title">October 1, 2016</span><span class="optionBox-arrow">
        <img alt="Expand" border="0" height="17" id="droparrow" name="droparrow" src="include/_assets/drop.gif" width="24" /></span></div>
        <div class="hidContent">

            <p>Information for this oeder would be populated here.</p>

        </div>
    </div>
</div>
@stop