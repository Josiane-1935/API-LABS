<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Animal extends Model
{
    //properties
    protected $table = 'animal';
    protected $primaryKey = 'animalId';

    //methods

    //an animal belongs to a breed
    public function breed(){
        $this->belongsTo('App\Breed','breedId','breedId');
    }
}
