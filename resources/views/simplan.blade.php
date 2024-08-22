@extends('layouts.app')


@section('content')

<div class="container py-4">
    <h2>Simplan {{ $simplan }}</h2>

    <!-- Carousel Section -->
    <div id="carouselExampleControls" class="carousel slide" data-bs-ride="carousel">
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
                                <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                                <a href="#" class="btn btn-primary">Go somewhere</a>
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
                                <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                                <a href="#" class="btn btn-primary">Go somewhere</a>
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
                                <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                                <a href="#" class="btn btn-primary">Go somewhere</a>
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
                                <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                                <a href="#" class="btn btn-primary">Go somewhere</a>
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
                                <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                                <a href="#" class="btn btn-primary">Go somewhere</a>
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
                                <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                                <a href="#" class="btn btn-primary">Go somewhere</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Carousel Section ends -->
</div>

@endsection