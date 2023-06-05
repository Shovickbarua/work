<?php

namespace App\Http\Controllers\Api;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Order;

class OrderController extends Controller
{
    public function save(Request $request){

        $add_data = new Order();
        $add_data->name         =$request->name;
        $add_data->district     =$request->district;
        $add_data->mobile       =$request->mobile;
        $add_data->quantity     =1;
        $add_data->address      =$request->address;
        $add_data->save(); 

        return ['Result'=>'Data inserted successfully'];
    }
}
