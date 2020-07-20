<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

/**
 * App\AnimalType
 *
 * @property int $animalTypeId
 * @property string $name
 * @property string $photo
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @method static \Illuminate\Database\Eloquent\Builder|\App\AnimalType newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\AnimalType newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\AnimalType query()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\AnimalType whereAnimalTypeId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\AnimalType whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\AnimalType whereName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\AnimalType wherePhoto($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\AnimalType whereUpdatedAt($value)
 * @mixin \Eloquent
 */
class AnimalType extends Model
{
    protected $table = 'animalType';
    protected $primaryKey = 'animalTypeId';
}
