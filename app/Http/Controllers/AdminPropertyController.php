<?php

namespace App\Http\Controllers;

use App\Models\Property;
use App\Models\User;
use Illuminate\Http\Request;

class AdminPropertyController extends Controller
{
    public function index(){

        $properties = Property::all();

        return view('admin.properties.index', [
            'properties' => $properties
        ]);
    }

    public function show($id)
    {
        $user = User::find($id);


        return view('admin.properties.owner', [
            'user' => $user
        ]);

    }

    public function edit($id)
    {
        $property = Property::find($id);

        return view('admin.properties.edit', [
            'property' => $property,
            'id' => $id,
        ]);
    }

    public function update($id, Request $request)
    {
        $property = Property::find($id);
        $input = $request->all();

        $input = $request->validate([
            'titulo' => 'required',
            'precio' => 'required',
            'desc' => 'required',
        ]);

        $data = [
            'title' => $input['titulo'],
            'price'  => $input['precio'],
            'description'  => $input['desc'],
        ];

        $property->update($data);
        return redirect()->route('admin.properties.index');
    }

    public function destroy($id)
    {
        Property::destroy($id);
        return redirect()->route('admin.properties.index');
    }
}
