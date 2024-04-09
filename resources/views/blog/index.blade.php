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
                <h2>Blogs Table</h2>
            </div>
            <div class="pull-right mb-2">
                <a class="btn btn-success" href="{{ route('blogs.create') }}"> Create Blog</a>
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
                <th>Title</th>
                <th>Image</th>
                <th>Content</th>
                <th width="280px">Action</th>
            </tr>
            @foreach ($blog as $blog)
            <tr>
                <td>{{++$i}}</td>
                <td>{{ $blog->title }}</td>
                <td> @if($blog->image)
                        <img src="{{'storage/' . $blog->image}}" alt="" style="width: 50px; height:50px;">
                        @else
                        <img src="assets/about/old.jpg" alt="" style="width: 50px; height:50px;">
                        @endif
                <td>{{ $blog->content }}</td>
                <td>
                    <form action="{{ route('blogs.destroy',$blog->id) }}" method="Post">
        
                        <a class="btn btn-primary" href="{{ route('blogs.edit',$blog->id) }}">Edit</a>
       
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
</body>
</html>
@endsection
