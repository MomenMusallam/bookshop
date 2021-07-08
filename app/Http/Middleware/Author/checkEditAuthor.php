<?php

namespace App\Http\Middleware\Author;

use App\Author;
use Closure;

class checkEditAuthor
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
        $inputAuthorName = $request['name'];
        $author = Author::where('id','!=', $id)->where('name', $inputAuthorName)->first();
//        dd($author);
        if ($author == null) {
            return $next($request);
        } else {
            $checkMassage = ' duplicated Author Name Not Allowed';
            return redirect('admin/author/edit/' . $id)->with('checkMassage', $checkMassage);
        }
    }
}
