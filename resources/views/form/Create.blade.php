<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>form</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>
<body>
    <div class="container w-50 border border-dark p-4 mt-5">
        <form action="{{$url}}" method="post">
            @csrf
            <h1 class="display-5 text-center"><u>{{$title}}</u></h1>

            <div class="row  mt-4">
                <div class="col-4">
             <label for="name" class="form-label">Name:</label>
                </div>
                <div class="col-8">
                    <input type="text" class="  form-control" placeholder="xyz" id="name" name="name" required/>
                    
                </div>
            </div>
            <div class="row mt-4">
                <div class="col-4">
             <label for="email" class="form-label">email:</label>
                </div>
                <div class="col-8">
                    <input type="email" class=" form-control" placeholder="xyz@gmail.com" id="mail" name="email" 
                     required/>
                  
                </div>
            </div>
        
            <div class="row mt-4">
                <div class="col-4">
             <label for="Phone no" class="form-label">Phone no:</label>
                </div>
                <div class="col-8">
                    <input type="text" class=" form-control" placeholder="+91" id="contact" name="phone_no" required/>
                    
                </div>
            </div>
           
            <div class="row mt-4">
                <div class="col-4">
             <label for="Phone no" class="form-label">title:</label>
                </div>
                <div class="col-8">
                    <input type="text" class=" form-control"  name="title" required/>
                    
                </div>
            </div>
            <div class="row mt-4 d-flex justify-content-center">
                <div class="col-4">
                    <input type="submit" value="submit" class="btn btn-primary">
                </div>
            </div>
        </form>
    </div>
</body>


<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>

<!-- <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script> -->

   
   <!-- <script src="./validation.js"></script> -->

</script>
</html>