@extends('layouts.user.homeuser')
@section('content')
    @csrf
    <link rel="stylesheet" href="css/homeuser.css">
    {{-- <div class="container"> --}}
        <div class="containercontent">
            <ul>
                <li>
                    <label class="name">E-Certificate Generate</label> <br>
                </li>
                <li>
                    <p>
                        THANK YOU !<br> 
                        FOR REGISTER AND MAKE AN ACCOUNT.<br>
                        YOU CAN PRINT YOUR CERTIFICATE BY CLICKING PRINT CERTIFICATE BUTTON ABOVE.
                    </p>
                </li>
            </ul>
            {{-- <button onclick="window.location.href='#'">PERSONAL INFO</button> --}}
            <img src="jpg/vectorhomeuser.png" id="image" alt="vector-homeuser">
        </div>
    {{-- </div> --}}
    
@endsection