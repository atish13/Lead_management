<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">

</head>
<body>
    <div class="container">
        <div class="bg-primary-subtle p-4">
        <h2>All Leads</h2>

        </div>
        <div class="d-flex justify-content-end mt-3">
        
        
         <a href="{{route('register')}}">
        <button class=" btn btn-success">Home</button></a>
        @if(auth()->user()->hasRole('Admin'))

         <a href="{{route('lead.form')}}">
        <button class=" btn btn-success">add leads</button></a>
        @endif
</div>

        <table class="table">
        <thead>
    <tr>
      <th scope="col">title</th>
      <th scope="col">email</th>
      <th scope="col">contact</th>
    </tr>
  </thead>
        @foreach($lead as $data)
        <tr>
            <td>{{$data->title}}</td>
            <td>{{$data->email}}</td>
            <td>{{$data->contact}}</td>
        </tr>
        @endforeach
  <tbody>
</tbody>
        </table>
    </div>
</body>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>

</html>