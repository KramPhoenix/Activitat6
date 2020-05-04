<?php

namespace App\Http\Controllers;

use App\Models\Property;
use Illuminate\Http\Request;

class AdminPropertyController extends Controller
{
    public function index(){

        $properties = Property::all();

        return view('admin.properties.index', [
            'properties' => $properties
        ]);
    }
}
