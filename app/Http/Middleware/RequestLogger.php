<?php

namespace App\Http\Middleware;

use App\Models\RequestLog;
use Carbon\Carbon;
use Closure;

class RequestLogger
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle(\Illuminate\Http\Request $request, Closure $next)
    {
        $response = $next($request);

        if ($request->routeIs('analytics.dashboard')) {
            return $response;
        }

        $requestTime = Carbon::createFromTimestamp($_SERVER['REQUEST_TIME']);
        $request = RequestLog::create([
            'url' => $request->getPathInfo(),
            'method' => $request->method(),
            'response_time' => time() - $requestTime->timestamp,
            'day' => date('l', $requestTime->timestamp),
            'hour' => $requestTime->hour,
        ]);

        return $response;
    }
}
