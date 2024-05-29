@extends('layouts.admin.adminedit')
@section('adminedit')
@csrf
    <link rel="stylesheet" href="css/adminedit.css">
    <div class="login-box">
        <form action="">
            <div class="user-box">
                <input type="text" name="name" required="" value="Sigit Arkananta" readonly>
                <label for="name">Name</label>
            </div>
            <div class="user-box">
                <input type="text" name="username" required="" value="thesig1t" readonly>
                <label for="username">Username</label>
            </div>
            <div class="user-box">
                <input type="text" name="email" required="" value="sigitarkananta13@gmail.com" readonly>
                <label for="email">Email</label>
            </div>
            <div class="user-box">
                <input type="text" name="datecreated" required="" value="2023-03-27, 09:10" readonly>
                <label for="datecreated">Date Created</label>
            </div>
            
                {{-- <label for="role" id="role">Role</label>
                <select name="role" id="">
                    <option value="user">User</option>
                    <option value="admin">Admin</option>
                </select> --}}
                <div class="user-box">
                    <label for="role" id="role">Role</label>
                </div>
                <div class="wrapper">
                    <input type="radio" name="role" id="option-1" value="user" checked>
                    <input type="radio" name="role" id="option-2" value="admin">
                      <label for="option-1" class="option option-1">
                        <div class="dot"></div>
                         <span>User</span>
                         </label>
                      <label for="option-2" class="option option-2">
                        <div class="dot"></div>
                         <span>Admin</span>
                      </label>
                   </div>
            <div class="button-form">
                <a href="#" id="submit">Submit</a>
                {{-- <div id="register">
                    Don't have account ? <br />
                    <a href="#">Register</a>
                </div> --}}
            </div>
        </form>
    </div>
@endsection