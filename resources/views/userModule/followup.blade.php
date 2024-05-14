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
           <div class="bg-primary-subtle p-4 d-flex justify-content-center">
                <h2>followup Table</h2>
            </div>
            <div class="d-flex justify-content-end mt-3">
            <div>
        <a href="{{route('register')}}">

        <button class=" btn btn-success">Home</button></a>
        </div>
        </div>
            <table class="table">
                <thead>
                    <th>lead id</th>
                    <th>status</th>
                    <th>user id</th>
                </thead>
                <tbody>
            @foreach($lead as $data)
        <tr>
            <td>{{$data->lead_id}}</td>
            <td>
                 <button class="btn btn-warning">
                {{$data->status}}
            </button>
            </td>
            <td>{{$data->user_id}}</td>
            
        </tr>
        @endforeach
                </tbody>
            </table>
        </div>    
</body>
</html>