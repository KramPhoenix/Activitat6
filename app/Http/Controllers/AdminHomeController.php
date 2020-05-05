<?php

namespace App\Http\Controllers;

use App\Models\Property;
use App\Models\User;
use Illuminate\Http\Request;

class AdminHomeController extends Controller
{
    public function index(){

        $users = User::all();
        $properties = Property::all();

        $usersCont = 0;
        $propertiesCont = 0;

        foreach($users as $user)
        {
            $usersCont ++;
        }
        foreach($properties as $property)
        {
            $propertiesCont ++;
        }

        return view('admin.home', [
            'users' => $usersCont,
            'properties' => $propertiesCont
        ]);
    }
}
