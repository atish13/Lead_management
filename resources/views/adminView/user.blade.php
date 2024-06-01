<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">

</head>
<body >

<div class="container">
<div class="bg-primary-subtle p-3">
    <h2>Users Details</h2>
</div>
<div class="d-flex justify-content-end mt-3">
<a href="{{route('user.create')}}">
<button class=" btn btn-success">Add</button></a>

<a href="{{route('register')}}">
<button class=" btn btn-success">Home</button></a>
</div>

</a>
<table class="table">
<thead class="bg-success">
    <tr>
      <th scope="col">#</th>
      <th scope="col">user</th>
      <th scope="col">email</th>
      <th scope="col">password</th>
      <th scope="col">Action</th>
    </tr>
  </thead>
  <tbody>
    @foreach($user as $data)
    <tr>
        <td>{{$data->id}}</td>
        <td>{{$data->name}}</td>
        <td>{{$data->email}}</td>
        <td>{{$data->password}}</td>
        <td>
        <td><a href="{{url('/user/delete/')}}/{{$data->id}}">
        <button class="btn btn-danger btn-sm">Delete</button>
        <td><a href="{{url('/userAdd/')}}/{{$data->id}}">
        <button class="btn btn-warning btn-sm">Edit</button>
        
    </tr>
    @endforeach
</tbody>
</table>

</div>
<!-- {{print_r($user)}};   -->


</body>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>

</html>