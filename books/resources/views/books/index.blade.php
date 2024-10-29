<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>

<body>
    <h1>All Books</h1>
    <a href="/books/create">Create New Book<br></a>
    <ul>
        @foreach ($allBooks as $book)
            <li>
                Title: {{ $book->title }} <br>
                Author: {{ $book->author }} <br>
                Release Date: {{ $book->release_date }} <br>
                <a href="/books/{{ $book->id }}">Show</a>
                <a href="/books/{{ $book->id }}/edit">Edit</a>
                <form action="/books/{{ $book->id }}/delete" method="post">
                    @csrf
                    @method('DELETE')
                   <button type="submit">Delete Book</button>
                </form>
            </li>
        @endforeach
    </ul>
</body>

</html>
