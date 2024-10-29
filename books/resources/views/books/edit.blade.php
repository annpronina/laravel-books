<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>

<body>
    <h1>Edit book with id: {{ $book->id }}</h1>
    <form action="/books/{{ $book->id }}/update" method="post">

        @csrf
        @method('PUT')

        <label for="title">Title: </label>
        <input type="text" id="title" name="title" value="{{ $book->title }}">
        <br>

        <br>
        <label for="author">Author:</label>
        <input type="text" name="author" id="author" value="{{ $book->author }}">
        <br>

        <br>
        <label for="release_date">Release Date:</label>
        <input type="text" id="release_date" name="release_date" value="{{ $book->release_date }}">
        <br>

        <br>
        <input type="submit" value="Submit Changes">
    </form>
</body>

</html>
