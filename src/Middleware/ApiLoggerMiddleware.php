<?php

namespace Khangnhddev\ApiLoggerLaravel\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;

class ApiLoggerMiddleware
{
    public function handle(Request $request, Closure $next)
    {
        // // Log the incoming request details
        // Log::info('API Request', [
        //     'url' => $request->fullUrl(),
        //     'method' => $request->method(),
        //     'input' => $request->all(),
        // ]);

        $response = $next($request);

        // // Log the response details
        // Log::info('API Response', [
        //     'status' => $response->status(),
        //     'content' => $response->getContent(),
        // ]);
        
        Log::channel(config('api-logger.channel'))->info('API Request', [
            'url' => $request->fullUrl(),
            'method' => $request->method(),
            'input' => $request->all(),
        ]);

        return $response;
    }
}