<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

/**
 * App\Vital
 *
 * @property int $vitalId
 * @property string $recordedDate
 * @property float $weight
 * @property int $isCalving
 * @property string $description
 * @property int $userId
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property-read \Illuminate\Database\Eloquent\Collection|\App\Animal[] $animals
 * @property-read int|null $animals_count
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Vital newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Vital newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Vital query()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Vital whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Vital whereDescription($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Vital whereIsCalving($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Vital whereRecordedDate($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Vital whereUpdatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Vital whereUserId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Vital whereVitalId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Vital whereWeight($value)
 * @mixin \Eloquent
 */
class Vital extends Model
{
    protected $table = 'vitals';
    protected $primaryKey = 'vitalId';

    public function animals(){
        return $this->hasMany('App\Animal','vitalId','vitalId');
    }
}
