<?php

namespace App\Http\Controllers;


use App\Models\Property;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class MyPropertiesController extends Controller
{
    public function index(){
        return view('propiedades');
    }

    public function create(){
        return view('create_property');
    }

    public function store(Request $request){
        $user = Auth::user();
        $input = $request->all();
        $input = $request->validate([
            'titulo' => 'required',
            'imagen' => 'required',
            'precio' => 'required',
            'desc' => 'required',
        ]);

        $data = [
            'title' => $input['titulo'],
            'img'  => $input['imagen'],
            'price'  => $input['precio'],
            'description'  => $input['desc'],
            'owner' => $user->id
        ];
        $property = Property::create($data);
        return redirect()->route('myproperties.index');
    }
}
