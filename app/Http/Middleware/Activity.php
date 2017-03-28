<?php

namespace App\Http\Middleware;

use Closure;

class Activity{


    public function handle($request, Closure $nex){ //固定格式
        if(time() < strtotime('2015-06-05')){
            return redirect('activity0');
        }else{
            return $request;
        }
    }
}