<?php

namespace App\Http\Middleware;

use Closure;

class HelloMiddleware
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
        $data = [
            ['name'=>'taro', 'mail'=>'m@one'],
            ['name'=>'hanako', 'mail'=>'m@two'],
            ['name'=>'sachiko', 'mail'=>'m@san'],
        ];
        $request->merge(['data'=>$data]);
        return $next($request);
    }
}
