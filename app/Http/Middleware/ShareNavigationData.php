<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use App\Models\Category;
use App\Models\Occation;
use Illuminate\Support\Facades\View;
use Symfony\Component\HttpFoundation\Response;

class ShareNavigationData
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next): Response
    {
        // Share categories and occasions with all frontend views
        $categories = Category::get();
        $occasions = Occation::with('category')->get();

        View::share('categories', $categories);
        View::share('occasions', $occasions);

        return $next($request);
    }
}
