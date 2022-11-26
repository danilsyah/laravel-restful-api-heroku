<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Footballer;

class FootballerController extends Controller
{
    public function index(){
        $footballers = Footballer::get();
        return response()->json(["success" => true,"message" => "Footballer all found", "data" => $footballers], 200);
    }

    public function show($id = null){
        // $footballer = Footballer::where('id',$id)->first();
        $footballer = Footballer::find($id);

        if($footballer){
            // $footballer = $footballer->toJson(JSON_PRETTY_PRINT);
            return response()->json(["success" => true,"message" => "Footballer found", "data" => $footballer], 200);
        }else{
            return response()->json(["success"=>false,"message"=>"Footballer not found"], 404);
        }

    }
}
