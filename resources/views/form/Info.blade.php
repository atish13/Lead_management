<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>form info</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>
<body>
    <div class="container  mt-5">
        <div class="bg-success-subtle p-5 m-3">
        @if(Session::has('success'))
        {
            {{Session::get('success')}};
        }
        @endif
    </div>  
        <div class=" text-end m-3">
        <a href="{{route('profile.edit')}}"  >
            <button class="btn btn-primary">Back</button>
        </a>
        <a href="{{route('form.create')}}"  >
            <button class="btn btn-primary">Add</button>
        </a>
    </div>
       
    <table class="table">
    <thead class="table-primary">
       <th>Name<th>
       <th>email<th>
       <th>Phone number<th>
        <th>Action</th>
    </thead>
    <tbody>
        @foreach($form as $data)
        <tr>
       <td>{{$data->name}}<td>
        <td>{{$data->email}}<td>
        <td>{{$data->phone_no}}<td>
        <td><a href="{{url('/Form/delete/')}}/{{$data->id}}">
        <button class="btn btn-danger">Delete</button>
        </a>
        <a href="{{url('/Form/edit/')}}/{{$data->id}}">
        <button class="btn btn-success">Edit</button>

    </td>
    </tr>
        @endforeach
    </tbody>
    </table>
    </div>
</body>


<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>



</script>
</html>