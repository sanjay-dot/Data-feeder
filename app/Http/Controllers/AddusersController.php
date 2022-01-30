<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\AddClient;

class AddusersController extends Controller
{
    public function PostData(Request $request){
        
        $data = new AddClient();
        $data->Client_Name=$request->Client_Name;
        $data->Shop_Name=$request->Shop_Name;
        $data->Address_One=$request->Address_One;
        $data->Address_two=$request->Address_two;
        $data->Contact=$request->Contact;
        $data->Locality=$request->Locality;
        $data->City=$request->City;

        $result = $data->save();

    }
}
