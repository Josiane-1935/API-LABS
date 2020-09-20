<?php

namespace App\Http\Controllers;

use App\AnimalType;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\View;

class AnimalTypeController extends Controller
{
    //CRUD
    public function all(){
      //get the data
      $all = AnimalType::with('breeds')->get();

      //display data
      return View::make('animal.animalType.all',['animalTypes'=>$all]);
    }

    public function add()
    {
      return view::make('animal.animalType.add');
    }

    public function store(Request $request)
    {
      $request->validate([
        'name' => ['required', 'alpha', 'unique:animalType'],
        'photo' => ['required', 'image'],
      ]);
      $name = $request->input('name');
      $photo = $request->file('photo');

      $photo_name =$name.'_'.time().'.'.$photo->getClientOriginalExtension();
      $photo->move(public_path("uploads"), $photo_name);

      $new = AnimalType::create([
        'name' => $name,
        'photo' => 'uploads/'.$photo_name
      ]);
      return redirect ('animals/type/all')->with('status', 'Animal Type added!');
    }

    public function edit($id)
    {
      $animalType = AnimalType::findOrFail($id);

      return View::make('animal.animalType.edit',['animalType'=>$animalType]);
    }

    public function update(Request $request)
    {
      $request->validate([
        'name' => ['alpha', 'unique:animalType'],
        'photo' => ['image'],
      ]);
      $id = $request->input('animalTypeId');
      $name = $request->input('name');
      $photo = $request->file('photo');

      $photo_name = '';

      if(isset($photo))
      {
        $photo_name =$name.'_'.time().'.'.$photo->getClientOriginalExtension();
        $photo->move(public_path("uploads"), $photo_name);

      }
      //store details in the db
      $record = AnimalType::find($id);
      if($record)
      {
        //update
        $record->name = $name;
        if($photo_name != "")
        {
          $record->photo = 'uploads/'.$photo_name;

        }
        $record->save();
        return redirect ('animals/type/all')->with('status', 'Animal Type updated!');
      }

    }

    public function delete($id, Request $request)
    {
      $animalType = AnimalType::findOrFail($id);

      $animalType->delete();

      return redirect ('animals/type/all')->with('status', 'Animal Type deleted!');

    }
}
