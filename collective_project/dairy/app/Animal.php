<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Animal extends Model
{
    //
    protected $table ='animals';
    protected $primaryKey = 'animalId';

    //methods
    //an animal can only have one race
    public function breed()
    {
      $this->belongsTo('App\Breed', 'breedId', 'breedId');
    }
}
