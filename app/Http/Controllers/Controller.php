<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Support\Facades\Auth;
use app\Models\User;

class Controller extends BaseController
{
    use AuthorizesRequests, ValidatesRequests;
    
//     protected $id;
    
//     public function __construct()
// {
//     $this->middleware(function ($request, $next) {
//         $this->id = Auth::id();

//         return $next($request);
//     });
// }

 
}
