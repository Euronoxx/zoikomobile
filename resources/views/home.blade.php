@extends('layouts.app')


@section('content')
<div class="containerfluid">
    <div class="headbar">
        <div class="container py-2">
            Enjoy Amazing SIM Only Deals From the Animal & Music Loving Network!
        </div>
    </div>

    <!-- Carousel Section -->
    <div id="carouselExampleControls" class="carousel slide" data-bs-ride="carousel">
        <div class="carousel-inner">
            <div class="carousel-item active">
                <img src="{{ URL::asset('/images/banner-img-1.webp') }}" class="d-block w-100" alt="Slide One">
            </div>
            <div class="carousel-item">
                <img src="{{ URL::asset('/images/banner-img-2.webp') }}" class="d-block w-100" alt="Slide Two">
            </div>
            <div class="carousel-item">
                <img src="{{ URL::asset('/images/banner-img-3.webp') }}" class="d-block w-100" alt="Slide Three">
            </div>
            <div class="carousel-item">
                <img src="{{ URL::asset('/images/slide-4.png') }}" class="d-block w-100" alt="Slide four">
            </div>
            <div class="carousel-item">
                <img src="{{ URL::asset('/images/slide-5.webp') }}" class="d-block w-100" alt="Slide five">
            </div>
            <div class="carousel-item">
                <img src="{{ URL::asset('/images/slide-6.webp') }}" class="d-block w-100" alt="Slide six">
            </div>
            <div class="carousel-item">
                <img src="{{ URL::asset('/images/slide-7.webp') }}" class="d-block w-100" alt="Slide seven">
            </div>
        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Next</span>
        </button>
    </div>
    <!-- Carousel Section ends -->

    <!-- Plan Section -->
    <div class="container mt-4 py-4 bannerheader">
        <h2 class="firstheader">Join Zoiko Mobile Today And Start Something New!</h2>
        <p>Get super-fast Broadband | Reliable Network Coverage at Low Prices | Free International Calls | Free High Speed 5G Data</p>
        <div class="row text-center mt-4 plansec">
            <div class="col">
                <a href="{{ route('all-plans') }}">
                    <img src="{{ URL::asset('/images/homeicon-1.png') }}" class="my-2" width="100" alt="View Plans">
                    <p>View Plans</p>
                </a>
            </div>
            <div class="col">
                <a href="#">
                    <img src="{{ URL::asset('/images/homeicon-2.png') }}" class="my-2" width="100" alt="Activate Your SIM">
                    <p>Activate Your SIM</p>
                </a>
            </div>
            <div class="col">
                <a href="#">
                    <img src="{{ URL::asset('/images/homeicon-3.png') }}" class="my-2" width="100" alt="Switch &amp; Save">
                    <p>Switch &amp; Save</p>
                </a>
            </div>
            <div class="col">
                <a href="#">
                    <img src="{{ URL::asset('/images/homeicon-4.png') }}" class="my-2" width="100" alt="Special Deals">
                    <p>Special Deals</p>
                </a>
            </div>
            <div class="col">
                <a href="#">
                    <img src="{{ URL::asset('/images/homeicon-5.png') }}" class="my-2" width="100" alt="Redeem Cashback">
                    <p>Redeem Cashback</p>
                </a>
            </div>
        </div>
    </div>
    <!-- Plan Section ends -->

    <!-- Choose Zoikomobile section -->
    <div class="containerfluid choosezoiko">
        <div class="container py-4">
            <h2 class="py-4">Why Choose Zoiko Mobile?</h2>
            <div class="row">
                <div class="col zoikoflex">
                    <div><img src="{{ URL::asset('/images/sim_card.png') }}" width="100" alt=""></div>
                    <div><p>Free 5G<br />SIM Card</p></div>
                </div>
                <div class="col zoikoflex">
                    <div><img src="{{ URL::asset('/images/icon-delivery.png') }}" width="100" alt=""></div>
                    <div><p>Free UK<br />Delivery</p></div>
                </div>
                <div class="col zoikoflex">
                    <div><img src="{{ URL::asset('/images/5g-speed.png') }}" width="100" alt=""></div>
                    <div><p>Free 5G<br />Data Speed</p></div>
                </div>
            </div>
            <br />
            <div class="row mt-4">
                <div class="col zoikoflex">
                    <div><img src="{{ URL::asset('/images/service-call.png') }}" width="100" alt=""></div>
                    <div><p>Free Customer<br />Service Call</p></div>
                </div>
                <div class="col zoikoflex">
                    <div><img src="{{ URL::asset('/images/customer-support.png') }}" width="100" alt=""></div>
                    <div><p>Free 24X7<br />Customer Support</p></div>
                </div>
                <div class="col zoikoflex">
                    <div><img src="{{ URL::asset('/images/homeicon-3.png') }}" width="100" alt=""></div>
                    <div><p>Free Switching<br />To Zoiko Mobile</p></div>
                </div>
            </div>
        </div>
    </div>
    <!-- Choose Zoikomobile section ends -->
