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
}
