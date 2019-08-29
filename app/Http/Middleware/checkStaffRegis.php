<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Support\Facades\DB;
use mysql_xdevapi\Session;

class checkStaffRegis
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle($request, Closure $next)
    {
        $data = DB::table('status')->where('id', 1)->first();
        $stat = $data->status;
        $request->session()->flash('status', $stat);
        return $next($request);
    }
}
