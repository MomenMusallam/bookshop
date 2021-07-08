<?php

namespace App\Http\Middleware\Category;

use App\Category;
use Closure;

class checkAddCategory
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
        $inputCategoryTitle = $request['categoryTitle'];
        $category = Category::where('categorie_title', $inputCategoryTitle)->first();

        if ($category == null) {
            return $next($request);
        } else {
            $checkMassage = ' duplicated category Name Not Allowed';
            return redirect('admin/category/add')->with('checkMassage', $checkMassage);
        }

    }

}
