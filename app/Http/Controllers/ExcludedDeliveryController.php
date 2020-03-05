<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\city;
use App\ExcludedDelivery;
use Illuminate\Support\Facades\Validator;


class ExcludedDeliveryController extends Controller
{
    
    //
    public function create(Request $request) {

        $validator = Validator::make($request->all(), [
            'city'            => 'required',
            'date'            => 'required|date|date_format:Y-m-d',
           // 'delivery_time_id'=> 'required'
        ]);

        if($validator->fails()) {
           return response()->json('check your params');
        }
        //check the name of city
        $city_cheker = city::where('name', $request->city)->first();
        //excluded saturdays
        for($i=1;$i<=6;$i++)  {
            ExcludedDelivery::create([
                'city_id'    => $city_cheker->id,
                'date'       => $request->date,
                'delivery_time_id' =>$i,
            ]);
        } 
        

        return response()->json(['the exluded date and time are saved !']);


        
    }
}
