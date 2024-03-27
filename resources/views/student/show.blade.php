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


                <div class="card-body">
                    <h5 class="card-title">name : {{ $student->name }}</h5>
                    <p class="card-text">email : {{ $student->email }}</p>
                    <p class="card-text">age : {{ $student->age }}</p>
                </div>

                </hr>

            </div>
        </div>
    </body>

    </html>
