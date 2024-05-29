@extends('layouts.admin.adminprint')
@section('print')
<link rel="stylesheet" href="css/cetakuser.css">

{{-- <div class="form"> --}}
    <div class="formcontent">
        <form action="{{ route('print2') }}" method="post">
            @csrf
            <input type="hidden" readonly>
            {{-- value="{{ auth()->user()->id }}" --}}
            
            <label for="name">Name:</label> <br>
            <input type="text" value="" name="name" placeholder="Inputkan Nama Yang Ingin DiCetak" autofocus> <br>
            {{-- value="{{ auth()->user()->name }}" --}}
            <label for="email">Email:</label> <br>
            <input type="text" value="Sigitarkananta13@gmail.com" readonly> <br>
            {{-- <label for="username">Username:</label> <br>
            <input type="text" value="User" readonly> <br> --}}
            {{-- value="{{ auth()->user()->email }}" --}}
            <label for="datecreated">Date Created:</label> <br>
            <input type="text" value="2023 - 12 - 12, 08:00" readonly> <br>
            {{-- value="{{ auth()->user()->created_at }}" --}}
            <div class="dropdown">
                <label for="dropdown">Template Option :</label>    
                <select name="template" id="template-select" style="margin-top:10px;">
                    <option value="default">Default</option>
                    <option value="template-penghargaan1">Option 1</option>
                    <option value="template-penghargaan2">Option 2</option>
                    <option value="template-penghargaan3">Option 3</option>
                </select>
            </div>
            <button type="submit"><i class="bi bi-printer"></i>PRINT CERTIFICATE</button>
        </form>
        <img src="/jpg/vectorcetakadmin2.jpg" id="image" alt="vectorcetakadmin" width="470px" height="auto">
    </div>
{{-- </div> --}}

@endsection