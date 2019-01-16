<?php

namespace App\Http\Middleware;

use Auth;
use Closure;

class Admin{
	/**
	 * Handle an incoming request.
	 *
	 * @param  \Illuminate\Http\Request  $request
	 * @param  \Closure  $next
	 * @return mixed
	 */
	public function handle($request, Closure $next){
		
		if (Auth::user()->code_role == 2 || Auth::user()->code_role == 3) {
			return $next($request);
		}
		
		return redirect(route('main'));
	}
}
