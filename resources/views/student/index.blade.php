<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <title>Document</title>
</head>

<body>
    @extends('layouts.layout')
    @section('content')
        <div class="container">
            <div class="row">

                <div class="col-md-9">
                    <div class="card">
                        <div class="card-header">
                            <h2>Laravel 10 Crud</h2>
                        </div>
                        <div class="card-body">
                            <a href="{{ url('/student/create') }}" class="btn btn-success btn-sm" title="Add New Student">
                                <i class="fa fa-plus" aria-hidden="true"></i> Add New
                            </a>
                            <br />
                            <br />
                            <div class="table-responsive">
                                <table class="table">
                                    <thead>
                                        <tr>
                                            <th>#</th>
                                            <th>name</th>
                                            <th>email</th>
                                            <th>age</th>
                                            <th>Actions</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($student as $item)
                                            <tr>
                                                <td>{{ $loop->iteration }}</td>
                                                <td>{{ $item->name }}</td>
                                                <td>{{ $item->email }}</td>
                                                <td>{{ $item->age }}</td>

                                                <td>
                                                    <a href="{{ url('/student/' . $item->id) }}"
                                                        title="View Student"><button class="btn btn-info btn-sm"><i
                                                                class="fa fa-eye" aria-hidden="true"></i> View</button></a>
                                                    <a href="{{ url('/student/' . $item->id . '/edit') }}"
                                                        title="Edit Student"><button class="btn btn-primary btn-sm"><i
                                                                class="fa fa-pencil-square-o" aria-hidden="true"></i>
                                                            Edit</button></a>

                                                    <form method="POST" action="{{ url('/student' . '/' . $item->id) }}"
                                                        accept-charset="UTF-8" style="display:inline">
                                                        {{ method_field('DELETE') }}
                                                        {{ csrf_field() }}
                                                        <button type="submit" class="btn btn-danger btn-sm"
                                                            title="Delete Student"
                                                            onclick="return confirm(&quot;Confirm delete?&quot;)"><i
                                                                class="fa fa-trash-o" aria-hidden="true"></i>
                                                            Delete</button>
                                                    </form>
                                                </td>
                                            </tr>
                                        @endforeach
                                    </tbody>
                                </table>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    @endsection

</body>

</html>
