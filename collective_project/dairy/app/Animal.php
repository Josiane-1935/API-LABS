<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

/**
 * App\Animal
 *
 * @property int $animalId
 * @property string $name
 * @property int $vitalId
 * @property int $breedId
 * @property string $dob
 * @property string $gender
 * @property int $parentId
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property-read \App\Breed $breed
 * @property-read \App\Vital $vital
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Animal newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Animal newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Animal query()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Animal whereAnimalId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Animal whereBreedId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Animal whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Animal whereDob($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Animal whereGender($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Animal whereName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Animal whereParentId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Animal whereUpdatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Animal whereVitalId($value)
 * @mixin \Eloquent
 */
class Animal extends Model
{
    protected $table = 'animals';
    protected $primaryKey = 'animalId';

    public function breed(){
        return $this->belongsTo('App\Breed');
    }

    public function vital(){
        return $this->belongsTo('App\Vital');
    }

    public function feeds(){
        $this->hasMany('App\Feed','animalId','animalId');
    }

    public function produce(){
        $this->hasMany('App\Produce','animalId','animalId');
    }
}
