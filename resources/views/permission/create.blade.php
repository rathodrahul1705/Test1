@extends('layouts.app')
<!DOCTYPE html>
<html lang="en">
<head>
  <title>Bootstrap Example</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
</head>
<body>
  @section('content')

<div class="container">
  <h2>permission create</h2>
  <form class="form-inline" action="{{url('permission_Save')}}" method="post">
    {{csrf_field()}}
    <div class="form-group">
      <label for="email">permission:</label>
      <input type="text" class="form-control"  placeholder="Enter permission" name="permission">
    </div>
    <button style="margin-left: 20px;" type="submit" class="btn btn-default">Submit</button>
  </form>
</div>
</body>
@endsection
</html>
