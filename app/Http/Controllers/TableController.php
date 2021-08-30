<?php

namespace App\Http\Controllers;

use App\Models\Json;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class TableController extends Controller
{
    // $data = 

    public function index()
    {
        $path = storage_path()."/json/stock_market_data.json";
        dd($path);

        $data = json_decode(file_get_contents($path), true);
        // $data = Http::get('https://api.npoint.io/6f468002bcd3ef2ab5ab')->json();

        return view('table', ['data'=> $data]);
    } 
}
