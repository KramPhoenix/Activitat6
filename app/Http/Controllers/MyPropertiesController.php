<?php

namespace App\Http\Controllers;


use App\Models\Property;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class MyPropertiesController extends Controller
{
    public function index(){
        $user = Auth::user();

        $properties = Property::where('owner', '=', $user->id)->get();

        return view('propiedades', [
            'properties' => $properties
        ]);
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

        if ($request->hasFile('imagen')){
            $imagen = $request->file('imagen');
            $nombreImagen = time().$imagen->getClientOriginalName();
            $imagen->move(public_path() . '/img/' , $nombreImagen);
            $input['imagen'] = $nombreImagen;
        }

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

    public function edit($id)
    {
        $property = Property::find($id);

        return view('edit_property', [
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
        return redirect()->route('myproperties.index');
    }

    public function destroy($id)
    {
        Property::destroy($id);
        return redirect()->route('myproperties.index');
    }


}
