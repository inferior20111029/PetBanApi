<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;

use Illuminate\Http\Request;

class SummaryCardController extends Controller
{
    public function SummaryCard(Request $request)
    {
        $data =  DB::table('summary_cards')->get();
        return response($data, 200)
            ->header('Content-Type', 'text/plain');
    }
}
