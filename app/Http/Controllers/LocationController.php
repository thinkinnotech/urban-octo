<?php

namespace App\Http\Controllers;

use App\City;
use App\Location;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class LocationController extends Controller
{
    public function addLocation(Request $request)
    {
        if ($request->isMethod('post')) {
            $locationName = $request->locationName;
            $cityId = $request->cityName;
            $result = json_decode(Location::getLocation($locationName, $cityId), true);
            if (isset($result) && !empty($result)) {
                return json_encode(array("result" => 'Duplicate', 'response' => 'Location Already Added.'));
            } else {
                $location = new Location();
                $location->location = $locationName;
                $location->city_id = $cityId;
                $location->created_by = $request->session()->get('userDetails')['id'];
                $location->save();
                return json_encode(array("result" => 'Success', 'response' => 'Location Successfully Added.'));
            }
        } else {
            return json_encode(array("result" => 'Failed', 'response' => 'Invalid Request'));
        }
    }

    public function Location()
    {
        $cities = City::allCity();
        $location = Location::allLocation();
        return view('admin.location.manage_location', array('cities'=> $cities, 'locations' => $location));
    }

    /*
     * @Author: Manish Gupta
     * @Date : 24/06/2017
     * @Desc : To Update the Location
     */
    public function updateLocation(Request $request)
    {
        if ($request->isMethod('post')) {
            $locationId = $request->locationId;
            $cityVal = $request->cityVal;
            $locationVal = $request->locationVal;
            $result = json_decode(Location::getLocation($locationVal, $cityVal), true);
            if (isset($result) && !empty($result)) {
                return json_encode(array("result" => 'Duplicate', 'response' => 'Location Already Added.'));
            } else {
                $location = Location::where('id', $locationId)->first();
                $location->location = $locationVal;
                $location->city_id = $cityVal;
                $location->updated_by = $request->session()->get('userDetails')['id'];
                $location->save();
                return json_encode(array("result" => 'Success', 'response' => 'Location Successfully Updated.'));
            }
        } else {
            return json_encode(array("result" => 'Failed', 'response' => 'Invalid Request'));
        }
    }

    /*
     * @Author: Manish Gupta
     * @Date : 24/06/2017
     * @Desc : To Delete the Location
     */
    public function deleteLocation(Request $request)
    {
        if ($request->isMethod('post')) {
            $locationId = $request->locationId;
            $location = Location::where('id', $locationId)->first();
            $location->enabled = 'N';
            $location->updated_by = $request->session()->get('userDetails')['id'];
            $location->save();
            return json_encode(array("result" => 'Success', 'response' => 'Location Successfully Deleted.'));
        } else {
            return json_encode(array("result" => 'Failed', 'response' => 'Invalid Request'));
        }
    }
}
