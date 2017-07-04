<?php

namespace App\Http\Controllers;

use App\Language;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class LanguageController extends Controller
{
    public function addLanguage(Request $request)
    {
        if ($request->isMethod('post')) {
            $languageName = $request->languageName;
            $result = json_decode(Language::getLanguage($languageName), true);
            if (isset($result) && !empty($result)) {
                return json_encode(array("result" => 'Duplicate', 'response' => 'Language Already Added.'));
            } else {
                $language = new Language();
                $language->language = $languageName;
                $language->created_by = $request->session()->get('userDetails')['id'];
                $language->save();
                return json_encode(array("result" => 'Success', 'response' => 'Language Successfully Added.'));
            }
        } else {
            return json_encode(array("result" => 'Failed', 'response' => 'Invalid Request'));
        }
    }

    public function Language()
    {
        $language = Language::allLanguage();
        return view('admin.language.manage_language', array('cities' => $language));
    }

    /*
     * @Author: Manish Gupta
     * @Date : 24/06/2017
     * @Desc : To Update the Language
     */
    public function updateLanguage(Request $request)
    {
        if ($request->isMethod('post')) {
            $languageId = $request->languageId;
            $languageVal = $request->languageVal;
            $result = json_decode(Language::getLanguage($languageVal), true);
            if (isset($result) && !empty($result)) {
                return json_encode(array("result" => 'Duplicate', 'response' => 'Language Already Added.'));
            } else {
                $language = Language::where('id', $languageId)->first();
                $language->language = $languageVal;
                $language->updated_by = $request->session()->get('userDetails')['id'];
                $language->save();
                return json_encode(array("result" => 'Success', 'response' => 'Language Successfully Updated.'));
            }
        } else {
            return json_encode(array("result" => 'Failed', 'response' => 'Invalid Request'));
        }
    }

    /*
     * @Author: Manish Gupta
     * @Date : 24/06/2017
     * @Desc : To Delete the Language
     */
    public function deleteLanguage(Request $request)
    {
        if ($request->isMethod('post')) {
            $languageId = $request->languageId;
            $language = Language::where('id', $languageId)->first();
            $language->enabled = 'N';
            $language->updated_by = $request->session()->get('userDetails')['id'];
            $language->save();
            return json_encode(array("result" => 'Success', 'response' => 'Language Successfully Deleted.'));
        } else {
            return json_encode(array("result" => 'Failed', 'response' => 'Invalid Request'));
        }
    }
}
