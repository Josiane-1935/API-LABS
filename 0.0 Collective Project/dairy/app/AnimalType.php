<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class AnimalType extends Model
{
    //properties
    protected $table = 'animalType';
    protected $primaryKey = 'animalTypeId';

    //methods

    //an animal type has many breeds
    public function breeds(){
        $this->hasMany('App\Breed');
    }

}