</div>
<div class="container py-4">
    <h2 class="text-center py-4">Choose Your SIM Only Plan <span style="color:#DF1E5A;">&amp;</span> Duration Below</h2>
    <ul class="nav nav-tabs nav-justified" role="tablist">
        <li class="nav-item" role="presentation">
            <a class="nav-link active" id="justified-tab-0" data-bs-toggle="tab" href="#home" role="tab" aria-controls="justified-tabpanel-0" aria-selected="true"> 24 Month Plan </a>
        </li>
        <li class="nav-item" role="presentation">
            <a class="nav-link" id="justified-tab-1" data-bs-toggle="tab" href="#menu1" role="tab" aria-controls="justified-tabpanel-1" aria-selected="false"> 12 Month Plan </a>
        </li>
        <li class="nav-item" role="presentation">
            <a class="nav-link" id="justified-tab-2" data-bs-toggle="tab" href="#menu2" role="tab" aria-controls="justified-tabpanel-2" aria-selected="false"> 30 Day Plan </a>
        </li>
    </ul>
</div>
<div class="containerfluid px-4">
    <div class="tab-content simplandeal">
        <div id="home" class="tab-pane active" aria-current="page">
            <!-- Carousel Section -->
            <div id="carouselExampleControls" class="carousel slide mt-4" data-bs-ride="carousel">
                <div class="carousel-inner">
                    <div class="carousel-item active">
                        <div class="row">
                            <div class="col">
                                <div class="card">
                                    <div class="card-header">
                                        Value Pack 
                                    </div>
                                    <div class="card-body">
                                        <h5 class="card-title">Roam &amp; Study MAX</h5>
                                        <hr>
                                        <div class="row">
                                            <div class="col">
                                                <div class="data">30GB</div><p style="margin-top:-26px;font-weight:bold;font-size:20px">Data</p>
                                            </div>
                                            <div class="col">
                                                <p style="text-align:right;" class="mt-4"><span style="text-decoration:line-through">£11.99</span><br /><span class="curprice">£9.99</span><br />per month</p>
                                            </div>
                                        </div>
                                        <hr>
                                        <ul>
                                            <li>Unlimited Calls &amp; Texts</li>
                                            <li>Free International Calls</li>
                                            <li>Wi-Fi Calling &amp; eSIM</li>
                                            <li>EU Roaming: 15GB/1000 min/1000 Texts</li>
                                        </ul>
                                        <hr>
                                        <div class="text-center"><a href="#" class="btn btn-outline-danger mb-3 px-4">View plan</a><br /><a href="#" class="btn btn-danger">Buy this plan</a></div>
                                    </div>
                                </div>
                            </div>
                            <div class="col">
                                <div class="card">
                                    <div class="card-header">
                                        Best Seller
                                    </div>
                                    <div class="card-body">
                                        <h5 class="card-title">Business Booster Premium</h5>
                                        <hr>
                                        <div class="row">
                                            <div class="col">
                                                <div class="data">100GB</div><p style="margin-top:-26px;font-weight:bold;font-size:20px">Data</p>
                                            </div>
                                            <div class="col">
                                                <p style="text-align:right;" class="mt-4"><span style="text-decoration:line-through">£31.00</span><br /><span class="curprice">£22.99</span><br />per month</p>
                                            </div>
                                        </div>
                                        <hr>
                                        <ul>
                                            <li>Unlimited Calls &amp; Texts</li>
                                            <li>Free International Calls</li>
                                            <li>Wi-Fi Calling &amp; eSIM</li>
                                            <li>Roaming 30GB/2000 min/2000 Texts</li>
                                        </ul>
                                        <hr>
                                        <div class="text-center"><a href="#" class="btn btn-outline-danger mb-3 px-4">View plan</a><br /><a href="#" class="btn btn-danger">Buy this plan</a></div>
                                    </div>
                                </div>
                            </div>
                            <div class="col">
                                <div class="card">
                                    <div class="card-header">
                                        Exclusive Offer
                                    </div>
                                    <div class="card-body">
                                        <h5 class="card-title">Unlimited Data Bundle</h5>
                                        <hr>
                                        <div class="row">
                                            <div class="col">
                                                <div class="data">Unlimited</div><p style="margin-top:-26px;font-weight:bold;font-size:20px">Data</p>
                                            </div>
                                            <div class="col">
                                                <p style="text-align:right;" class="mt-4"><span style="text-decoration:line-through">£27.50</span><br /><span class="curprice">£19.99</span><br />per month</p>
                                            </div>
                                        </div>
                                        <hr>
                                        <ul>
                                            <li>Unlimited Calls &amp; Texts</li>
                                            <li>Free International Calls</li>
                                            <li>Wi-Fi Calling &amp; eSIM</li>
                                            <li>EU Roaming: 40GB/Unlimited Calls &amp; Texts</li>
                                        </ul>
                                        <hr>
                                        <div class="text-center"><a href="#" class="btn btn-outline-danger mb-3 px-4">View plan</a><br /><a href="#" class="btn btn-danger">Buy this plan</a></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="carousel-item">
                        <div class="row">
                            <div class="col">
                                <div class="card">
                                    <div class="card-header">
                                        Value Pack
                                    </div>
                                    <div class="card-body">
                                        <h5 class="card-title">Silver Surfer</h5>
                                        <hr>
                                        <div class="row">
                                            <div class="col">
                                                <div class="data">10GB</div><p style="margin-top:-26px;font-weight:bold;font-size:20px">Data</p>
                                            </div>
                                            <div class="col">
                                                <p style="text-align:right;" class="mt-4"><span style="text-decoration:line-through">£8.35</span><br /><span class="curprice">£6.49</span><br />per month</p>
                                            </div>
                                        </div>
                                        <hr>
                                        <ul>
                                            <li>Unlimited Calls &amp; Texts</li>
                                            <li>Free International Calls</li>
                                            <li>Wi-Fi Calling &amp; eSIM</li>
                                            <li>EU Roaming: 15GB/1000 min/1000 Texts</li>
                                        </ul>
                                        <hr>
                                        <div class="text-center"><a href="#" class="btn btn-outline-danger mb-3 px-4">View plan</a><br /><a href="#" class="btn btn-danger">Buy this plan</a></div>
                                    </div>
                                </div>
                            </div>
                            <div class="col">
                                <div class="card">
                                    <div class="card-header">
                                        Best Seller
                                    </div>
                                    <div class="card-body">
                                        <h5 class="card-title">Zoiko Elite</h5>
                                        <hr>
                                        <div class="row">
                                            <div class="col">
                                                <div class="data">100GB</div><p style="margin-top:-26px;font-weight:bold;font-size:20px">Data</p>
                                            </div>
                                            <div class="col">
                                                <p style="text-align:right;" class="mt-4"><span style="text-decoration:line-through">£25.50</span><br /><span class="curprice">£15.99</span><br />per month</p>
                                            </div>
                                        </div>
                                        <hr>
                                        <ul>
                                            <li>Unlimited Calls &amp; Texts</li>
                                            <li>Free International Calls</li>
                                            <li>Wi-Fi Calling &amp; eSIM</li>
                                            <li>EU Roaming: 15GB/1000 min/1000 Texts</li>
                                        </ul>
                                        <hr>
                                        <div class="text-center"><a href="#" class="btn btn-outline-danger mb-3 px-4">View plan</a><br /><a href="#" class="btn btn-danger">Buy this plan</a></div>
                                    </div>
                                </div>
                            </div>
                            <div class="col">
                                <div class="card">
                                    <div class="card-header">
                                        Exclusive Offer
                                    </div>
                                    <div class="card-body">
                                        <h5 class="card-title">Public Sector Workers' Deal</h5>
                                        <hr>
                                        <div class="row">
                                            <div class="col">
                                                <div class="data">30GB</div><p style="margin-top:-26px;font-weight:bold;font-size:20px">Data</p>
                                            </div>
                                            <div class="col">
                                                <p style="text-align:right;" class="mt-4"><span style="text-decoration:line-through">£11.99</span><br /><span class="curprice">£9.99</span><br />per month</p>
                                            </div>
                                        </div>
                                        
                                        <hr>
                                        <ul>
                                            <li>Unlimited Calls &amp; Texts</li>
                                            <li>Free International Calls</li>
                                            <li>Wi-Fi Calling &amp; eSIM</li>
                                            <li>EU Roaming: 15GB/1000 min/1000 Texts</li>
                                        </ul>
                                        <hr>
                                        <div class="text-center"><a href="#" class="btn btn-outline-danger mb-3 px-4">View plan</a><br /><a href="#" class="btn btn-danger">Buy this plan</a></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Carousel Section ends -->
        </div>
        <div id="menu1" class="tab-pane fade">
            <!-- Carousel Section -->
            <div id="carouselExampleControls" class="carousel slide mt-4" data-bs-ride="carousel">
                <div class="carousel-inner">
                    <div class="carousel-item active">
                        <div class="row">
                            <div class="col">
                                <div class="card">
                                    <div class="card-header">
                                        Value Pack
                                    </div>
                                    <div class="card-body">
                                        <h5 class="card-title">Roam &amp; Study MAX</h5>
                                        <hr>
                                        <div class="row">
                                            <div class="col">
                                                <div class="data">30GB</div><p style="margin-top:-26px;font-weight:bold;font-size:20px">Data</p>
                                            </div>
                                            <div class="col">
                                                <p style="text-align:right;" class="mt-4"><span style="text-decoration:line-through">£11.99</span><br /><span class="curprice">£9.99</span><br />per month</p>
                                            </div>
                                        </div>
                                        <hr>
                                        <ul>
                                            <li>Unlimited Calls &amp; Texts</li>
                                            <li>Free International Calls</li>
                                            <li>Wi-Fi Calling &amp; eSIM</li>
                                            <li>EU Roaming: 15GB/1000 min/1000 Texts</li>
                                        </ul>
                                        <hr>
                                        <div class="text-center"><a href="#" class="btn btn-outline-danger mb-3 px-4">View plan</a><br /><a href="#" class="btn btn-danger">Buy this plan</a></div>
                                    </div>
                                </div>
                            </div>
                            <div class="col">
                                <div class="card">
                                    <div class="card-header">
                                        Best Seller
                                    </div>
                                    <div class="card-body">
                                        <h5 class="card-title">Business Booster Premium</h5>
                                        <hr>
                                        <div class="row">
                                            <div class="col">
                                                <div class="data">100GB</div><p style="margin-top:-26px;font-weight:bold;font-size:20px">Data</p>
                                            </div>
                                            <div class="col">
                                                <p style="text-align:right;" class="mt-4"><span style="text-decoration:line-through">£31.00</span><br /><span class="curprice">£22.99</span><br />per month</p>
                                            </div>
                                        </div>
                                        <hr>
                                        <ul>
                                            <li>Unlimited Calls &amp; Texts</li>
                                            <li>Free International Calls</li>
                                            <li>Wi-Fi Calling &amp; eSIM</li>
                                            <li>Roaming 30GB/2000 min/2000 Texts</li>
                                        </ul>
                                        <hr>
                                        <div class="text-center"><a href="#" class="btn btn-outline-danger mb-3 px-4">View plan</a><br /><a href="#" class="btn btn-danger">Buy this plan</a></div>
                                    </div>
                                </div>
                            </div>
                            <div class="col">
                                <div class="card">
                                    <div class="card-header">
                                        Exclusive Offer
                                    </div>
                                    <div class="card-body">
                                        <h5 class="card-title">Unlimited Data Bundle</h5>
                                        <hr>
                                        <div class="row">
                                            <div class="col">
                                                <div class="data">Unlimited</div><p style="margin-top:-26px;font-weight:bold;font-size:20px">Data</p>
                                            </div>
                                            <div class="col">
                                                <p style="text-align:right;" class="mt-4"><span style="text-decoration:line-through">£27.50</span><br /><span class="curprice">£19.99</span><br />per month</p>
                                            </div>
                                        </div>
                                        <hr>
                                        <ul>
                                            <li>Unlimited Calls &amp; Texts</li>
                                            <li>Free International Calls</li>
                                            <li>Wi-Fi Calling &amp; eSIM</li>
                                            <li>EU Roaming: 40GB/Unlimited Calls &amp; Texts</li>
                                        </ul>
                                        <hr>
                                        <div class="text-center"><a href="#" class="btn btn-outline-danger mb-3 px-4">View plan</a><br /><a href="#" class="btn btn-danger">Buy this plan</a></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="carousel-item">
                        <div class="row">
                            <div class="col">
                                <div class="card">
                                    <div class="card-header">
                                        Value Pack
                                    </div>
                                    <div class="card-body">
                                        <h5 class="card-title">Silver Surfer</h5>
                                        <hr>
                                        <div class="row">
                                            <div class="col">
                                                <div class="data">10GB</div><p style="margin-top:-26px;font-weight:bold;font-size:20px">Data</p>
                                            </div>
                                            <div class="col">
                                                <p style="text-align:right;" class="mt-4"><span style="text-decoration:line-through">£8.35</span><br /><span class="curprice">£6.49</span><br />per month</p>
                                            </div>
                                        </div>
                                        <hr>
                                        <ul>
                                            <li>Unlimited Calls &amp; Texts</li>
                                            <li>Free International Calls</li>
                                            <li>Wi-Fi Calling &amp; eSIM</li>
                                            <li>EU Roaming: 15GB/1000 min/1000 Texts</li>
                                        </ul>
                                        <hr>
                                        <div class="text-center"><a href="#" class="btn btn-outline-danger mb-3 px-4">View plan</a><br /><a href="#" class="btn btn-danger">Buy this plan</a></div>
                                    </div>
                                </div>
                            </div>
                            <div class="col">
                                <div class="card">
                                    <div class="card-header">
                                        Best Seller
                                    </div>
                                    <div class="card-body">
                                        <h5 class="card-title">Zoiko Elite</h5>
                                        <hr>
                                        <div class="row">
                                            <div class="col">
                                                <div class="data">100GB</div><p style="margin-top:-26px;font-weight:bold;font-size:20px">Data</p>
                                            </div>
                                            <div class="col">
                                                <p style="text-align:right;" class="mt-4"><span style="text-decoration:line-through">£25.50</span><br /><span class="curprice">£15.99</span><br />per month</p>
                                            </div>
                                        </div>
                                        <hr>
                                        <ul>
                                            <li>Unlimited Calls &amp; Texts</li>
                                            <li>Free International Calls</li>
                                            <li>Wi-Fi Calling &amp; eSIM</li>
                                            <li>EU Roaming: 15GB/1000 min/1000 Texts</li>
                                        </ul>
                                        <hr>
                                        <div class="text-center"><a href="#" class="btn btn-outline-danger mb-3 px-4">View plan</a><br /><a href="#" class="btn btn-danger">Buy this plan</a></div>
                                    </div>
                                </div>
                            </div>
                            <div class="col">
                                <div class="card">
                                    <div class="card-header">
                                        Exclusive Offer
                                    </div>
                                    <div class="card-body">
                                        <h5 class="card-title">Public Sector Workers' Deal</h5>
                                        <hr>
                                        <div class="row">
                                            <div class="col">
                                                <div class="data">30GB</div><p style="margin-top:-26px;font-weight:bold;font-size:20px">Data</p>
                                            </div>
                                            <div class="col">
                                                <p style="text-align:right;" class="mt-4"><span style="text-decoration:line-through">£11.99</span><br /><span class="curprice">£9.99</span><br />per month</p>
                                            </div>
                                        </div>
                                        
                                        <hr>
                                        <ul>
                                            <li>Unlimited Calls &amp; Texts</li>
                                            <li>Free International Calls</li>
                                            <li>Wi-Fi Calling &amp; eSIM</li>
                                            <li>EU Roaming: 15GB/1000 min/1000 Texts</li>
                                        </ul>
                                        <hr>
                                        <div class="text-center"><a href="#" class="btn btn-outline-danger mb-3 px-4">View plan</a><br /><a href="#" class="btn btn-danger">Buy this plan</a></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Carousel Section ends -->
        </div>
        <div id="menu2" class="tab-pane fade">
            <!-- Carousel Section -->
            <div id="carouselExampleControls" class="carousel slide mt-4" data-bs-ride="carousel">
                <div class="carousel-inner">
                    <div class="carousel-item active">
                        <div class="row">
                            <div class="col">
                                <div class="card">
                                    <div class="card-header">
                                        Value Pack
                                    </div>
                                    <div class="card-body">
                                        <h5 class="card-title">Roam &amp; Study MAX</h5>
                                        <hr>
                                        <div class="row">
                                            <div class="col">
                                                <div class="data">30GB</div><p style="margin-top:-26px;font-weight:bold;font-size:20px">Data</p>
                                            </div>
                                            <div class="col">
                                                <p style="text-align:right;" class="mt-4"><span style="text-decoration:line-through">£11.99</span><br /><span class="curprice">£9.99</span><br />per month</p>
                                            </div>
                                        </div>
                                        <hr>
                                        <ul>
                                            <li>Unlimited Calls &amp; Texts</li>
                                            <li>Free International Calls</li>
                                            <li>Wi-Fi Calling &amp; eSIM</li>
                                            <li>EU Roaming: 15GB/1000 min/1000 Texts</li>
                                        </ul>
                                        <hr>
                                        <div class="text-center"><a href="#" class="btn btn-outline-danger mb-3 px-4">View plan</a><br /><a href="#" class="btn btn-danger">Buy this plan</a></div>
                                    </div>
                                </div>
                            </div>
                            <div class="col">
                                <div class="card">
                                    <div class="card-header">
                                        Best Seller
                                    </div>
                                    <div class="card-body">
                                        <h5 class="card-title">Business Booster Premium</h5>
                                        <hr>
                                        <div class="row">
                                            <div class="col">
                                                <div class="data">100GB</div><p style="margin-top:-26px;font-weight:bold;font-size:20px">Data</p>
                                            </div>
                                            <div class="col">
                                                <p style="text-align:right;" class="mt-4"><span style="text-decoration:line-through">£31.00</span><br /><span class="curprice">£22.99</span><br />per month</p>
                                            </div>
                                        </div>
                                        <hr>
                                        <ul>
                                            <li>Unlimited Calls &amp; Texts</li>
                                            <li>Free International Calls</li>
                                            <li>Wi-Fi Calling &amp; eSIM</li>
                                            <li>Roaming 30GB/2000 min/2000 Texts</li>
                                        </ul>
                                        <hr>
                                        <div class="text-center"><a href="#" class="btn btn-outline-danger mb-3 px-4">View plan</a><br /><a href="#" class="btn btn-danger">Buy this plan</a></div>
                                    </div>
                                </div>
                            </div>
                            <div class="col">
                                <div class="card">
                                    <div class="card-header">
                                        Exclusive Offer
                                    </div>
                                    <div class="card-body">
                                        <h5 class="card-title">Unlimited Data Bundle</h5>
                                        <hr>
                                        <div class="row">
                                            <div class="col">
                                                <div class="data">Unlimited</div><p style="margin-top:-26px;font-weight:bold;font-size:20px">Data</p>
                                            </div>
                                            <div class="col">
                                                <p style="text-align:right;" class="mt-4"><span style="text-decoration:line-through">£27.50</span><br /><span class="curprice">£19.99</span><br />per month</p>
                                            </div>
                                        </div>
                                        <hr>
                                        <ul>
                                            <li>Unlimited Calls &amp; Texts</li>
                                            <li>Free International Calls</li>
                                            <li>Wi-Fi Calling &amp; eSIM</li>
                                            <li>EU Roaming: 40GB/Unlimited Calls &amp; Texts</li>
                                        </ul>
                                        <hr>
                                        <div class="text-center"><a href="#" class="btn btn-outline-danger mb-3 px-4">View plan</a><br /><a href="#" class="btn btn-danger">Buy this plan</a></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="carousel-item">
                        <div class="row">
                            <div class="col">
                                <div class="card">
                                    <div class="card-header">
                                        Value Pack
                                    </div>
                                    <div class="card-body">
                                        <h5 class="card-title">Silver Surfer</h5>
                                        <hr>
                                        <div class="row">
                                            <div class="col">
                                                <div class="data">10GB</div><p style="margin-top:-26px;font-weight:bold;font-size:20px">Data</p>
                                            </div>
                                            <div class="col">
                                                <p style="text-align:right;" class="mt-4"><span style="text-decoration:line-through">£8.35</span><br /><span class="curprice">£6.49</span><br />per month</p>
                                            </div>
                                        </div>
                                        <hr>
                                        <ul>
                                            <li>Unlimited Calls &amp; Texts</li>
                                            <li>Free International Calls</li>
                                            <li>Wi-Fi Calling &amp; eSIM</li>
                                            <li>EU Roaming: 15GB/1000 min/1000 Texts</li>
                                        </ul>
                                        <hr>
                                        <div class="text-center"><a href="#" class="btn btn-outline-danger mb-3 px-4">View plan</a><br /><a href="#" class="btn btn-danger">Buy this plan</a></div>
                                    </div>
                                </div>
                            </div>
                            <div class="col">
                                <div class="card">
                                    <div class="card-header">
                                        Best Seller
                                    </div>
                                    <div class="card-body">
                                        <h5 class="card-title">Zoiko Elite</h5>
                                        <hr>
                                        <div class="row">
                                            <div class="col">
                                                <div class="data">100GB</div><p style="margin-top:-26px;font-weight:bold;font-size:20px">Data</p>
                                            </div>
                                            <div class="col">
                                                <p style="text-align:right;" class="mt-4"><span style="text-decoration:line-through">£25.50</span><br /><span class="curprice">£15.99</span><br />per month</p>
                                            </div>
                                        </div>
                                        <hr>
                                        <ul>
                                            <li>Unlimited Calls &amp; Texts</li>
                                            <li>Free International Calls</li>
                                            <li>Wi-Fi Calling &amp; eSIM</li>
                                            <li>EU Roaming: 15GB/1000 min/1000 Texts</li>
                                        </ul>
                                        <hr>
                                        <div class="text-center"><a href="#" class="btn btn-outline-danger mb-3 px-4">View plan</a><br /><a href="#" class="btn btn-danger">Buy this plan</a></div>
                                    </div>
                                </div>
                            </div>
                            <div class="col">
                                <div class="card">
                                    <div class="card-header">
                                        Exclusive Offer
                                    </div>
                                    <div class="card-body">
                                        <h5 class="card-title">Public Sector Workers' Deal</h5>
                                        <hr>
                                        <div class="row">
                                            <div class="col">
                                                <div class="data">30GB</div><p style="margin-top:-26px;font-weight:bold;font-size:20px">Data</p>
                                            </div>
                                            <div class="col">
                                                <p style="text-align:right;" class="mt-4"><span style="text-decoration:line-through">£11.99</span><br /><span class="curprice">£9.99</span><br />per month</p>
                                            </div>
                                        </div>
                                        
                                        <hr>
                                        <ul>
                                            <li>Unlimited Calls &amp; Texts</li>
                                            <li>Free International Calls</li>
                                            <li>Wi-Fi Calling &amp; eSIM</li>
                                            <li>EU Roaming: 15GB/1000 min/1000 Texts</li>
                                        </ul>
                                        <hr>
                                        <div class="text-center"><a href="#" class="btn btn-outline-danger mb-3 px-4">View plan</a><br /><a href="#" class="btn btn-danger">Buy this plan</a></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Carousel Section ends -->
        </div>
    </div>
