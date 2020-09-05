<?php

namespace App\Http\Controllers;

use App\AnimalType;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\View;

class AnimalTypeController extends Controller
{

    public function all(){

        //get the data
        $all = AnimalType::with('breeds')->get();

        //display it
        return View::make('animal.type.all',['animalTypes' => $all]);

    }



}
