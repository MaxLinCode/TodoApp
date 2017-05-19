<!DOCTYPE html>
<html>
<head>
    <meta charset='utf-8'>
    <title>Title</title>
</head>
<body>
    <h1>Hello World</h1>
    <ul>
        @foreach($tasks as $task)
            <li>{{ $task->body }}</li>
        @endforeach
    </ul>
</body>
</html>