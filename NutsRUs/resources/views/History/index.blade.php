@extends('layouts.public')
@section('content')
<div class="content">
    <div>
        <h2>Order History</h2>
        @foreach($orders as $order)
        <div class="optionBox"><span class="optionBox-title">{{ $order['updated_at'] }}</span><span class="optionBox-arrow"></span></div>
            <div class="hidContent">
                <p>Intended Address: {{ $house }} {{ $street }} {{ $city }} {{ $state }} {{ $zip }} </p>
                <p> Status: {{ $order['shipping_status'] }}</p>
            </div>
        @endforeach

    </div>
</div>
@stop