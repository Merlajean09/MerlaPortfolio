@extends('home')
@section('table')
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>About Table</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>
<body>

<div class="container mt-2">

    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2>About Table</h2>
            </div>
            
        </div>
    </div>
    @if ($message = Session::get('success'))
        <div class="alert alert-success">
            <p>{{ $message }}</p>
        </div>
    @endif
   
    <div class="table-responsive"> <!-- Wrapping table with table-responsive class -->
        <table class="table table-bordered">
            <tr>
                <th>Description</th>
                <th>Phone</th>
                <th>Email</th>
                <th>Address</th>
                <th width="280px">Action</th>
            </tr>
            @foreach ($about as $about)
            <tr>
                <td>{{ $about->description }}</td>
                <td>{{ $about->phone }}</td>
                <td>{{ $about->email }}</td>
                <td>{{ $about->address }}</td>
                <td>
                    <form action="{{ route('abouts.destroy',$about->id) }}" method="Post">
                        <a class="btn btn-primary" href="{{ route('abouts.edit',$about->id) }}">Edit</a>
                        @csrf
                        @method('DELETE')
          
                        <button type="submit" class="btn btn-danger">Delete</button>
                    </form>
                </td>
            </tr>
            @endforeach
        </table>
    </div>
    <div class="pull-right">
        <a class="btn btn-primary" href="{{ route('home') }}"> Back</a>
    </div>
</div>
</body>
</html>
@endsection
