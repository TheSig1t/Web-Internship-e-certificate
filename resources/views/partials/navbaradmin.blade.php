<link rel="stylesheet" href="css/navbar.css">

<nav>
    {{-- <input type="checkbox" id="check">
    <label for="check" class="checkbtn">
        <i class="fas fa-bars"></i>
    </label> --}}
    <label class="logo">Internship-Certificate</label>
    <ul>
        {{-- <li><a href="/login">Login Page</a></li> --}}
        {{-- <li><a href="/">Home(user)</a></li> --}}
        <li><a href="/homeadmin ">Home</a></li>
        <li><a href="/admin">User Data</a></li>
        <li><a href="/admincetakuser">Print Certificate</a></li>
        <li><a class="tbl-biru" onclick="window.location.href='/'">Logout</a></li>
    </ul>
    <div class="menu-toggle">
        <input type="checkbox" />
        <span></span>
        <span></span>
        <span></span>
    </div>
</nav>