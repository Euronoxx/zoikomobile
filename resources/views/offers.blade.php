@extends('layouts.app')

@section('content')

<div class="containerfluid">
    <div class="headbar">
        <div class="container py-2">
        Zoiko Mobile Limited Offers!
        </div>
    </div>
</div>

<div class="container my-5">
    <h2>Offer Page</h2>
    <div class="row">
        <div class="col">
            <div class="offerbox">
                <div class="paybox">
                    Pay for -------------<br /><span class="numb">21</span> months
                </div>
                <span class="andsign">&amp;</span>
                <div class="paybox">
                    Get -------------<br /> <span class="numb">3</span> months free
                </div>
                <p class="mt-4">Duration of Contract: 24 months</p>
                <p>Bill Free Months: 3</p>
                <p>Months Eligible: 1st, 4th &amp; 6th month</p>
            </div>
        </div>
        <div class="col"></div>
    </div>
</div>


@endsection