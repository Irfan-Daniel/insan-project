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
    @include('layouts.mapandbuttons')
</div>

<div class="container main">
    <div>
        <div class="pull-left">
            <a><h2 style="font-weight: bold;">Beneficiaries View</h2></a>
        </div>
        <div class="pull-right">
            <a class="btn btn-success" href="/beneficiaryregistrationform">Register a Beneficiary</a>
        </div>
        <table class="table table-hover">
            <tr class="table-primary">
                <td>Id</td>
                <td>Name</td>
                <td>Telephone Number</td>
                <td>Address</td>
                <td> </td>
            </tr>
            @foreach($beneficiary as $beneficiaries)
                <tr>
                    <td>{{$beneficiaries['id']}}</td>
                    <td>{{$beneficiaries['name']}}</td>
                    <td>{{$beneficiaries['telephone_number']}}</td>
                    <td>{{$beneficiaries['address']}}</td>
                    <td><a class="btn btn-primary" href="/beneficiaryview/{{$beneficiaries['id']}}" role="button">View Beneficiary</a>
                    </td>
                </tr>
            @endforeach
        </table>
    </div>

    <div>
    <br>
        <div class="pull-left">
            <a><h2 style="font-weight: bold;">Donations View</h2></a>
            <h3 style="font-weight: bold;">List of Donors in Area</h3>
        </div>

        <div class="pull-right">
            <a class="btn btn-success" href="/donorregistrationform">Register a Donor</a>
        </div>
        <table class="table table-hover">
            <tr class="table-primary">
                <td>Id</td>
                <td>Name</td>
                <td>IC Number</td>
                <td>Telephone Number</td>
                <td>Email</td>
                <td></td>
            </tr>
            @foreach($donor as $donors)
                <tr>
                    <td>{{$donors['id']}}</td>
                    <td>{{$donors['name']}}</td>
                    <td>{{$donors['ic_number']}}</td>
                    <td>{{$donors['telephone_number']}}</td>
                    <td>{{$donors['email']}}</td>
                    <td><a class="btn btn-primary" href="/donorview/{{$donors['id']}}" role="button">View Donor</a>
                    </td>
                </tr>
            @endforeach
        </table>
    </div>
</div>


</div>
</body>
</html>
