<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>

<body>
    @extends('layouts.layout')
    @section('content')

        <div class="card">
            <div class="card-header">Contactus Page</div>
            <div class="card-body">

                <form action="{{ url('student/' . $student->id) }}" method="post">
                    {!! csrf_field() !!}
                    @method('PATCH')
                    <input type="hidden" name="id" id="id" value="{{ $student->id }}" id="id" />
                    <label>name</label></br>
                    <input type="text" name="name" id="name" value="{{ $student->name }}"
                        class="form-control"></br>
                    <label>email</label></br>
                    <input type="text" name="email" id="email" value="{{ $student->email }}"
                        class="form-control"></br>
                    <label>age</label></br>
                    <input type="text" name="age" id="age" value="{{ $student->age }}"
                        class="form-control"></br>
                    <input type="submit" value="Update" class="btn btn-success"></br>
                </form>

            </div>
        </div>

    @stop

</body>

</html>
