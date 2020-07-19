<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Breed extends Model
{
    //properties
    protected $table = 'breeds';
    protected $primaryKey = 'breedId';

    //methods

    // a breed belongs to an animal type
    public function animalType(){
        $this->belongsTo('App\AnimalType','animalTypeId','animalTypeId');
    }

    //a breed has many animals
    public function animals(){
        $this->hasMany('App\Animal');
    }
}
