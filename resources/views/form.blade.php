<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    
</head>
<body>
    <form action="{{url('/')}}/leads" method="post">
        @csrf
    <div class="container w-50">
        <h1 class="text-center">Lead</h1>
        <div class="form-group">
            <label for="">Title</label>
            <input type="text"  name="title" id="" class="form-control" placeholder=""  aria-describedby="helpId">
        </div>
        <div class="form-group">
            <label for="">Email</label>
            <input type="email"  name="email" id="" class="form-control" placeholder=""  aria-describedby="helpId">
        </div>
        <div class="form-group">
            <label for="">Contact No</label>
            <input type="text"  name="contact" id="" class="form-control" placeholder=""  aria-describedby="helpId">
        </div>
        <div class="d-flex justify-content-center m-3">
        <button class="btn btn-primary">
            Submit
        </button>
        </div>
    </div>
    </form>
</body>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</html>