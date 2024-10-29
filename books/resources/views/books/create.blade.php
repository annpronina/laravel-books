<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>

<body>
    <h1>Create New Book</h1>
    <form action="/books" method="post">
        @csrf
        <label for="title">Title:</label>
        <input type="text" id="title" name="title">
        <br>

        <br>
        <label for="author">Author: </label>
        <input type="text" id="author" name="author">
        <br>

        <br>
        <label for="release_date">Release Date:</label>
        <input type="text" id="release_date" name="release_date">
        <br>

        <br>
        <input type="submit" value="Create New Book">
    </form>
</body>

</html>
