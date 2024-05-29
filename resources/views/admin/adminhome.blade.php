@extends('layouts.admin.adminhome')
@section('homeadmin')
@csrf
<link rel="stylesheet" href="css/adminhome.css">
<div class="container">
    <div class="containercontent">
        <label class="name">E-Certificate Generate</label>
        <p>
            WELCOME ADMIN!! SPIRIT TO LIVE THE DAY<br> 
            SEE YOU AT YOUR DUTY!<br>
        </p>
        {{-- <button onclick="window.location.href='#'">PERSONAL INFO</button> --}}
        <img src="jpg/vectorhomeadmin.png" alt="" class="img1">
        <div>
            <img class="img2" src="jpg/vectorhomeadmin2.png"/>
        </div>
    </div> 
</div>
<!-- <div class="moon-img">
<img src="jpg/moon.png" alt=""/>
</div> -->
<!-- </div> -->

@endsection