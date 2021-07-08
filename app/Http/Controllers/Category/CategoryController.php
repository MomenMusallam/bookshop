<?php

namespace App\Http\Controllers\Category;


use App\Category;
use App\Http\Requests\CategoryRequest;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class CategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $paginate = 10;
        $Categories = Category::select('*')->paginate($paginate);
//        dd($Categorie);
        return view('admindashboard/category/allcategories')->with('categories', $Categories);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {

        return view('admindashboard/category/addcategory');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(CategoryRequest $request)
    {
        if($request->has('categoryTitle')){
            $cat = new Category();
            $cat->categorie_title = $request['categoryTitle'];
            $result = $cat->save();

            return redirect()->back()->with('result' , $result);


        }

    }

    /**
     * Display the specified resource.
     *
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /*
     * Show the form for editing the specified resource.
     *
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $category= Category::find($id);
        return view('admindashboard/category/editcategory')->with('category' , $category);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function update(CategoryRequest $request, $id)
    {
        $category = Category::find($id);
        $category->categorie_title = $request['categoryTitle'];
        $result =  $category->save();
        return redirect()->back()->with('result' , $result);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $result = Category::where('id', $id)->delete();
//        dd($result);
        return redirect()->back();
    }
}
