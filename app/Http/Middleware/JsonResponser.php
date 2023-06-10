<?php
namespace App\Http\Middleware;
use Closure;
use Illuminate\Http\Request;
class JsonResponser
{
    /**
     * Handle an incoming request.
     */
    public function handle(Request $request, Closure $next)
    {
        $request->headers->set('Accept', 'application/json');
        return $next($request);
    }
}
// Edit app/Http/Kernel.php
protected $middleware = [
    ...
    \App\Http\Middleware\JsonResponser::class
];
