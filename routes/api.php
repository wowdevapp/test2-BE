<?php

use Illuminate\Http\Request;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

/* Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
}); */
Route::domain('adminstration.localhost')->group(function () {
    Route::post('/cities', 'CityController@create');
    Route::post('/delivery-times', 'DelivryTimeController@create');
    Route::post('/cities/{city_id}/delivery-times', 'CitiesDelivryTimeController@create');
    Route::post('/excluded-delivery', 'ExcludedDeliveryController@create');

});
Route::domain('localhost')->group(function () {
    Route::get('/cities/{city_id}/delivery-dates/{number_of_days}', 'CheckOrderController@index');

});