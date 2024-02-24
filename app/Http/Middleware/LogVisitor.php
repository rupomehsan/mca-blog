<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class LogVisitor
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    static $model = \App\Modules\WebsiteSetting\VisitorCountModel::class;
    public function handle($request, Closure $next, ...$routes)
    {


        if ($request->route()->getName()) {
            self::$model::create(['ip' => $request->ip()]);
        }

        return $next($request);
    }
}
