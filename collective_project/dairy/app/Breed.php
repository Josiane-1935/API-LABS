<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Breed extends Model
{
    //properties
    protected $table ='breeds';
    protected $primaryKey = 'breedId';

    //methods
    //a breed has only one animalType
    public function animaltype()
    {
      $this->belongsTo('App\AnimalType','animalTypeId','animalTypeId');
    }
    //a breed has many animals: one breed has many animals ie on a plusieurs animaux de la meme race
    public function animals(){
      $this->hasMany('App\Animal');
    }
}
