<!DOCTYPE html>
<html>
<head>
    <title>Your Pending Tasks</title>
</head>
<body>
    <h2>Hi {{ auth()->user()->name }},</h2>
    <p>You have some pending tasks:</p>
    <ul>
        @foreach ($tasks as $task)
            <li>{{ $task->title }} - Due Date: {{ $task->due_date }}</li>
        @endforeach
    </ul>
    <p>Please review and complete them.</p>
</body>
</html>
