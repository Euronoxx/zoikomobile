@extends('layouts.app')

@section('content')

<div class="container">
    <div class="container my-4">
        <div class="row productpage">
            <div class="col text-center">
                <img src="/images/{{$phone->imgpath}}" alt="{{ $phone->modelname }}" width="400">
            </div>
            <div class="col">
                <h4>{{$phone->modelname}}</h4>
                Model No: {{ $phone->modelno }}<br />
                <p>Network GSM Unlocked</p>
                <div class="price">£{{ $phone->price }}</div>
                Storage:<br />
                <ul class="storage-options">
                    @foreach (explode(',', $phone->storage) as $color)
                        <li class="storage-contain">{{ $color }}</li>
                    @endforeach
                </ul><br><br>
                Available Colors:<br /> 
                <ul class="color-options">
                    @foreach (explode(',', $phone->colors) as $color)
                        <li style="background-color:{{$color}}" class="{{$color}} color-contain"></li>
                    @endforeach
                </ul><br>
                <a href="#" class="checkoutbtn">Go to Checkout</a>
            </div>
        </div>
    </div>
</div>

<div class="container my-5">
    <h2>You may also like</h2>
    <div class="row">
    <?php
    for ($i=0;$i<4;$i++) {
    ?>
        <div class="col">
            <div class="card">
                <div class="card-body">
                    <div class="imgbox"><img src="/images/{{$phones[$i]->imgpath}}" alt="iPhone 13 Mini" height="320"></div>
                    <h5 class="card-title pt-4">{{ $phones[$i]->modelname }}</h5>
                    <span class="price">£{{ $phones[$i]->price }}</span>
                    <div class="imgbox">
                        <a href="{{ route('product', str_replace(' ', '-', $phones[$i]->modelname)) }}" class="btn btn-outline-danger" style="margin-right:20px">View Detail</a>
                        <a href="#" class="btn btn-success">Buy Now</a>
                    </div>
                </div>
            </div>
        </div>
    <?php
    }
    ?>
    </div>
</div>

@endsection