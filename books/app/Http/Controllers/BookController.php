<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Book;

class BookController extends Controller
{
    public function index()
    {
        $books = Book::all();
        return view('books.index', ['allBooks' => $books]);
    }

    public function show($id)
    {
        $book = Book::find($id);
        return view('books.show', ['book' => $book]);
    }

    public function create()
    {
        return view('books.create');
    }

    public function store(Request $request)
    {
        //\Log::debug($request);
        $data = [
            'title' => $request->title,
            'author' => $request->author,
            'release_date' => $request->release_date
        ];

        Book::create($data);

        return redirect('/books');
    }

    public function edit($id){
        $book = Book::find($id);
        return view('books.edit', ['book' => $book]);
    }
    
    public function update(Request $request, $id){
       $book = Book::find($id);

        $data = [
            'title' => $request->title,
            'author' => $request->author,
            'release_date' => $request->release_date
        ];

        $book->update($data);
        return redirect('/books');
    }

    public function delete($id){
        $book = Book::find($id);
        if ($book) {
            $book->delete();
        return redirect('/books');
    }
}


}