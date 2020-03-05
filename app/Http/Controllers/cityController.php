<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\City;
use Illuminate\Support\Facades\Validator;

class CityController extends Controller
{
    public function create(Request $request) {


        $validator = Validator::make($request->all(), [
            'name' => 'required',
            'partner_id' => 'required',
        ]);

        if ($validator->fails()) {
            return response()->json('name  or partner id is required !!!!');
        }

        City::create([
            'name' => $request->name,
            'partner_id' => $request->partner_id,
        ]);

        return response()->json('we add your city succesfully');

    }


}
