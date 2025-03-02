<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<h1>Table de multiplication de {{ $nombre }}</h1>
    <ul>
        @foreach ($table as $line)
            <li>{{ $line }}</li>
        @endforeach
    </ul>    
</body>
</html>