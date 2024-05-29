<link rel="stylesheet" href="css/navbar.css">
    <style>
        nav ul{
            display: block;
            /* justify-content:space-around; */
        }
        nav ul li{
            float: right;
            right: 0;
            margin-right: 30px;
        }
    </style>

<nav id="NavBar">
    {{-- <input type="checkbox" id="check">
    <label for="check" class="checkbtn">
        <i class="fas fa-bars"></i>
    </label> --}}
    <label class="logo">Internship-Certificate</label>
    <ul>
        {{-- <li><a href="/homeadmin">Home (admin)</a></li> --}}
        <li><a class="tbl-biru" onclick="window.location.href='/'">Logout</a></li>
        <li><a href="/test">Print Certificate</a></li>
        <li><a href="/halamanuser">Home</a></li>
    </ul>
    <div class="menu-toggle">
        <input type="checkbox"/>
        <span></span>
        <span></span>
        <span></span>
    </div>
</nav> 