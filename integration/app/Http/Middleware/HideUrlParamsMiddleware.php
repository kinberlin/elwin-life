<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class HideUrlParamsMiddleware
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle($request, Closure $next)
    {
        // Bind the route parameters to model instances
        $this->bindRouteParameters($request);

        // Continue processing the request
        return $next($request);
    }

    private function bindRouteParameters($request)
    {
        // Get the route instance
        $route = $request->route();

        // Get the route parameters
        $parameters = $route->parameters();

        // Bind the parameters to model instances
        foreach ($parameters as $key => $value) {
            if (is_string($value)) {
                $model = $route->parameter($key);

                if ($model) {
                    $route->setParameter($key, $model->id);
                }
            }
        }
    }
}