<?php

namespace App\Http\Controllers\Author;

use App\Author;
use App\Http\Middleware\Author\checkEditAuthor;
use App\Http\Requests\AuthorRequest;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class AuthorController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $Authors = Author::select('*')->get();
//        dd($Authors);
        return view('admindashboard/author/allauthors')->with('authors',$Authors);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {

        return view('admindashboard/author/addauthor');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(AuthorRequest $request)
    {
        $author = new Author();
        $author->name = $request['name'];
        $result =  $author->save();
        return redirect()->back()->with('result' , $result);

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $author= Author::find($id);
        return view('admindashboard/author/editauthor')->with('author' , $author);

        }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(AuthorRequest $request, $id)
    {
        $auhtor= Author::find($id);
        $auhtor->name = $request['name'];
        $result= $auhtor->save();
        return redirect()->back()->with('result' , $result);    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $result = Author::where('id', $id)->delete();
        return redirect()->back();
    }
}
