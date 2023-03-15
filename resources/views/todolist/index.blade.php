<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ToDo List | Homepage</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.3/font/bootstrap-icons.css">
</head>
<body class="p-0 m-0 border-0">
<script src="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.3/font/bootstrap-icons.css"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
<section class="vh-100" style="background-color: #3da2c3;">
  <div class="container py-5 h-50 " style="width: 40%;">
    <div class="row d-flex justify-content-center align-items-center h-100">
      <div class="col col-xl-10">

        <div class="card" style="border-radius: 15px;">
          <div class="card-body p-5">

    <h1 class="mb-3" style="text-align: center;">Group of Todo List</h1>
   
    
        <x-alert />
    <form class="d-flex justify-content-center align-items-center mb-4" action="/update" method="post">
        @csrf
        <div class="form-outline flex-fill">
        <input type="text" name="title" class="form-control form-control-lg"/>

        <input style="display:none" type="number" name="group" value="{{$todos->max('group')}}">
        
        </div>
        <input type="submit" value="Create" class="btn btn-primary btn-lg ms-2"/>
        
       
    </form>
  
  @for($i=1;$i <= count($todos);$i++)
    @foreach ($todos as $todo)
    
    @if ($todo->group == $i)
        

        <div class="list-group mb-0">
          <li class="list-group-item d-flex border-start-0 border-top-0 border-end-0 border-bottom rounded-0 mb-2">  
        
        <div class="d-flex ">
        
        </div>
        
            @if($todo->completed)
                <button type="button" class="btn btn-danger" style="margin-right: 5px;" onclick="window.location.href='{{asset('/' . $todo->id . '/completed')}}';">✖</button>
                <span style="text-decoration:line-through">
                   
            <a class="list-group-item list-group-item-action border-start-0 border-top-0 border-end-0 border-bottom-0" href="{{asset('/' . $todo->group . '/grouplist')}}">{{$todo->title}}</a>
            
                </span>
            @else
                <button type="button" class="btn btn-success" style="margin-right: 4px;" onclick="window.location.href='{{asset('/' . $todo->id . '/completed')}}';">☑</button>
                
            <a class="list-group-item list-group-item-action border-start-0 border-top-0 border-end-0 border-bottom-0" href="{{asset('/' . $todo->group . '/grouplist')}}">{{$todo->title}}</a>
                
            @endif
           
            
            
            <a class="link-dark fs-4 position-static  "  href="{{asset('/' . $todo->id . '/edit')}}"><i class="bi bi-pencil-square" ></i>
            </a>
            <button style="float: right;margin-left: 10px;margin-top: 5px; " type="button" class="btn-close position-static" aria-label="Close" onclick="window.location.href='{{asset('/' . $todo->id . '/delete')}}';" ></button>
           
</li>
</div>
@break
    @endif
        
    
@endforeach
    
    @endfor
   
    



</body>
</html>