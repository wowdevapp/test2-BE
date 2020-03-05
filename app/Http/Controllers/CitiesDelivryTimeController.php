<?php

namespace App\Http\Controllers;
use App\CitiesDeliveryTime;

use Illuminate\Http\Request;

use Illuminate\Support\Facades\Validator;

class CitiesDelivryTimeController extends Controller
       {

        public function create(Request $request,$city_id) {

            $validator = Validator::make($request->all(), [
                'delivery_time_id' => 'required',
            ]);
    
            if ($validator->fails()) {
                return response()->json('delivery time  is required !!!!');
            }
             $city_id =(integer) $city_id;            
               
            CitiesDeliveryTime::create([
                'city_id'=>$city_id,
                'delivery_time_id' => $request->delivery_time_id,
            ]);
    
            return response()->json('we link the cities and the span time');
    
        }
    
        }
    
