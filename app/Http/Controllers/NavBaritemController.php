<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;

use Illuminate\Http\Request;

class NavBaritemController extends Controller
{
    public function NavBaritems(Request $request)
    {
        $data =  DB::table('nav_baritems')->get();
        return response($data, 200)
            ->header('Content-Type', 'text/plain');
    }
}
