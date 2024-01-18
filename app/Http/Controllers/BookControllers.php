<?php

namespace App\Http\Controllers;

use App\Models\Book;
use App\Models\Category;
use Illuminate\Http\Request;

class BookControllers extends Controller
{
    // public function index(Request $request)
    public function index()
    {
        // $request->session()->flush();
        // dd('halaman buku');
        $books = Book::all();
        return view('book', ['books' => $books]);
    }

    public function add()
    {
        $categories = Category::all();
        return view('book-add', ['categories' => $categories]);
    }

    public function store(Request $request)
    {
        // dd($request->all());

        $validated = $request->validate([
            'book_code' => 'required|unique:books|max:255',
            'title' => 'required|max:255',
        ]);

        $newName = '';
        if ($request->file('image')) {
            $extension = $request->file('image')->getClientOriginalExtension();
            $newName = $request->title . '-' . now()->timestamp . '-' . $extension;
            $request->file('image')->storeAs('cover', $newName);
        }

        $request['cover'] = $newName;
        $book = Book::create($request->all());
        $book->categories()->sync($request->categories);
        return redirect('books')->with('status', 'Book Added Successfully');
    }

    public function edit($slug)
    {
        $book = Book::where('slug', $slug)->first();
        $categories = Category::all();
        return view('book-edit', ['book' => $book, 'categories' => $categories]);
    }

    public function update(Request $request, $slug)
    {
        // $newName = '';
        if ($request->file('image')) {
            $extension = $request->file('image')->getClientOriginalExtension();
            $newName = $request->title . '-' . now()->timestamp . '-' . $extension;
            $request->file('image')->storeAs('cover', $newName);
            $request['cover'] = $newName;
        }

        $book = Book::where('slug', $slug)->first();
        $book->update($request->all());

        if ($request->categories) {
            $book->categories()->sync($request->categories);
        }

        return redirect('books')->with('status', 'Book Updated Successfully');
    }

    public function delete($slug)
    {
        $book = Book::where('slug', $slug)->first();
        return view('book-delete', ['book' => $book]);
    }

    public function destroy($slug)
    {
        $book = Book::where('slug', $slug)->first();
        $book->delete();
        return  redirect('books')->with('status', 'Book Deleted Successfully');
    }

    public function deleted()
    {
        $deletedBook = Book::onlyTrashed()->get();
        // dd($deletedBook);
        return view('book-deleted-list', ['deletedBook' => $deletedBook]);
    }

    public function restore($slug)
    {
        $book = Book::withTrashed()->where('slug', $slug)->first();
        // dd($category);
        $book->restore();
        return  redirect('books')->with('status', 'Book Restored Successfully');
    }
}
