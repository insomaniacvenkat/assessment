<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;


use App\Login;
use App\Http\Resources\Login as LoginsResource;
use App\Http\Resources\LoginsCollection;

class LoginsController extends Controller
{
    //
    public function index(Request $request) {
       // $q = $request->input('q', "");
       // $limit = $request->input('limit', "9");
        $name = $request->input('user', "");
       // return (new LoginsCollection($name));
       return response()->json($name);
    }
}
