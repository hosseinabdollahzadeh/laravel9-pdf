<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Laravel 7 PDF Example</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
    <link href="{{ asset('css/app.css') }}" rel="stylesheet" type="text/css" />
</head>
<body>
<div class="container mt-5">
    <h2 class="text-center mb-3">Laravel HTML to PDF Example</h2>
    Employees List
    <table class="table table-bordered mb-5">
        <thead>
        <tr class="table-danger">
            <th scope="col">#</th>
            <th scope="col">Name</th>
            <th scope="col">Email</th>
            <th scope="col">Phone</th>
            <th scope="col">DOB</th>
        </tr>
        </thead>
        <tbody>
        @foreach($employees ?? '' as $employee)
        <tr>
            <th scope="row">{{ $employee['id']}}</th>
            <td>{{ $employee['name']}}</td>
            <td>{{ $employee['email']}}</td>
            <td>{{ $employee['phone_number']}}</td>
            <td>{{ $employee['dob']}}</td>
        </tr>
        @endforeach
        </tbody>
    </table>
    <hr>
    Users List
    <table class="table table-bordered mb-5">
        <thead>
        <tr class="table-danger">
            <th scope="col">#</th>
            <th scope="col">Name</th>
            <th scope="col">Email</th>
        </tr>
        </thead>
        <tbody>
        @foreach($users ?? '' as $user)
        <tr>
            <th scope="row">{{ $user['id']}}</th>
            <td>{{ $user['name']}}</td>
            <td>{{ $user['email']}}</td>
        </tr>
        @endforeach
        </tbody>
    </table>
</div>
<script src="{{ asset('js/app.js') }}" type="text/js"></script>
</body>
</html>
