@extends('layouts.app')
@extends('home')
@section('table')
<div class="container mt-2">
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2>View User</h2>
            </div>
            <a class="btn btn-primary" href="{{ route('contact.index') }}">Back</a>   
            <p></p>
        </div>
        
    </div>


    <table class="table table-bordered">
        <tr>
            <th>#</th>
            <th>First Name</th>
            <th>Last Name</th>
            <th>Email</th>
        </tr>

        <tr>
            <td>{{ $contact->first_name }}</td>
            <td>{{ $contact->last_name }}</td>
            <td>{{ $contact->email }}</td>
            <td>{{ $contact->message }}</td>
            <td>
                   
            
@endsection

