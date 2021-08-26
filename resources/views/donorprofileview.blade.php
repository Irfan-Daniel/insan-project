<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- CSS only -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KyZXEAg3QhqLMpG8r+8fhAXLRk2vvoC2f3B09zVXn8CA5QIVfZOJ3BCsw2P0p/We" crossorigin="anonymous">
    <title>Donor Profile Page</title>
</head>
<body>
@include('layouts.sidebar')
<div class="container main">
    <div>
        @isset($donors)
            <nav class="navbar navbar-expand-lg navbar-light bg-light">
                <div class="collapse navbar-collapse" id="navbarNav">
                    <ul class="navbar-nav">
                        <li class="nav-item active">
                            <h3 class="nav-link">Nama: <b>{{$donors->name}}</b></h3>
                            <h3 class="nav-link">Nombor Telefon: <b>{{$donors->telephone_number}}</b></h3>
                        </li>
                        <li>
                            <h1>&#10240;</h1>
                        </li>
                        <li class="nav-item active">
                            <h1>&#10240;</h1>
                        </li>
                        <li>
                            <h1>&#10240;</h1>
                        </li>
                        <li>
                            <h1>&#10240;</h1>
                        </li>
                        <li>
                            <h1>&#10240;</h1>
                        </li>
                        <li>
                            <a class="btn btn-success" href="/donationform/{{$donors->id}}" role="button">Make a Donation</a>
                        </li>
                        <li>
                            <h1>&#10240;</h1>
                        </li>
                        <li>
                            <a onclick="return confirm('Are you sure you want to delete the details for name ?')" href="delete/{{$donors->id}}" class="btn btn-danger">Delete Donor</a>
                        </li>
                    </ul>
                </div>
            </nav>
            &#10240;

            <div class="row">
                <div class="col-sm-6">
                    <div class="card" style="height: 300px";>
                        <div class="card-body d-flex flex-column">
                            <h5 class="card-title">Nombor Kad Pengenalan yang didaftarkan:</h5>
                            <h6 class="card-subtitle mb-2 text-muted">{{$donors->ic_number}}</h6>

                            <h5 class="card-title">Email yang didaftarkan:</h5>
                            <h6 class="card-subtitle mb-2 text-muted">{{$donors->email}}</h6>
                        </div>
                    </div>
                </div>
                <div class="col-sm-6">
                    <div class="card" style="height: 600px";>
                        <div class="card-body d-flex flex-column">
                            panc
                        </div>
                    </div>
                </div>
            </div>
        @endisset
    </div>
</div>
</body>
</html>
