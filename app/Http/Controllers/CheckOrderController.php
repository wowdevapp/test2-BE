<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\CitiesDeliveryTime;
use App\ExcludedDelivery;
use Carbon\Carbon;

class CheckOrderController extends Controller
{
    //
   public    $deliveryArray = array();
   public    $filteredDeliveryDates = array();
   //filter dates
    public function filterExcludedDates($city_id, $date)
    {

        $excludedDeliveryDates = ExcludedDelivery::where(['city_id' => $city_id, 'date' => $date])->first();

        if (!empty($excludedDeliveryDates)) {

                $excludedDate = $excludedDeliveryDates->date;

            return array('excluded_date' => $excludedDate);
        }
     }
    public function index(Request $request)
    {

        $deliveryDates = CitiesDeliveryTime::where('city_id', $request->city_id)->get();

        for ($i = 1; $i <= $request->number_of_days; $i++) {
            $futureDate = strtotime(now() . ' + ' . $i . ' days');
            $futureDate = date('Y-m-d', $futureDate);

            $excludedFilter = $this->filterExcludedDates($request->city_id, $futureDate);

            if ($futureDate == $excludedFilter['excluded_date']) {

                $filteredDeliveryDates = $excludedFilter['filteredDeliveryDates'];
            } else {

                $filteredDeliveryDates = $deliveryDates;
            }

            $futureDateArray = array(
                "date" => $futureDate,
                "delivery_Dates" => $filteredDeliveryDates
            );

            $deliveryArray[] = $futureDateArray;
        }

        return response()->json([
            "dates" => $deliveryArray
        ]);
    }

}
