<!DOCTYPE html>
<html>
<head><title>Daftar Author</title></head>
<body>
    <h1>Daftar Author</h1>
    <ul>
        @foreach($authors as $author)
            <li>{{ $author->name }} - {{ $author->email }}</li>
        @endforeach
    </ul>
</body>
</html>