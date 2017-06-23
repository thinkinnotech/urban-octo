<?php

namespace App\Http\Controllers;

use App\City;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class CityController extends Controller
{
    //
    public function addCity(Request $request)
    {
        if ($request->isMethod('post')) {
            $cityName = $request->cityName;
            $result = json_decode(City::getCity($cityName), true);
            if (isset($result) && !empty($result)) {
                return json_encode(array("result" => 'Duplicate', 'response' => 'City Already Added.'));
            } else {
                $city = new City();
                $city->city = $cityName;
                $city->created_by = $request->session()->get('userDetails')['id'];
                $city->save();
                return json_encode(array("result" => 'Success', 'response' => 'City Successfully Added.'));
            }
        } else {
            return json_encode(array("result" => 'Failed', 'response' => 'Invalid Request'));
        }
    }

    public function City()
    {
        $city = City::allCity();
        return view('admin.city.manage_city', array('cities' => $city));
    }

    /*
     * @Author: Manish Gupta
     * @Date : 24/06/2017
     * @Desc : To Update the City
     */
    public function updateCity(Request $request)
    {
        if ($request->isMethod('post')) {
            $cityId = $request->cityId;
            $cityVal = $request->cityVal;
            $result = json_decode(City::getCity($cityVal), true);
            if (isset($result) && !empty($result)) {
                return json_encode(array("result" => 'Duplicate', 'response' => 'City Already Added.'));
            } else {
                $city = City::where('id', $cityId)->first();
                $city->city = $cityVal;
                $city->updated_by = $request->session()->get('userDetails')['id'];
                $city->save();
                return json_encode(array("result" => 'Success', 'response' => 'City Successfully Updated.'));
            }
        } else {
            return json_encode(array("result" => 'Failed', 'response' => 'Invalid Request'));
        }
    }

    /*
     * @Author: Manish Gupta
     * @Date : 24/06/2017
     * @Desc : To Delete the City
     */
    public function deleteCity(Request $request)
    {
        if ($request->isMethod('post')) {
            $cityId = $request->cityId;
            $city = City::where('id', $cityId)->first();
            $city->enabled = 'N';
            $city->updated_by = $request->session()->get('userDetails')['id'];
            $city->save();
            return json_encode(array("result" => 'Success', 'response' => 'City Successfully Deleted.'));
        } else {
            return json_encode(array("result" => 'Failed', 'response' => 'Invalid Request'));
        }
    }
}
