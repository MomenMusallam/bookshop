<?php

namespace App\Http\Controllers;

use App\Author;
use App\Book;
use App\Category;
use App\PublishingHouse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class MainPageController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $Books = Book::with(['author', 'publishingHouse', 'category'])->select('*')->get();
        $Authors = Author::select('*')->get();
        $publishinghouses = PublishingHouse::select('*')->get();
        $Categories = Category::select('*')->get();

        foreach ($Books as $book) {
            $img_link = Storage::url($book->image);
            $book->image = $img_link;
        }

        return view('bookszone/index')->with(['books' => $Books, 'authors' => $Authors, 'publishinghouses' => $publishinghouses,
            'categories' => $Categories]);
    }


    public function contact()
    {
        $Authors = Author::select('*')->get();
        $publishinghouses = PublishingHouse::select('*')->get();
        $Categories = Category::select('*')->get();

        return view('bookszone/contact')->with(['authors' => $Authors, 'publishinghouses' => $publishinghouses,
            'categories' => $Categories]);
        return view('bookszone/contact');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */


    /**
     * Display the specified resource.
     *
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $book = Book::with(['author', 'publishingHouse', 'category'])->find($id);
        $img_link = Storage::url($book->image);
        $book->image = $img_link;

        $Authors = Author::select('*')->get();
        $publishinghouses = PublishingHouse::select('*')->get();
        $Categories = Category::select('*')->get();
        return view('bookszone/singlebook')->with(['book' => $book, 'authors' => $Authors, 'publishinghouses' => $publishinghouses,
            'categories' => $Categories]);
    }

    public function showspecificBooks($type, $id)
    {
        if ($type == 'category') {
            $Books = Book::where('category_id', $id)->get();
        } elseif ($type == 'author') {
            $Books = Book::where('author_id', $id)->get();
        } elseif ($type == 'publishinghouse') {
            $Books = Book::where('Phouse_id', $id)->get();
        }
//dd($Books);
        $Authors = Author::select('*')->get();
        $publishinghouses = PublishingHouse::select('*')->get();
        $Categories = Category::select('*')->get();

        foreach ($Books as $book) {
            $img_link = Storage::url($book->image);
            $book->image = $img_link;
        }
        return view('bookszone/view-specific-books')->with(['books' => $Books, 'authors' => $Authors, 'publishinghouses' => $publishinghouses,
            'categories' => $Categories]);
    }

    public function search(Request $request)
    {
        $searchingWord = $request->query('serach');

       $Books =  Book::where('title', 'LIKE', '%' .$searchingWord. '%')
        ->orWhereHas('author', function($q) use ($searchingWord) {
            return $q->where('name', 'LIKE', '%' . $searchingWord . '%');
        })
            ->orWhereHas('publishingHouse', function($q) use ($searchingWord) {
                return $q->where('Phousename', 'LIKE', '%'. $searchingWord . '%');
            })->orWhereHas('category', function($q) use ($searchingWord) {
               return $q->where('categorie_title', 'LIKE', '%'. $searchingWord . '%');
           })->get();

        $Authors = Author::select('*')->get();
        $publishinghouses = PublishingHouse::select('*')->get();
        $Categories = Category::select('*')->get();

        foreach ($Books as $book) {
            $img_link = Storage::url($book->image);
            $book->image = $img_link;
        }
        return view('bookszone/view-specific-books')->with(['books' => $Books, 'authors' => $Authors, 'publishinghouses' => $publishinghouses,
            'categories' => $Categories]);
    }
}
