<?php

namespace App\Http\Middleware\Book;

use App\Book;
use Closure;

class checkEditBook
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle($request, Closure $next )
    {
        $id = $request->route('id');
        $inputBookTitle = $request['title'];
        $inputBookEditionNo = $request['editionNumber'];
        $inputBookyearOfRelease = $request['yearOfRelease'];
        $book = Book::where(function ($query) use ($id)
        {
            $query->Where('id','!=',$id);
        })
        ->where(function ($query) use ($inputBookTitle)
        {
            $query->Where('title' , $inputBookTitle);
        })
            ->where(function ($query) use ($inputBookEditionNo)
            {
                $query->orWhere('edition_No',$inputBookEditionNo);
            })
            ->where(function ($query) use ($inputBookyearOfRelease)
            {
                $query->orWhere('year_of_release',$inputBookyearOfRelease);
            })
            ->first();

        if($book == null || $book->edition_No != $inputBookEditionNo && $book->year_of_release !=$inputBookyearOfRelease ){
            return $next($request);
        }else{
            $checkMassage = ' duplicated Book Not allowed with the same Name , Edition number or year of release';
            return redirect('admin/book/edit/' . $id)->with('checkMassage',$checkMassage);
        }
    }
}