</div>

<div class="container py-4 simplanbox">
    <h2 class="text-center py-4">Reasons to Love Zoiko Mobile</h2>
    <p>Zoiko Mobile offers unbeatable advantages <span style="color:#DF1E5A;">|</span> Free international calls <span style="color:#DF1E5A;">|</span> No credit check <span style="color:#DF1E5A;">|</span> Budget-friendly plans <span style="color:#DF1E5A;">|</span> Seamless connectivity with free EU roaming <span style="color:#DF1E5A;">|</span> Zoiko is the perfect choice for your mobile needs</p>
    <div class="row py-4 gx-6">
        <div class="col text-center">
            <img src="{{ URL::asset('/images/mobile-round-icon.png') }}" class="mb-4" width="100" alt="">
            <div class="text-center">
                <h4>Free International Calls</h4>
                <p>Connect with loved ones abroad without any extra charges.</p>
            </div>
        </div>
        <div class="col text-center">
            <img src="{{ URL::asset('/images/eye-icon.png') }}" class="mb-4" width="100" alt="">
            <div class="text-center">
                <h4>No Credit Check</h4>
                <p>Get a mobile plan without worrying about credit checks.</p>
            </div>
        </div>
        <div class="col text-center">
            <img src="{{ URL::asset('/images/dot-icon.png') }}" class="mb-4" width="100" alt="">
            <div class="text-center">
                <h4>Pocket Friendly</h4>
                <p>Choose from a range of affordable plans that suit your budget.</p>
            </div>
        </div>
        <div class="col text-center">
            <img src="{{ URL::asset('/images/search-icon.png') }}" class="mb-4" width="100" alt="">
            <div class="text-center">
                <h4>Free to Raom</h4>
                <p>Enjoy free roaming in the EU with all our plans.</p>
            </div>
        </div>
    </div>
