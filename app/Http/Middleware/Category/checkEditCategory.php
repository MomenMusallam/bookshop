<?php

namespace App\Http\Middleware\Category;

use App\Category;
use Closure;

class checkEditCategory
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle($request, Closure $next)
    {
        $id = $request->route('id');
        $inputCategoryTitle = $request['categoryTitle'];
        $category = Category::where('id','!=', $id)->where('categorie_title', $inputCategoryTitle)->first();
        if ($category == null) {
            return $next($request);
        } else {
            $checkMassage = ' duplicated category Name Not Allowed';
            return redirect('admin/category/edit/' . $id)->with('checkMassage', $checkMassage);
        }    }
}
