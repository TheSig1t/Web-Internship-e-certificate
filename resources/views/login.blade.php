@extends('layouts.login')
@section('login')
<link rel="stylesheet" href="css/login.css">
<?php
// $user_login     ='user'; 
//         $admin_login     ='admin';
//         $user_password  ='1234567';

//     session_start();
//     $username =$_POST['username'];
//     $password =$_POST['password'];

//     if($username == $user_login  && $password == $user_password ){
//         session_start();
//         $_SESSION['username'] = $username;
//         // return redirect('/halamanuser');
//         header ("location: homeuser.blade.php");
//     }   
//         elseif($username == $admin_login && $password == $user_password){
//             session_start();
//             $_SESSION['username'] = $username;
//             return redirect('/homeadmin');
//             // header ("location: /homeadmin");
//     } 
//     else{
//         return redirect('/');
//     }
    ?>

<div class="container">
  <div class="forms-container">
    <div class="signin-signup">
      <form action="/login" class="sign-in-form" method="POST">
        @csrf
        <h2 class="title">Sign in</h2>
          <div class="input-field">
            <i class="fas fa-user"></i>
            <input type="text" name="username" placeholder="Username" />
          </div>
          <div class="input-field">
            <i class="fas fa-lock"></i>
            <input type="password" name="password" placeholder="Password" />
          </div>
          <input type="submit" value="Log In" class="btn solid" />
          {{-- <p class="social-text">Or Sign in with social platforms</p>
          <div class="social-media">
            <a href="#" class="social-icon">
              <i class="fab fa-google"></i>
            </a>
            <a href="#" class="social-icon">
              <i class="fab fa-linkedin-in"></i>
            </a>
          </div> --}}
        </form>
        <form action="#" class="sign-up-form">
          <h2 class="title">Sign up</h2>
          <div class="input-field">
            <i class="fas fa-user"></i>
            <input type="text" placeholder="Name" />
          </div>
          <div class="input-field">
            <i class="fas fa-envelope"></i>
            <input type="email" placeholder="Email" />
          </div>
          <div class="input-field">
            <i class="fas fa-user"></i>
            <input type="text" placeholder="Username (for login)" />
          </div>
          <div class="input-field">
            <i class="fas fa-lock"></i>
            <input type="password" placeholder="Password (for login)" />
          </div>
          <!-- <div class="radio-wrapper">
              <p>GENDER</p>
              <div class="radio-container">
                  <input checked="checked" type="radio" name="gender" value="1" id="male" />
                  <label for="male">MALE</label>
                  <input type="radio" name="gender" value="0" id="female" />
                  <label for="female">FEMALE</label>
              </div>
              </div>  -->
          <input type="submit" class="btn solid" value="Sign up" />
          {{-- <p class="social-text">Or Sign up with social platforms</p>
          <div class="social-media">
            <a href="#" class="social-icon">
              <i class="fab fa-google"></i>
            </a>
            <a href="#" class="social-icon">
              <i class="fab fa-linkedin-in"></i>
            </a>
          </div> --}}
        </form>
      </div>
    </div>

    <div class="panels-container">
      <div class="panel left-panel">
        <div class="content">
          <h3>New here ?</h3>
          <p>
              Don’t have an account yet?
              Please register your account first
          </p>
          <button class="btn transparent" id="sign-up-btn">
            Sign up
          </button>
        </div>
        <img src="jpg/login.svg" class="image" alt="">
      </div>
      <div class="panel right-panel">
        <div class="content">
          <h3>One of us ?</h3>
          <p>
              Already have an account?
              Please login
          </p>
          <button class="btn transparent" id="sign-in-btn">
            Sign in
          </button>
        </div>
        <div class="image">
        <img src="jpg/register.svg" width="700" height="600">
        </div>
      </div>
    </div>
  </div>

  <script src="js/login.js"></script>
@endsection