</div>
<div class="containerfluid refurbished">
    <div class="container py-4">
        <div class="row">
            <div class="col-md-4 py-4">
                <h2>Peck Up A Fantastic Deal On Our Refurbished Smartphones!</h2>
                <p>From Sleek Design to Lightning-Fast Processors, Our Refurbished Smartphones Have Got It All.</p>
                <button type="button" class="btn btn-danger btn-lg">View Details</button>
            </div>
            <div class="col-md-8">
                <img src="{{ URL::asset('/images/mobile_group.png') }}" class="w-100" alt="">
            </div>
        </div>
    </div>
</div>
<div class="containerfluid py-4 px-4 phoneslider">
    <div id="carouselExample" class="carousel slide">
    <div class="carousel-inner">
        <div class="carousel-item active">
            <div class="row gx-5">
                @for ($i=0;$i<4;$i++)
                <div class="col">
                    <div class="card">
                        <div class="card-body">
                            <h5 class="card-title">{{ $phones[$i]->modelname }}</h5>
                            <div class="imgbox"><img src="/images/{{$phones[$i]->imgpath}}" alt="iPhone 13 Mini" height="320"></div>
                            <p class="card-text text-center">Premium Quality</p>
                            <div class="imgbox">
                                <a href="{{ route('product', str_replace(' ', '-', $phones[$i]->modelname)) }}" class="btn btn-outline-danger" style="margin-right:20px">View Detail</a>
                                <a href="#" class="btn btn-success">Buy Now</a>
                            </div>
                        </div>
                    </div>
                </div>
                @endfor
                <!-- <div class="col">
                    <div class="card">
                        <div class="card-body">
                            <h5 class="card-title">iPhone 13 Mini</h5>
                            <div class="imgbox"><img src="{{ URL::asset('/images/iphone-13-mini-pink.jpg') }}" alt="iPhone 13 Mini" height="320"></div>
                            <p class="card-text text-center">Premium Quality</p>
                            <div class="imgbox">
                                <a href="{{ route('product', 'iphone-13-mini') }}" class="btn btn-outline-danger" style="margin-right:20px">View Detail</a>
                                <a href="#" class="btn btn-success">Buy Now</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col">
                    <div class="card">
                        <div class="card-body">
                            <h5 class="card-title">iPhone 12 Pro Max</h5>
                            <div class="imgbox"><img src="{{ URL::asset('/images/iphone-12-pro-max-graphite.jpg') }}" alt="iPhone 12 Pro Max" height="320"></div>
                            <p class="card-text text-center">Premium Quality</p>
                            <div class="imgbox">
                                <a href="{{ route('product', 'iphone-12-pro-max') }}" class="btn btn-outline-danger" style="margin-right:20px">View Detail</a>
                                <a href="#" class="btn btn-success">Buy Now</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col">
                    <div class="card">
                        <div class="card-body">
                            <h5 class="card-title">Galaxy S22</h5>
                            <div class="imgbox"><img src="{{ URL::asset('/images/galaxy-s22.jpg') }}" alt="Galaxy S22" height="320"></div>
                            <p class="card-text text-center">Premium Quality</p>
                            <div class="imgbox">
                                <a href="#" class="btn btn-outline-danger" style="margin-right:20px">View Detail</a>
                                <a href="#" class="btn btn-success">Buy Now</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col">
                    <div class="card">
                        <div class="card-body">
                            <h5 class="card-title">iPhone 14 Pro</h5>
                            <div class="imgbox"><img src="{{ URL::asset('/images/iphone-14-pro-max-black.jpg') }}" alt="iPhone 14 Pro Max" height="320"></div>
                            <p class="card-text text-center">Premium Quality</p>
                            <div class="imgbox">
                                <a href="#" class="btn btn-outline-danger" style="margin-right:20px">View Detail</a>
                                <a href="#" class="btn btn-success">Buy Now</a>
                            </div>
                        </div>
                    </div>
                </div> -->
            </div>
        </div>
        <div class="carousel-item">
            <img src="..." class="d-block w-100" alt="...">
        </div>
    </div>
    <!-- <button class="carousel-control-prev" type="button" data-bs-target="#carouselExample" data-bs-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Previous</span>
    </button>
    <button class="carousel-control-next" type="button" data-bs-target="#carouselExample" data-bs-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Next</span>
    </button> -->
    </div>
</div>
@endsection