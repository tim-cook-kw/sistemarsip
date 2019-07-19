<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
class LoginApiController extends Controller
{
    public function user(Request $request){
         $flights = DB::table('users')->where('email', $request->email)->get();
         return $flights;
    }
}
