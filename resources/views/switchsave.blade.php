@extends('layouts.app')

@section('content')

<div class="containerfluid">
    <div class="headbar">
        <div class="container py-2">
        Switch to Simplicity <span class="msicon"><i class="bi bi-music-note-beamed"></i></span> More Data <span class="msicon"><i class="bi bi-music-note-beamed"></i></span> More Saving <span class="msicon"><i class="bi bi-music-note-beamed"></i></span> Less Hassle
        </div>
    </div>
</div>

<div class="container greybox">
    <div class="row">
        <div class="col">
            <h4>Speed up your savings with Zoiko Mobile's Switch &amp; Save deal!</h4>
            <p>Our speedy Cheetah, Finn, knows a thing or two about fast tracking your finances. Switch to Zoiko Mobile today and enjoy fantastic saving on your mobile plan, plus free 5G speed!</p>
            <img src="{{ URL::asset('/images/cheetah.png') }}" class="w-100" alt="Speed of Cheetah">
        </div>
        <div class="col">
            <div class="redborderbox">
                <form action="" method="post">
                    @csrf
                    <h5>Personal Information</h5>
                    <div class="row">
                        <div class="col">
                            <label for="fname">First name</label>
                            <input type="text" name="fname" class="form-control" placeholder="First name" aria-label="First name" Required>
                        </div>
                        <div class="col">
                            <label for="lname">Last name</label>
                            <input type="text" name="lname" class="form-control" placeholder="Last name" aria-label="Last name" Required>
                        </div>
                    </div>
                    <br>
                    
                    <div class="row">
                        <div class="col">
                            <label for="email">Email</label>
                            <input type="email" name="email" class="form-control" placeholder="Email" aria-label="Email" Required>
                        </div>
                        <div class="col">
                            <label for="mobile">Mobile</label>
                            <input type="text" name="mobile" class="form-control" placeholder="Mobile" aria-label="Mobile" Required>
                        </div>
                    </div>
                    <br>
                    <h5>Current Mobile Service Details</h5>
                    <div class="row">
                        <div class="col">
                            <label for="provider">Current Provider</label>
                            <input type="text" name="provider" class="form-control" placeholder="Current provider" aria-label="Current Provider">
                        </div>
                        <div class="col">
                            <label for="cost">Current Provider Cost(£)</label>
                            <input type="text" name="cost" class="form-control" placeholder="Cost" aria-label="Cost">
                        </div>
                    </div>
                    <br>
                    <label for="data">Data Allowance(GB)</label>
                    <input type="text" name="data" class="form-control" placeholder="Current provider" aria-label="Data Allowance">
                    <br>
                    <h5>Select Your New Zoiko Mobile Plan</h5>
                    <div class="form-check">
                        <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
                        <label class="form-check-label" for="flexCheckDefault">
                            Yes, I want to keep my current mobile number
                        </label>
                    </div>
                    <div class="row">
                        <div class="col">
                            <label for="fname">PAC Code: *</label>
                            <input type="text" name="paccode" class="form-control"><small>(Required if keeping your number)</small>
                        </div>
                        <div class="col"></div>
                    </div>
                    <br>
                    <div class="form-check">
                        <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
                        <label class="form-check-label" for="flexCheckDefault">
                            No, I would like a new number and to cancel my current. (Please provide your STAC below)
                        </label>
                    </div>
                    <div class="row">
                        <div class="col">
                            <label for="fname">STAC Code: *</label>
                            <input type="text" name="staccode" class="form-control"><small>(Required if cancelling your current service without porting your numbe)</small>
                        </div>
                        <div class="col"></div>
                    </div>
                    <br>
                    <div class="form-check">
                        <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
                        <label class="form-check-label" for="flexCheckDefault">
                        I agree to the terms and conditions of Zoiko Mobile.
                        </label>
                    </div>
                    <br>
                    <div class="form-check">
                        <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
                        <label class="form-check-label" for="flexCheckDefault">
                        I consent to the transfer of my service to Zoiko Mobile and understand that my current services will be terminated once the switch is complete.
                        </label>
                    </div>
                    <br>
                    <input type="submit" value="Submit" name="submit" class="btn btn-outline-danger">
                </form>
            </div>
        </div>
    </div>
</div>

@endsection