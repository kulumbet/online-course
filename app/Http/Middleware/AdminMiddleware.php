<?php
/**
 * Created by PhpStorm.
 * User: kjyer
 * Date: 18-Nov-17
 * Time: 4:24 PM
 */

namespace App\Http\Middleware;

use App\Models\Role;
use Closure;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;

class AdminMiddleware
{
    public function handle($request, Closure $next)
    {
        if (Auth::user()->isAdmin()) {
            return $next($request);
        } else {
            Session::flash('error', 'Ошибка доступа');
            return redirect('');
        }
    }
}