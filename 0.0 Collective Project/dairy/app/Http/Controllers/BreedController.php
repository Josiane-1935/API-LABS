<?php

namespace App\Http\Controllers;

use App\Breed;
use Illuminate\Http\Request;

class BreedController extends Controller
{
    public function getAll(){

        dd(Breed::all());

        //dd() -> [var_dump() && die()];
    }
}
