@extends('layouts.app')

@section('content')

<div class="containerfluid">
    <div class="headbar">
        <div class="container py-2">
            All Plans <span class="msicon"><i class="bi bi-music-note-beamed"></i></span> Unlimited Data <span class="msicon"><i class="bi bi-music-note-beamed"></i></span> Unlimited SMS <span class="msicon"><i class="bi bi-music-note-beamed"></i></span> Unlimited Calls <span class="msicon"><i class="bi bi-music-note-beamed"></i></span> Free Interntional Calls
        </div>
    </div>
</div>

<!-- Carousel Section -->
<div class="container py-5">
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
<div class="container px-4 pb-5">
    <div class="tab-content simplandeal">
        <div id="home" class="tab-pane active" aria-current="page">
            <!-- Carousel Section -->
            <div id="carouselExampleControls" class="carousel slide mt-4" data-bs-ride="carousel">
                <div class="carousel-inner">
                    <div class="carousel-item active">
                        <div class="row">
                            <div class="col">
                                <div class="card">
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
@endsection