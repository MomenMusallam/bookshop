<?php

namespace App\Http\Controllers\Book;

use App\Author;
use App\Book;
use App\Category;
use App\Http\Requests\BookRequest;
use App\Http\Requests\EditBookRequest;
use App\PublishingHouse;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Storage;

class BookController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $books= Book::with(['author' , 'publishingHouse' , 'category'])->get();
//                dd($books);
        return view('admindashboard/book/allbooks')->with('books', $books);
        }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $Authors = Author::select('*')->get();
        $publishinghouses = PublishingHouse::select('*')->get();
        $Categories = Category::select('*')->get();
        return view('admindashboard/book/addbook')->with('authors',$Authors)
            ->with('publishinghouses',$publishinghouses)
            ->with('categories', $Categories);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(BookRequest $request)
    {

        $image = $request->file('image');
        $path = 'images/';
        $name = time()+rand(1, 10000000000) . '.' .$image->getClientOriginalExtension();
        Storage::disk('local')->put($path.$name , file_get_contents($image));
        $status = Storage::disk('local')->exists($path.$name);
        if($status){
            $book = new Book();
            $book->title = $request['title'];
            $book->year_of_release = $request['yearOfRelease'];
            $book->edition_No = $request['editionNumber'];
            $book->author_id = $request['author'];
            $book->Phouse_id = $request['publishingHouse'];
            $book->category_id = $request['category'];
            $book->image = $path.$name;
            $result= $book->save();

            return redirect()->back()->with('result' , $result);
    }
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $book= Book::with(['author' , 'publishingHouse' , 'category'])->find($id);
        $img_link = Storage::url($book->image);
        $book->image = $img_link;

        $Authors = Author::select('*')->get();
        $publishinghouses = PublishingHouse::select('*')->get();
        $Categories = Category::select('*')->get();
        return view('admindashboard/book/editbook')->with(['book' =>$book ,'authors'=> $Authors ,'publishinghouses'=>$publishinghouses ,
            'categories'=> $Categories]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(EditBookRequest  $request, $id)
    {
        $book= Book::with(['author' , 'publishingHouse' , 'category'])->find($id);
        if($request->has('image')) {
            $image = $request->file('image');
            $path = 'images/';
            $name = time() + rand(1, 10000000000) . '.' . $image->getClientOriginalExtension();
            Storage::disk('local')->put($path . $name, file_get_contents($image));
            $status = Storage::disk('local')->exists($path . $name);
            if($status){
                $book->title = $request['title'];
                $book->year_of_release = $request['yearOfRelease'];
                $book->edition_No = $request['editionNumber'];
                $book->author_id = $request['author'];
                $book->Phouse_id = $request['publishingHouse'];
                $book->category_id = $request['category'];
                $book->image = $path.$name;
                $result= $book->save();
            }
        }else{
            $book->title = $request['title'];
            $book->year_of_release = $request['yearOfRelease'];
            $book->edition_No = $request['editionNumber'];
            $book->author_id = $request['author'];
            $book->Phouse_id = $request['publishingHouse'];
            $book->category_id = $request['category'];
            $result= $book->save();
        }
        if($result){
            return redirect()->back()->with('result' , $result);
    }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $result = Book::where('id', $id)->delete();
        return redirect()->back();
    }
}
