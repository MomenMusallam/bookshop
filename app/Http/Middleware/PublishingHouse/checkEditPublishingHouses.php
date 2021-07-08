<?php

namespace App\Http\Middleware\PublishingHouse;

use App\PublishingHouse;
use Closure;

class checkEditPublishingHouses
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
        $inputPublishingHouseName = $request['Phousename'];
        $publishingHouse = PublishingHouse::where('id','!=', $id)->where('Phousename', $inputPublishingHouseName)->first();

        if ($publishingHouse == null) {
            return $next($request);
        } else {
            $checkMassage = ' duplicated Publishing Houses Name Not Allowed';
            return redirect('admin/publishinghouse/add')->with('checkMassage', $checkMassage);
        }
    }
}
