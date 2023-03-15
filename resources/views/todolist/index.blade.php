<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ToDo List | Homepage</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
  
</head>
<body class="p-0 m-0 border-0">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
<section class="vh-100" style="background-color: #3da2c3;">
  <div class="container py-5 h-50 " style="width: 40%;">
    <div class="row d-flex justify-content-center align-items-center h-100">
      <div class="col col-xl-10">

        <div class="card" style="border-radius: 15px;">
          <div class="card-body p-5">

    <h1 class="mb-3" style="text-align: center;">Todo List</h1>
   
    
        <x-alert />
    <form class="d-flex justify-content-center align-items-center mb-4" action="/update" method="post">
        @csrf
        <div class="form-outline flex-fill">
        <input type="text" name="title" class="form-control form-control-lg"/>
        </div>
        <input type="submit" value="Create" class="btn btn-primary btn-lg ms-2"/>
        
       
    </form>
  
  
    @foreach($todos as $todo)
        <ul class="list-group mb-0">
            
        <li class="list-group-item d-flex justify-content-between align-items-center border-start-0 border-top-0 border-end-0 border-bottom rounded-0 mb-2">
        <div class="d-flex align-items-center">

        
            @if($todo->completed)
                <button type="button" class="btn btn-danger" style="margin-right: 5px;" onclick="window.location.href='{{asset('/' . $todo->id . '/completed')}}';">☒</button>
                <span style="text-decoration:line-through">{{$todo->title}}</span>
            @else
                <button type="button" class="btn btn-success" style="margin-right: 4px;" onclick="window.location.href='{{asset('/' . $todo->id . '/completed')}}';">☑</button>
                {{$todo->title}}
            @endif
            <a style="margin-left: 4px;" href="{{asset('/' . $todo->id . '/edit')}}">Edit</a>

            
            
           
           </div>
             
           <button type="button" class="btn-close" aria-label="Close" onclick="window.location.href='{{asset('/' . $todo->id . '/delete')}}';"></button>
           
        </li>

        </ul>
    @endforeach



</body>
</html>