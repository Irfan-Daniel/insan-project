<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- CSS only -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KyZXEAg3QhqLMpG8r+8fhAXLRk2vvoC2f3B09zVXn8CA5QIVfZOJ3BCsw2P0p/We" crossorigin="anonymous">
    <title>Beneficiary Profile Page</title>
</head>
<body>
@include('layouts.sidebar')
<div class="container main">
    <div>
        @isset($beneficiary)
            <nav class="navbar navbar-expand-lg navbar-light bg-light">
                <div class="collapse navbar-collapse" id="navbarNav">
                    <ul class="navbar-nav">
                        <li class="nav-item active">
                            <h3 class="nav-link">Nama: <b>{{$beneficiary->name}}</b></h3>
                            <h3 class="nav-link">Nombor Telefon: <b>{{$beneficiary->telephone_number}}</b></h3>
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
                            <h1>&#10240;</h1>
                        </li>
                        <li>
                            <a onclick="return confirm('Are you sure you want to delete the details for name ?')" href="delete/{{$beneficiary->id}}" class="btn btn-danger">Delete Beneficiary</a>
                        </li>
                    </ul>
                </div>
            </nav>
            &#10240;

            <div class="row">
                <div class="col-sm-6">
                    <div class="card" style="height: 300px";>
                        <div class="card-body d-flex flex-column">
                            <h5 class="card-title">Alamat Semasa:</h5>
                            <h6 class="card-subtitle mb-2 text-muted">{{$beneficiary->address}}</h6>

                            <h5 class="card-title">Nama Pasangan / Status Hubungan:</h5>
                            <h6 class="card-subtitle mb-2 text-muted">{{$beneficiary->marital_status}}</h6>

                            <h5 class="card-title">Bilangan Anak:</h5>
                            <h6 class="card-subtitle mb-2 text-muted">{{$beneficiary->no_of_children}}</h6>

                            <h5 class="card-title">Akaun Bank Yang Didaftar:</h5>
                            <h6 class="card-subtitle mb-2 text-muted">{{$beneficiary->bank_name}}</h6>
                            <h6 class="card-subtitle mb-2 text-muted">{{$beneficiary->bank_account_number}}</h6>
                        </div>
                    </div>
                </div>
                <div class="col-sm-6">
                    <div class="card" style="height: 600px";>
                        <div class="card-body d-flex flex-column">
                            @isset($beneficiary_info)
                                @foreach($beneficiary_info as $eachbeneficiaryinfo)
                                    <h5 class="card-title">{{$eachbeneficiaryinfo->beneficiary_question->question}}:</h5>
                                    <h6 class="card-subtitle mb-2 text-muted">{{$eachbeneficiaryinfo->answer}}</h6>
                                @endforeach
                            @endisset
                        </div>
                    </div>
                </div>
            </div>
        @endisset
    </div>
</div>
</body>
</html>
