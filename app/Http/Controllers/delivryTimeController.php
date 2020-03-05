<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\DlvrTime;
use Illuminate\Support\Facades\Validator;

class DelivryTimeController extends Controller
{
    //
        public function create(Request $request) {

           //validation check
            $validator = Validator::make($request->all(), [
                'start_time' => 'required',
                'end_time'       => 'required',
            ]);
    
            if ($validator->fails()) {
                return response()->json('start time or end time required !!!!');
            }
            //insert data to table
            DlvrTime::create([
                'start_time' => (string) $request->start_time,
                'end_time' => (string)   $request->end_time,
            ]);
    
            return response()->json('we add your time succesfully');
    
        }
    }
