<?php

namespace App\Http\Middleware\Book;

use App\Book;
use App\Http\Requests\BookRequest;
use Closure;

class checkAddBook
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle( $request, Closure $next)
    {
        $inputBookTitle = $request['title'];
        $inputBookEditionNo = $request['editionNumber'];
        $inputBookyearOfRelease = $request['yearOfRelease'];

        $book = Book::where(function ($query) use ($inputBookTitle)
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

             if($book == null || $book->edition_No != $inputBookEditionNo &&
                 $book->year_of_release !=$inputBookyearOfRelease ){
                 return $next($request);
             }else{
                 $checkMassage = ' duplicated Book Not allowed with the same Edition number';
                     return redirect('admin/book/add')->with('checkMassage',$checkMassage);
                 }
    }
}
