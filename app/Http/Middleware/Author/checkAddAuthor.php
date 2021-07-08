<?php

namespace App\Http\Middleware\Author;

use App\Author;
use Closure;

class checkAddAuthor
{
    /**
     * Handle an incoming request.
     *
     * @param \Illuminate\Http\Request $request
     * @param \Closure $next
     * @return mixed
     */
    public function handle($request, Closure $next)
    {
        $inputAuthorName = $request['name'];
        $author = Author::where('name', $inputAuthorName)->first();

        if ($author == null) {
            return $next($request);
        } else {
            $checkMassage = ' duplicated Author Name Not Allowed';
            return redirect('admin/author/add')->with('checkMassage', $checkMassage);
        }

    }

}
