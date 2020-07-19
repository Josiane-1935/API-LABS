<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

/**
 * App\Feed
 *
 * @property int $feedId
 * @property float $quantity
 * @property int $animalId
 * @property string $dateRecorded
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Feed newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Feed newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Feed query()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Feed whereAnimalId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Feed whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Feed whereDateRecorded($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Feed whereFeedId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Feed whereQuantity($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Feed whereUpdatedAt($value)
 * @mixin \Eloquent
 */
class Feed extends Model
{
    protected $table = 'feeds';
    protected $primaryKey = 'feedId';

    public function animal(){
        $this->belongsTo('App\Animal');
    }
}
