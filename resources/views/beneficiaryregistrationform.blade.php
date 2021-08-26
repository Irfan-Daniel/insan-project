<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- CSS only -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KyZXEAg3QhqLMpG8r+8fhAXLRk2vvoC2f3B09zVXn8CA5QIVfZOJ3BCsw2P0p/We" crossorigin="anonymous">
    <title>Beneficiary Registration</title>
</head>
<body>
@include('layouts.sidebar')
<div class="container main">
    <h1>Beneficiary Registration</h1>
    <div>
        <form action="{{ route('beneficiary.store') }}" method="POST">
            @csrf
            <div class="row">
                <div class="col-6">
                    <div class="form-group">
                        <strong>Nama Anda:</strong>
                        <input type="text" name="name" class="form-control" placeholder="Nama">
                    </div>
                </div>
                <div class="col-6">
                    <div class="form-group">
                        <strong>Nombor Telefon:</strong>
                        <input type="text" class="form-control" name="telephone_number" placeholder="Nombor Telefon">
                    </div>
                </div>

                <div class="form-group">
                        <strong>Alamat Semasa:</strong>
                        <input type="text" class="form-control" name="address" placeholder="Alamat Semasa">
                </div>

                <div class="col-6">
                    <div class="form-group">
                        <strong>Nama Pasangan Anda (Jika tidak berkahwin, tulis "Tidak Berkahwin"/"Bujang"):</strong>
                        <input type="text" name="marital_status" class="form-control" placeholder="Nama Pasangan / Tidak Berkahwin / Bujang">
                    </div>
                </div>
                <div class="col-6">
                    <div class="form-group">
                        <strong>Bilangan Anak (Isi "0" jika tiada anak / tidak berkahwin / bujang) panc<br>:</strong>
                        <input type="text" class="form-control" name="no_of_children" placeholder="Bilangan Anak">
                    </div>
                </div>

                @foreach($beneficiary_question as $beneficiary_questions)
                    <div class="form-group">
                        <strong>{{$beneficiary_questions['question']}}</strong>
                        <input type="text" class="form-control" name="answers[{!!$beneficiary_questions['id']!!}]" placeholder="{{$beneficiary_questions['question']}}">
                    </div>
                @endforeach

                <div class="form-group">
                        <strong>Bank Name (if no bank account type "No Bank Account") :</strong>
                        <input type="text" class="form-control" name="bank_name" placeholder="Bank Name">
                </div>

                <div class="form-group">
                        <strong>Bank Account Number (if no bank account type "No Bank Account") :</strong>
                        <input type="text" class="form-control" name="bank_account_number" placeholder="Bank Account Number">
                </div>
                <div class="col-xs-12 col-sm-12 col-md-12 text-center">
                    <h1>&#10240;</h1>
                    <button type="submit" class="btn btn-primary">Submit</button>
                </div>
            </div>
        </form>
    </div>
</div>
</body>
</html>
