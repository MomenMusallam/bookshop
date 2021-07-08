<?php

namespace App\Http\Controllers\PublishingHouse;

use App\Http\Requests\PublishingHouseRequest;
use App\PublishingHouse;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class PublishingHouseController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $publishinghouses = PublishingHouse::select('*')->get();
        return view('admindashboard/publishinghouse/allpublishinghouses')->with('publishinghouses',$publishinghouses);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admindashboard/publishinghouse/addpublishinghouse');

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(PublishingHouseRequest $request)
    {
        $publishinghouse = new PublishingHouse();
        $publishinghouse->Phousename = $request['Phousename'];
        $result = $publishinghouse->save();
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
        $publishinghouse = PublishingHouse::find($id);
        return view('admindashboard/publishinghouse/editpublishinghouse')->with('publishinghouse',$publishinghouse);

    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(PublishingHouseRequest $request, $id)
    {
        $publishinghouse = PublishingHouse::find($id);
        $publishinghouse->Phousename = $request['Phousename'];
        $result= $publishinghouse->save();
        return redirect()->back()->with('result' , $result);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $result = PublishingHouse::where('id', $id)->delete();
        return redirect()->back();
    }
}
