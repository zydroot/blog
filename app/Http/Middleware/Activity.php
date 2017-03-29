<?php

namespace App\Http\Middleware;

use Closure;

class Activity{

    //逻辑在执行前，就是中间件的前置操作
    /*public function handle($request, Closure $next){ //固定格式
        if(time() < strtotime('2017-03-05')){
            return redirect('activity0');
        }else{
            return $next($request);
        }
    }*/

    public function handle($request, Closure $next){ //固定格式
        $response = $next($request);
        echo ($response);
        //逻辑
        echo '我是后置操作';

    }


}