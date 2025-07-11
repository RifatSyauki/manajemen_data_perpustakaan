<?php

namespace App\Http\Controllers;

use App\Models\Book;
use Illuminate\View\View;
use Illuminate\Http\Request;
use Illuminate\Http\RedirectResponse;

class BookController extends Controller
{
    public function index(Request $request): view
    {
        $query = Book::query();

        if($request->has('search') && $request->search != '') {
            $search = $request->search;
            $query->where(function ($q) use ($search) {
                $q->where('title', 'like', '%'.$search.'%')
                  ->orWhere('author', 'like', '%'.$search.'%')
                  ->orWhere('isbn', 'like', '%'.$search.'%');
            });
        }

        $books = $query->paginate(10);
        return view('books.index', compact('books'));
    }

    public function show($id): view
    {
        $book = Book::findOrFail($id);

        return view('books.show', compact('book'));
    }
}
