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
        <li>
            <a href="/tasks/{{ $task->id }}">
            	{{ $task->body }}
            </a>
        </li>
        @endforeach
    </ul>
</body>
</html>