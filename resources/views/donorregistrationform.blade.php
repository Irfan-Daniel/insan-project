<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- CSS only -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KyZXEAg3QhqLMpG8r+8fhAXLRk2vvoC2f3B09zVXn8CA5QIVfZOJ3BCsw2P0p/We" crossorigin="anonymous">
    <title>INSAN Overview Page</title>
</head>
<body>
@include('layouts.sidebar')
<div class="container main">
<h1>Donor Registration</h1>
    <form action="/registerdonor" method="POST">
        @csrf
        <div class="row">
            <div class="col-6">
                <div class="form-group">
                    <strong>Name:</strong>
                    <input type="text" name="name" class="form-control" placeholder="Name">
                </div>
            </div>
            <div class="col-6">
                <div class="form-group">
                    <strong>IC Number:</strong>
                    <input type="text" class="form-control" name="ic_number" placeholder="IC Number">
                </div>
            </div>
            <div class="col-6">
                <div class="form-group">
                    <strong>E-mail Address:</strong>
                    <input type="text" name="email" class="form-control" placeholder="Email Address">
                </div>
            </div>
            <div class="col-6">
                <div class="form-group">
                    <strong>Telephone Number:</strong>
                    <input type="text" class="form-control" name="telephone_number" placeholder="Telephone Number">
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12 text-center">
                <h1>&#10240;</h1>
                <button type="submit" class="btn btn-primary">Submit</button>
            </div>
        </div>
    </form>

</div>
</body>
</html>
