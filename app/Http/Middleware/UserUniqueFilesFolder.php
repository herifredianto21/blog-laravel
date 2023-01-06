<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Contracts\Cache\Store;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Config;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Auth;

class UserUniqueFilesFolder
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure(\Illuminate\Http\Request): (\Illuminate\Http\Response|\Illuminate\Http\RedirectResponse)  $next
     * @return \Illuminate\Http\Response|\Illuminate\Http\RedirectResponse
     */
    public function handle(Request $request, Closure $next)
    {
        if ( Auth::check() ) {
            $folder_name = 'my'.Auth::user()->id.'files';
            if ( !Storage::disk('public')->exists($folder_name) ) {
                Storage::disk('public')->makeDirectory($folder_name, 0755, true, true);
            }
            Config::set('elfinder.dir', ["storage/$folder_name"]);
        }
        return $next($request);
    }
}
