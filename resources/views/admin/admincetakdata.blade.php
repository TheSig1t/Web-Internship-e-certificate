@extends('layouts.admin.admincetakdata')
@section('cetakuser')
@csrf
    <link rel="stylesheet" href="css/admincetakuser.css">
<div class="container">
    <div style="overflow-y: auto;">
        <table>
            <tr>
                <th>NO</th>
                <th>NAME</th>
                <th>ACTION</th>
            </tr>
            <tr>
                <td>1.</td>
                <td>Berinda Alya</td>
                <td><button onclick="window.location.href='/admincetaksertifikat'"><i class="bi bi-printer"></i>PRINT CERTIFICATE</button></td>
            </tr>
            <tr>
                <td>2.</td>
                <td>Sigit Arkananta</td>
                <td><button onclick="window.location.href='/admincetaksertifikat'"><i class="bi bi-printer"></i>PRINT CERTIFICATE</button></td>
            </tr>
            <tr>
                <td>3.</td>
                <td>Sigit Arkananta</td>
                <td><button onclick="window.location.href='/admincetaksertifikat'"><i class="bi bi-printer"></i>PRINT CERTIFICATE</button></td>
            </tr>
            <tr>
                <td>4.</td>
                <td>Sigit Arkananta</td>
                <td><button onclick="window.location.href='/admincetaksertifikat'"><i class="bi bi-printer"></i>PRINT CERTIFICATE</button></td>
            </tr>
            <tr>
                <td>5.</td>
                <td>Sigit Arkananta</td>
                <td><button onclick="window.location.href='/admincetaksertifikat'"><i class="bi bi-printer"></i>PRINT CERTIFICATE</button></td>
            </tr>
            <tr>
                <td>6.</td>
                <td>Sigit Arkananta</td>
                <td><button onclick="window.location.href='/admincetaksertifikat'"><i class="bi bi-printer"></i>PRINT CERTIFICATE</button></td>
            </tr>
            <tr>
                <td>7.</td>
                <td>Sigit Arkananta</td>
                <td><button onclick="window.location.href='/admincetaksertifikat'"><i class="bi bi-printer"></i>PRINT CERTIFICATE</button></td>
            </tr>
            <tr>
                <td>8.</td>
                <td>Sigit Arkananta</td>
                <td><button onclick="window.location.href='/admincetaksertifikat'"><i class="bi bi-printer"></i>PRINT CERTIFICATE</button></td>
            </tr>
            <tr>
                <td>9.</td>
                <td>Sigit Arkananta</td>
                <td><button onclick="window.location.href='/admincetaksertifikat'"><i class="bi bi-printer"></i>PRINT CERTIFICATE</button></td>
            </tr>
            <tr>
                <td>10.</td>
                <td>Sigit Arkananta</td>
                <td><button onclick="window.location.href='/admincetaksertifikat'"><i class="bi bi-printer"></i>PRINT CERTIFICATE</button></td>
            </tr>
        </table>
    </div>
</div>

@endsection