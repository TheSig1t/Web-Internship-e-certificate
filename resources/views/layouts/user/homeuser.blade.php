<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home | User</title>
    {{-- <script src="https://kit.fontawesome.com/a076d05399.js"></script> --}}
    <style>
        nav {
            justify-content:space-evenly;
        }
    </style>

</head>
<body>
  @include('partials.navbar')
  @yield('content')
  <script src="js/navbar.js"></script>
</body>
</html>