@extends ('home')
@section('table')
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Users Form</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>
<body>

<div class="container mt-2">

    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2>Users Table</h2>
            </div>
            <div class="pull-right mb-2">
                @if(Auth::user()->role === 'Admin')
                <a class="btn btn-success" href="{{ route('users.create') }}"> Create Users</a>
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
                <th>Role</th>
                <th>Name</th>
                <th>Email</th>
                <th width="280px">Action</th>
            </tr>
            
            <tr>
                @foreach ($users as $user)
                @if($users->role == 'spectator')
                <td>{{ ++$i }}</td>
                <td>{{ $user->role }}</td>
                <td>{{ $user->name }}</td>
                <td>{{ $user->email }}</td>
                <td>
                    <form action="{{ route('users.destroy',$user->id) }}" method="Post">
                        @if(Auth::user()->role === 'Admin')
                        <a class="btn btn-primary" href="{{ route('users.edit',$user->id) }}">Edit</a>
                        @endif
                        @csrf
                        @method('DELETE')
                        @if(Auth::user()->role === 'Admin')
                        <button type="submit" class="btn btn-danger">Delete</button>
                        @endif
                    </form>
                </td>
            </tr>
                @endif
            @endforeach
        </table>
    </div>
    <div class="pull-right">
        @if(Auth::user()->role === 'Admin')
        <a class="btn btn-primary" href="{{ route('home') }}"> Back</a>
        @endif
    </div>
</div>

</body>
</html>
@endsection
