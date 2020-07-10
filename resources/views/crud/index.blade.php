<!DOCTYPE html>
<html lang="en">
<head>
  <title>Bootstrap Example</title>
  <meta charset="utf-8">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
</head>
<body>

<div class="container">
  <h2>Contact Details</h2>
  <a class="btn btn-success" href="{{url('/form')}}">Add Form</a>
  <br>
  <br>
  <table class="table table-bordered">
    <thead>
      <tr>
        <th>Image</th>
        <th>Firstname</th>
        <th>Lastname</th>
        <th>Email</th>
        <th>Contact</th>
        <th>Action</th>
      </tr>
    </thead>
    <tbody>
      @foreach($data as $contact_details)
      <tr>
        <td>

          <img style=" vertical-align: middle; width: 50px;height:50px;" src="/image/{{$contact_details->image}}"  height="" width="">

        </td>
        <td>{{$contact_details->first_name}}</td>
        <td>{{$contact_details->last_name}}</td>
        <td>{{$contact_details->email}}</td>
        <td>{{$contact_details->phone}}</td>
        <td>
            
            <a href="{{url('/edit_form')}}/{{$contact_details->id}}" class="btn btn-success"><i class="fa fa-edit"></i></a>
            <a href="{{url('/delete_contact')}}/{{$contact_details->id}}" class="btn btn-danger delete_visitor_btn"><i class="fa fa-trash-o"></i></a>

        </td>
      </tr>
      @endforeach
    </tbody>
  </table>
</div>
</body>
</html>
