<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class AnimalType extends Model
{

    //Properties
    protected $table ='animaltype';
    protected $primaryKey = 'animalTypeId';

    //methods
    //an animaltype has many breeds: a cow can have plusieurs races
    public function breeds()
    {
      $this->hasMany('App\Breed');
    }
}
