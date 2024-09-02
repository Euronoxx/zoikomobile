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
    <div class="row">
        <div class="col">
            <div class="offerbox mx-4">
                <div class="paybox">
                    Pay for -------------<br /><span class="numb">21</span> <span class="green24bold">Months</span>
                </div>
                <span class="andsign">&amp;</span>
                <div class="paybox">
                    Get -------------<br /> <span class="numb">3</span> <span class="green24bold">Months free</span>
                </div>
                <p class="mt-4 green18">Duration of Contract: <span class="txtred">24 months</span><br>
                Bill Free Months: <span class="txtred">3</span><br>
                Months Eligible: <span class="txtred">1st, 4th &amp; 6th month</span></p>
                <div class="promobar">Use Code : <span class="txtred">ZMOBILE24</spa></div>
            </div>
            <div class="text-center mt-2">
                <a href="{{ route('offer-plans') }}" class="btn btn-outline-danger btn-lg">Buy now</a>
            </div>
        </div>
        <div class="col">
            <div class="offerbox mx-4">
                <div class="paybox">
                    Pay for -------------<br /><span class="numb">16</span> <span class="green24bold">Months</span>
                </div>
                <span class="andsign">&amp;</span>
                <div class="paybox">
                    Get -------------<br /> <span class="numb">2</span> <span class="green24bold">Months free</span>
                </div>
                <p class="mt-4 green18">Duration of Contract: <span class="txtred">18 months</span><br>
                Bill Free Months: <span class="txtred">2</span><br>
                Months Eligible: <span class="txtred">1st &amp; 4th month</span></p>
                <div class="promobar">Use Code : <span class="txtred">ZMOBILE18</spa></div>
            </div>
            <div class="text-center mt-2">
                <a href="{{ route('offer-plans') }}" class="btn btn-outline-danger btn-lg">Buy now</a>
            </div>
        </div>
    </div>
    <div class="row mt-5">
        <div class="col">
            <div class="offerbox mx-4">
                <div class="paybox">
                    Pay for -------------<br /><span class="numb">11</span> <span class="green24bold">Months</span>
                </div>
                <span class="andsign">&amp;</span>
                <div class="paybox">
                    Get -------------<br /> <span class="numb">1</span> <span class="green24bold">Months free</span>
                </div>
                <p class="mt-4 green18">Duration of Contract: <span class="txtred">12 months</span><br>
                Bill Free Months: <span class="txtred">1</span><br>
                Months Eligible: <span class="txtred">2nd month</span></p>
                <div class="promobar">Use Code : <span class="txtred">ZMOBILE12</spa></div>
            </div>
            <div class="text-center mt-2">
                <a href="{{ route('offer-plans') }}" class="btn btn-outline-danger btn-lg">Buy now</a>
            </div>
        </div>
        <div class="col">
            <div class="offerbox mx-4">
                <div class="paybox">
                    Pay for -------------<br /><span class="numb">6</span> <span class="green24bold">Months</span>
                </div>
                <span class="andsign">&amp;</span>
                <div class="paybox">
                    Get -------------<br /> <span class="numb">50%</span> <span class="green24bold">Discount</span>
                </div>
                <p class="mt-4 green18">Duration of Contract: <span class="txtred">6 months</span><br>
                Bill Free Months: <span class="txtred">30% - 50% Discount</span><br>
                Months Eligible: <span class="txtred">1st(30%) &amp; 2nd(50%)</span></p>
                <div class="promobar">Use Code : <span class="txtred">ZMOBILE6</spa></div>
            </div>
            <div class="text-center mt-2">
                <a href="{{ route('offer-plans') }}" class="btn btn-outline-danger btn-lg">Buy now</a>
            </div>
        </div>
    </div>
    <div class="row mt-5">
        <div class="col">
            <div class="offerbox mx-4">
                <div class="paybox">
                    Pay for -------------<br /><span class="numb">30</span> <span class="green24bold">Days</span>
                </div>
                <span class="andsign">&amp;</span>
                <div class="paybox">
                    Get -------------<br /> <span class="numb">30%</span> <span class="green24bold">Discount</span>
                </div>
                <p class="mt-4 green18">Duration of Contract: <span class="txtred">30 Days</span><br>
                Bill Free Months: <span class="txtred">30% Discount</span><br>
                Months Eligible: <span class="txtred">1st month</span></p>
                <div class="promobar">Use Code : <span class="txtred">ZMOBILE30</spa></div>
            </div>
            <div class="text-center mt-2">
                <a href="{{ route('offer-plans') }}" class="btn btn-outline-danger btn-lg">Buy now</a>
            </div>
        </div>
        <div class="col">
            <div class="offerbox">
                <div class="green24bold text-center my-5">Zoiko Upcoming Offers</div>
                <h3 class="txtred text-center">Get ready to snag some cracking deals!</h3>
                <p class="text-center py-5">Stay tuned for exciting new offers heading your way soon.</p>
            </div>
        </div>
    </div>
</div>


@endsection