@extends('layouts.admin.adminuserdata')
@section('datauser')
@csrf

<link rel="stylesheet" href="css/adminuserdata.css">
<div class="container">
    <div style="overflow-x:auto;">
        <table>
            <tr>
                <th>NO</th>
                <th id="table-column">NAME</th>
                <th id="table-column">E-MAIL</th>
                <th>USERNAME</th>
                <th>ROLE</th>
                <th colspan="2">ACTION</th>
            </tr>
            <tr>
                <td>1</td>
                <td id="table-column">Sigit Arkananta</td>
                <td id="table-column">sigitarkananta13@gmail.com</td>
                <td>Sigit</td>
                <td>Admin</td>
                <td ><button onclick="window.location.href='/adminedit'" id="action"><i class="bi bi-pencil-square"></i>EDIT</button><button><i class="bi bi-trash3-fill"></i>DELETE</button></td>
            </tr>
            <tr>
                <td>2</td>
                <td id="table-column">Sigit Arkananta</td>
                <td id="table-column">sigitarkananta13@gmail.com</td>
                <td>Sigit</td>
                <td>User</td>
                <td ><button onclick="window.location.href='/adminedit'" id="action"><i class="bi bi-pencil-square"></i>EDIT</button><button><i class="bi bi-trash3-fill"></i>DELETE</button></td>
            </tr>
            <tr>
                <td>3</td>
                <td id="table-column">Sigit Arkananta</td>
                <td id="table-column">sigitarkananta13@gmail.com</td>
                <td>Sigit</td>
                <td>User</td>
                <td ><button onclick="window.location.href='/adminedit'" id="action"><i class="bi bi-pencil-square"></i>EDIT</button><button><i class="bi bi-trash3-fill"></i>DELETE</button></td>
            </tr>
            <tr>
                <td>4</td>
                <td id="table-column">Sigit Arkananta</td>
                <td id="table-column">sigitarkananta13@gmail.com</td>
                <td >Sigit</td>
                <td>User</td>
                <td ><button onclick="window.location.href='/adminedit'" id="action"><i class="bi bi-pencil-square"></i>EDIT</button><button><i class="bi bi-trash3-fill"></i>DELETE</button></td>
            </tr>
            <tr>
                <td>5</td>
                <td id="table-column">Sigit Arkananta</td>
                <td id="table-column">sigitarkananta13@gmail.com</td>
                <td>Sigit</td>
                <td>User</td>
                <td ><button onclick="window.location.href='/adminedit'" id="action"><i class="bi bi-pencil-square"></i>EDIT</button><button><i class="bi bi-trash3-fill"></i>DELETE</button></td>
            </tr>
            <tr>
                <td>6</td>
                <td id="table-column">Sigit Arkananta</td>
                <td id="table-column">sigitarkananta13@gmail.com</td>
                <td>Sigit</td>
                <td>User</td>
                <td ><button onclick="window.location.href='/adminedit'" id="action"><i class="bi bi-pencil-square"></i>EDIT</button><button><i class="bi bi-trash3-fill"></i>DELETE</button></td>
            </tr>
            <tr>
                <td>7</td>
                <td id="table-column">Sigit Arkananta</td>
                <td id="table-column">sigitarkananta13@gmail.com</td>
                <td>Sigit</td>
                <td>User</td>
                <td ><button onclick="window.location.href='/adminedit'" id="action"><i class="bi bi-pencil-square"></i>EDIT</button><button><i class="bi bi-trash3-fill"></i>DELETE</button></td>
            </tr>
            <tr>
                <td>8</td>
                <td id="table-column">Sigit Arkananta</td>
                <td id="table-column">sigitarkananta13@gmail.com</td>
                <td>Sigit</td>
                <td>User</td>
                <td ><button onclick="window.location.href='/adminedit'" id="action"><i class="bi bi-pencil-square"></i>EDIT</button><button><i class="bi bi-trash3-fill"></i>DELETE</button></td>
            </tr>
            <tr>
                <td>9</td>
                <td id="table-column">Sigit Arkananta</td>
                <td id="table-column">sigitarkananta13@gmail.com</td>
                <td>Sigit</td>
                <td>User</td>
                <td ><button onclick="window.location.href='/adminedit'" id="action"><i class="bi bi-pencil-square"></i>EDIT</button><button><i class="bi bi-trash3-fill"></i>DELETE</button></td>
            </tr>
            <tr>
                <td>10</td>
                <td id="table-column">Sigit Arkananta</td>
                <td id="table-column">sigitarkananta13@gmail.com</td>
                <td>Sigit</td>
                <td>User</td>
                <td ><button onclick="window.location.href='/adminedit'" id="action"><i class="bi bi-pencil-square"></i>EDIT</button><button><i class="bi bi-trash3-fill"></i>DELETE</button></td>
            </tr>

    </table>
</div>
</div>

@endsection