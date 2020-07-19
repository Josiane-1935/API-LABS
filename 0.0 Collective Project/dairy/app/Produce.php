<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

/**
 * App\Produce
 *
 * @property int $produceId
 * @property string $dateRecorded
 * @property int $intervalId
 * @property int $userId
 * @property int $animalId
 * @property float $quantity
 * @property string $scale
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Produce newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Produce newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Produce query()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Produce whereAnimalId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Produce whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Produce whereDateRecorded($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Produce whereIntervalId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Produce whereProduceId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Produce whereQuantity($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Produce whereScale($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Produce whereUpdatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Produce whereUserId($value)
 * @mixin \Eloquent
 */
class Produce extends Model
{
    protected $table = 'produce';
    protected $primaryKey = 'produceId';

    public function animal(){
        $this->belongsTo('App\Animal');
    }

    public function interval(){
        $this->belongsTo('App\Interval');
    }

    public function user(){
        $this->belongsTo('App\User');

        $j = new Produce();
    }
}
