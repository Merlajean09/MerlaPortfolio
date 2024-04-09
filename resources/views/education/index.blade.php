@extends('home')
@section('table')
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Laravel 10 CRUD Tutorial From Scratch</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>
<body>

<div class="container mt-2">

<div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2>Education Table</h2>
            </div>
            <div class="pull-right mb-2">
                @if(Auth::user()->role === 'Admin')
                <a class="btn btn-success" href="{{ route('education.create') }}"> Create Education</a>
                @endif
            </div>
        </div>
    </div>
   
    @if ($message = Session::get('success'))
        <div class="alert alert-success">
            <p>{{ $message }}</p>
        </div>
    @endif
   
    <div class="table-responsive">
        <table class="table table-bordered">
            <tr>
                <th>ID</th>
                <th>Grade Level</th>
                <th>School Year</th>
                <th>School Name</th>
                <th>Address</th>
                <th width="280px">Action</th>
            </tr>
            @foreach ($education as $education)
            <tr>
                <td>{{ ++$i }}</td>
                <td>{{ $education->grade_level }}</td>
                <td>{{ $education->school_year }}</td>
                <td>{{ $education->school_name }}</td>
                <td>{{ $education->address }}</td>
                <td>
                    <form action="{{ route('education.destroy',$education->id) }}" method="Post">
                        @if(Auth::user()->role === 'Admin')
                        <a class="btn btn-primary" href="{{ route('education.edit',$education->id) }}">Edit</a>
                        @endif
                        @csrf
                        @method('DELETE')
                        @if(Auth::user()->role === 'Admin')
                        <button type="submit" class="btn btn-danger">Delete</button>
                        @endif
                    </form>
                </td>
            </tr>
            @endforeach
        </table>
    </div>
    <div class="pull-right">
            @if(Auth::user()->role === 'Admin')
            <a class="btn btn-primary" href="{{ route('home') }}"> Back</a>
            @endif
        </div>
</body>
</html>
@endsection
