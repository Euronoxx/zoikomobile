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
            <?php
            $count = 0;
            while ($count < count($offerplans)) {
                echo "<div class='row'>";
                for ($i = $count; $i < $count + 2; $i++) {
                    echo "<div class='col'><div class='text-center green24bold'>";
                    echo $offerplans[$i]->plan;
                    echo '<div class="paybox"><span class="numb">' . $offerplans[$i]->data . '</span></div>';
                    echo '</div></div>';
                }
                echo '</div>';
                $count = $count + 2;
            }
            ?>
        </div>
        <div id="menu1" class="tab-pane fade">
            <div class="row">
                <div class="col"></div>
                <div class="col"></div>
            </div>
        </div>
        <div id="menu2" class="tab-pane fade">
            <div class="row">
                <div class="col"></div>
                <div class="col"></div>
            </div>
        </div>
    </div>
</div>
@endsection