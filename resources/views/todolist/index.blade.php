<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ToDo List | Homepage</title>
</head>
<body>
    <h1>All your todoss</h1>
    <a href="/create">CREATE</a>
    <h3>
        <x-alert />
    </h3>
    @foreach($todos as $todo)
        <li>
            {{$todo->title}}
            <a href="{{asset('/' . $todo->id . '/edit')}}">Edit</a>
            <a href="{{asset('/' . $todo->id . '/completed')}}">Completed</a>
            <a href="{{asset('/' . $todo->id . '/delete')}}">Delete</a>
        </li>
    @endforeach
</body>
</html>