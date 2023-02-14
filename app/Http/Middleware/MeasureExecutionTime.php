<?php

namespace App\Http\Middleware;

use Closure;
use App\Models\RequestTime;

class MeasureExecutionTime
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  \Closure                 $next
     *
     * @return mixed
     */
    public function handle($request, Closure $next)
    {
        // Get the response
        $response = $next($request);

        // Calculate execution time>
        $executionTime = round((microtime(true) - LUMEN_START) * 1000);
        
        RequestTime::create([
            'route' => $request->getPathInfo(),
            'time' => $executionTime
        ]);

        $response->headers->set('X-Elapsed-Time', $executionTime);

        // Return the response
        return $response;
    }
}