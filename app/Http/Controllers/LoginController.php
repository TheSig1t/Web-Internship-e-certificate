<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    public function index() {
        return view('login');
    }
       
    public function authenticate(){
        $user_login     ='user';
        $admin_login     ='admin';
        $user_password  ='123456';
        $admin_password  ='654321';

    session_start();
    $username =$_POST['username'];
    $password =$_POST['password'];

    if($username == $user_login  && $password == $user_password ){
        return redirect('/halamanuser');
        // session_start();
        // $_SESSION['username'] = $username;
        // header ("location: homeuser.blade.php");
    }
        elseif($username == $admin_login && $password == $admin_password){
            return redirect('/homeadmin');
            // session_start();
            // $_SESSION['username'] = $username;
            // header ("location: /homeadmin");
    }
    else{
        // $request->session()->flash('nama session', 'Pesan session yang ingin ditampilkan');
        return redirect('/');
    }
    }
}
