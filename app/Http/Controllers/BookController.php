<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Book;

class BookController extends Controller
{
    public function index()
    {
        $books = Book::all();

        return view("books.index", compact("books"));
    }

    public function store(Request $request)
    {
        $request->validate([
            'nombre' => 'required|string|max:255',
            'fecha' => 'required|date',
            'edicion' => 'required|string|max:255',
            'precio' => 'required|numeric|min:0',
        ]);

        $book = new Book();
        $book->name = $request->nombre;
        $book->year = $request->fecha;
        $book->price = $request->precio;
        $book->edition = $request->edicion;
        $book->save();

        return redirect()->route('books.index');
    }

    public function edit($id)
    {
        $book = Book::findOrFail($id);

        return view("books.edit", compact("book"));
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'nombre' => 'required|string|max:255',
            'fecha' => 'required|date',
            'edicion' => 'required|string|max:255',
            'precio' => 'required|numeric|min:0',
        ]);

        $book = Book::findOrFail($id);
        $book->name = $request->nombre;
        $book->year = $request->fecha;
        $book->price = $request->precio;
        $book->edition = $request->edicion;
        $book->save();

        return redirect()->route('books.index');
    }

    public function destroy($id)
    {
        $book = Book::findOrFail($id);
        $book->delete();

        return redirect()->route('books.index');
    }
}