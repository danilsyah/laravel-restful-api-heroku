<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Footballer;

class FootballerController extends Controller
{
    public function index(){
        $footballers = Footballer::get();
        return response()->json(["message" => "Success", "data" => $footballers], 200);
    }

    public function show($id = null){
        // $footballer = Footballer::where('id',$id)->first();
        $footballer = Footballer::find($id);

        if($footballer){
            // $footballer = $footballer->toJson(JSON_PRETTY_PRINT);
            return response()->json(["message" => "Success", "data" => $footballer], 200);
        }else{
            return response()->json(["message"=>"Footballer not found"], 404);
        }

    }
}
