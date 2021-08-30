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
    $path = storage_path('json/stock_market_data.json');
      $datas = json_decode(file_get_contents($path), true);
      
      foreach ($datas as $data) {
          $storage['json_data'] = json_encode($data);
          JsonDBSave::create($storage);
      }
    
    return response("data stored successfully");

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
