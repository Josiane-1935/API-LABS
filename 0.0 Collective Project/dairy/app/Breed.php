<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

/**
 * App\Breed
 *
 * @property int $breedId
 * @property string $name
 * @property string $origin
 * @property int $animalTypeId
 * @property string $photo
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Breed newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Breed newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Breed query()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Breed whereAnimalTypeId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Breed whereBreedId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Breed whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Breed whereName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Breed whereOrigin($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Breed wherePhoto($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Breed whereUpdatedAt($value)
 * @mixin \Eloquent
 */
class Breed extends Model
{
    protected $table = 'breeds';
    protected $primaryKey = 'breedId';

    public function animals(){
        $this->hasMany('App\Animal','breedId','breedId');
    }
}
