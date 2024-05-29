@extends('layouts.user.cetakuser')
@section('cetak')
<link rel="stylesheet" href="css/cetakuser.css">

{{-- <div class="form"> --}}
    <div class="formcontent">
        <img src="/jpg/vectorcetakuser.jpg" id="image" alt="vectorcetakuser">
        <form action="{{ route('buat') }}" method="post">
            @csrf
            <input type="hidden" readonly>
            {{-- value="{{ auth()->user()->id }}" --}}
            <label for="name">Name:</label> <br>
            <input type="text" value="" name="name" placeholder="Inputkan Nama Yang Ingin di Cetak" autofocus > <br>
            {{-- value="{{ auth()->user()->name }}" --}}
            <label for="email">Email:</label> <br>
            <input type="text" value="Sigitarkananta13@gmail.com" readonly> <br>
            <label for="username">Username:</label> <br>
            <input type="text" value="User" readonly> <br>
            {{-- value="{{ auth()->user()->email }}" --}}
            <label for="datecreated">Date Created:</label> <br>
            <input type="text" value="2023 - 12 - 12, 08:00" readonly> <br>
            {{-- value="{{ auth()->user()->created_at }}" --}}
        <button type="submit"><i class="bi bi-printer"></i>PRINT CERTIFICATE</button>
        </form>
    </div>
{{-- </div> --}}

@endsection