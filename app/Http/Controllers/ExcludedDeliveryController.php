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
            'city' => 'required',
            'date' => 'required',
            'start_time' => 'required',
            'end_time' => 'required'
        ]);

        if($validator->fails()) {
           return response()->json('check your params');
        }
        //check the name of city
        $city_cheker = city::where('name', $request->city)->first();
        ExcludedDelivery::create([
            'city_id' => $city_cheker->id,
            'date' => $request->date,
            'start_time' => $request->start_time,
            'end_time' => $request->end_time
        ]);

        return response()->json(['the exluded date and time are saved !']);


        
    }
}
