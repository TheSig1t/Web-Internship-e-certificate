@extends('layouts.admin.admincetaksertifikat')
@section('templatesertifikat')
@csrf
    <link rel="stylesheet" href="css/admincetaksertifikat.css">
    <div class="container">
        <div class="container-content">

            {{-- <form action="#"> --}}
                <button onclick="window.location.href='/print1'" id="btn-1">CETAK REGISTRASI</button><br>
                <button onclick="window.location.href='/print2'" id="btn-2">CETAK PENGHARGAAN</button><br>
                <button onclick="window.location.href='/print3'" id="btn-3">CETAK  KELULUSAN</button>
            {{-- </form> --}}
        </div>
            <img src="jpg/vectorcetakadmin.png" alt="vectorserfikat" class="img">
        </div>

@endsection