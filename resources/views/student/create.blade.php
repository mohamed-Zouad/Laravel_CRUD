<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <title>Document</title>
</head>

<body>
    @extends('layouts.layout')
    @section('content')

        <div class="card">
            <div class="card-header">Students Page</div>
            <div class="card-body">

                <form action="{{ url('student') }}" method="post">
                    {!! csrf_field() !!}
                    <label>name</label></br>
                    <input type="text" name="name" id="name" class="form-control"></br>
                    <label>email</label></br>
                    <input type="text" name="email" id="email" class="form-control"></br>
                    <label>age</label></br>
                    <input type="text" name="age" id="age" class="form-control"></br>
                    <input type="submit" value="Save" class="btn btn-success"></br>
                </form>

            </div>
        </div>

    @stop

</body>

</html>
