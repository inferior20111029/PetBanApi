<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;

use Illuminate\Http\Request;

class CarouselBoardController extends Controller
{
    public function CarouselBoard(Request $request)
    {
        $data =  DB::table('carousel_board')->get();
        return response($data, 200)
            ->header('Content-Type', 'text/plain');
    }
}
