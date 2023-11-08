<?php

namespace App\Http\Middleware;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Auth\Middleware\Authenticate as Middleware;

class Authenticate extends Middleware
{
    /**
     * Get the path the user should be redirected to when they are not authenticated.
     */
    protected function redirectTo(Request $request): ?string
    {
        $queries = DB::getQueryLog();

        // Use dd to dump the queries and terminate the script
        dd($queries);
        return $request->expectsJson() ? null : route('login');
    }
}
