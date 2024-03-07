<?php

namespace App\Http\Controllers;

use App\Models\Book;
use Illuminate\Contracts\View\View;

class BookController extends Controller {

    public function index(): View {
        $books = Book::paginate(5);
        return view('books.index', compact('books'));
//        return view('books.index', ['books' => Book::all()]);
    }
}
