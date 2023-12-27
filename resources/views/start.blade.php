<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
    <title>Document</title>
</head>
<body>
    <div class="container">
<h1 class=" text-primary mt-4">User Login</h1>
<div class="row ">
    <div class="col-sm-4">
<form action="user" method="POST">
    @csrf
    <label for="" class="mt-4" >UserName</label>
    <input type="text" class="form-control" name="uname" placeholder="Enter username">
   <br>
    <label for="" class="">Login</label>
    <input type="password" class="form-control" name="login" placeholder="Enter your password">
    <div class="mt-4 text-center">
    <input type="submit" name="submit" id="submit" value="Submit" class="btn btn-danger">
    </div>
</form>
    </div>

</div>
 </div>

</body>
</html>
