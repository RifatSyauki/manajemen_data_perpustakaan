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
        return view('book.index', compact('books'));
    }

    public function store(Request $request): RedirectResponse
    {
        Book::create([
            'title' => $request->title,
            'author' => $request->author,
            'isbn' => $request->isbn,
            'publisher' => $request->publisher,
            'publication' => $request->publication,
            'edition' => $request->edition,
            'shelf' => $request->shelf,
            'availability' => $request->availability
        ]);

        return redirect()->route('book.index');
    }

    public function edit($id): view
    {
        $book = Book::findOrFail($id);

        return view('book.edit', compact('book'));
    }

    public function update(Request $request, $id): RedirectResponse
    {
        $book = Book::findOrFail($id);

        $book->update([
            'title' => $request->title,
            'author' => $request->author,
            'isbn' => $request->isbn,
            'publisher' => $request->publisher,
            'publication' => $request->publication,
            'edition' => $request->edition,
            'shelf' => $request->shelf,
            'availability' => $request->availability
        ]);

        return redirect()->route('book.index');
    }

    public function destroy($id): RedirectResponse
    {
        $book = Book::findOrFail($id);

        $book->delete();

        return redirect()->route('book.index');
    }
}
