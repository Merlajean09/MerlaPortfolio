@extends('home')
@section('table')
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Edit Company Form - Laravel 10 CRUD Tutorial</title>

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" >
</head>
<body>

<div class="container mt-2">

    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2>Edit Education</h2>
            </div>
            <div class="pull-right">
                <a class="btn btn-primary" href="{{ route('education.index') }}" enctype="multipart/form-data"> Back</a>
            </div>
        </div>
    </div>
   
  @if(session('status'))
    <div class="alert alert-success mb-1 mt-1">
        {{ session('status') }}
    </div>
  @endif
  
    <form action="{{ route('education.update',$education->id) }}" method="POST" enctype="multipart/form-data">
        @csrf
        @method('PUT')
   
         <div class="row">
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Grade Level:</strong>
                    <input type="text" name="grade_level" value="{{ $education->name }}" class="form-control" placeholder="Add grade level">
                    @error('grade_level')
                     <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
                    @enderror
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>School Year:</strong>
                     <input type="text" name="school_year" class="form-control" placeholder="Add school Year" value="{{ $education->school_year }}">
                    @error('school_year')
                      <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
                   @enderror
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>School Name:</strong>
                     <input type="text" name="school_name" class="form-control" placeholder="Add school Name" value="{{ $education->school_name }}">
                    @error('school_name')
                      <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
                   @enderror
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Address:</strong>
                    <input type="text" name="address" value="{{ $education->address }}" class="form-control" placeholder="Add address">
                    @error('address')
                     <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
                    @enderror
                </div>
            </div>
              <button type="submit" class="btn btn-primary ml-3">Submit</button>
          
        </div>
   
    </form>
</div>

</body>
</html>
@endsection