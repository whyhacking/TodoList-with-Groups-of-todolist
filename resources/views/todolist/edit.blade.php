<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ToDo List | Edit</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">

</head>

<body class="p-0 m-0 border-0" style="text-align:center">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
<section class="vh-100" style="background-color: #3da2c3;">
<div class="container py-5 h-50 " style="width: 40%;">
<div class="row d-flex justify-content-center align-items-center h-100">
<div class="col col-xl-10">
<div class="card" style="border-radius: 15px;">
<div class="card-body p-5">
<h1 class="mb-3" style="text-align: center;">Edit ToDo List</h1>
    
        <x-alert />
    
    <form action="/modify" method="post" class="d-flex justify-content-center align-items-center mb-4">
        @csrf
        @method('patch')
        <div class="form-outline flex-fill">
        <input type="text" name="title" value= "{{$todo->title}}" class="form-control form-control-lg"/>
        <input style="display:none" type="number" name="id" value="{{$todo->id}}">
        </div>
        <input type="submit" value="Edit" class="btn btn-primary btn-lg ms-2"/>

    </form>
    <div class="d-grid gap-2 d-md-flex justify-content-md-end">
    <button type="button" class="btn btn-primary btn-sm ms-2" style="--bs-btn-padding-y: .25rem; --bs-btn-padding-x: .5rem; --bs-btn-font-size: .75rem;" onclick="window.location.href='{{asset('/index')}}';">Back to Todo List</button>
    </div>
    </div></div></div></div></div>
</section>
</body>
</html>