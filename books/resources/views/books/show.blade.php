<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>

<body>
    <h1>Single Book View</h1>
    <p>Title: {{ $book->title }}</p>
    <p>Author: {{ $book->author }}</p>
    <p>Release Date: {{ $book->release_date }}</p>

    <a href="/books">Back To All Books</a>
    
</body>

</html>
