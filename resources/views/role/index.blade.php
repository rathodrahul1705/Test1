@extends('layouts.app')

<!DOCTYPE html>
<html lang="en">
<head>
  <title>Bootstrap Example</title>
  <meta charset="utf-8">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <!-- <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script> -->
  <!-- <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script> -->
</head>
<body>
  @section('content')

<div class="container">
  <h2>Role</h2>
  <a class="btn btn-success" href="{{url('/role_create')}}">Add Role</a>
  <br>
  <br>
  <table class="table table-bordered">
    <thead>
      <tr>
        <th>SR No</th>
        <th>Role</th>
        <th>Action</th>
      </tr>
    </thead>
    <tbody>
      @foreach($roles as $key=>$role)
      <tr>
        <td>{{$key+1}}</td>
        <td>{{$role->role}}</td>
        <td>
            <a href="{{url('/role_edit')}}/{{$role->id}}" class="btn btn-success"><i class="fa fa-edit"></i></a>
            <a href="{{url('/role_delete')}}/{{$role->id}}" class="btn btn-danger delete_visitor_btn"><i class="fa fa-trash-o"></i></a>

        </td>
      </tr>
      @endforeach
    </tbody>
  </table>
</div>
@endsection
</body>
</html>
