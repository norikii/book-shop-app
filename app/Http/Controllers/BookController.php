<?php

namespace App\Http\Controllers;

use App\Book;
use App\Traits\UploadTrait;
use Illuminate\Http\Request;
use Intervention\Image\Facades\Image;

class BookController extends Controller
{
    use UploadTrait;


    public function index()
    {
        $books = Book::get();

        return view('dashboard.book_views.index', [
           'books' => $books
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $book = new Book();

        return view('dashboard.book_views.create_product', compact('book'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        $book = Book::create($this->validateRequest());
        $emptyBook = new Book();
        $this->storeImage($book);

        return redirect('dashboard');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Comment  $book
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Http\Response|\Illuminate\View\View
     */
    public function show($id)
    {
        $book = Book::where('id', $id)->firstOrFail();

        return view('dashboard.book_views.show', compact('book'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Comment  $book
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $book = Book::where('id', $id)->firstOrFail();

        return view('dashboard.book_views.edit_product', compact('book'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function update($id)
    {
        $book = Book::where('id', $id)->firstOrFail();
        $book->update($this->validateRequest());

        $this->storeImage($book);

        return redirect('dashboard');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Comment  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $book = Book::where('id', $id)->firstOrFail();
        $book->delete();

        return redirect('dashboard');
    }


    private function validateRequest()
    {
        return request()->validate([
            'title' => 'required',
            'author' => 'required',
            'isbn' => 'required',
            'price' => 'required|numeric',
            'qty' => 'required|numeric',
            'cover_img' => 'sometimes|file|image|max:2048'
        ]);
    }

    private function storeImage($book) {
        if (request()->has('cover_img')) {
            $book->update([
               'cover_img' => request()->cover_img->store('uploads', 'public')
            ]);
        }
    }
}
