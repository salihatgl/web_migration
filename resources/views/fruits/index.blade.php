<!DOCTYPE html>
<html>
<head>
    <title>Fruit List</title>
</head>
<body>
    <h1>Fruit List</h1>
    <ul>
        @foreach($fruits as $fruit)
            <li>{{ $fruit }}</li>
        @endforeach
    </ul>
</body>
</html>
