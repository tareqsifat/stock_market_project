<?php

namespace App\Http\Controllers;

use App\Models\JsonDBSave;
use Illuminate\Http\Request;

class jsonDBsaveController extends Controller
{
    public function index()
   {
      return view('json_form');
   }  
 
  public function storeJsonData(Request $request)
  {

    $json_data =[];
    $test = ['name' => 'jamil'];

    $path = storage_path()."\json\stock_market_data.json";

    $data = file_get_contents($path);
    
    $mydata = collect($data);
    foreach ($mydata as $value) {
        $json_data['json_data'] = $value;
    } 
    // dd(json_encode($json_data));
    // JsonDBSave::create($json_data);

    $xyz = new JsonDBSave($json_data);
    $xyz->save();


    // try {
    //     $mydata = collect($data);
    //     $mylist = new JsonDBSave($mydata)
    //     $mylist->save();
    //     return $mylist;
    // } catch (QueryException $exception) {
    //     throw new InvalidArgumentException($exception->getMessage());
    // }
  }
}
