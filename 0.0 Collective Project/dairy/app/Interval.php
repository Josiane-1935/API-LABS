<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

/**
 * App\Interval
 *
 * @property int $intervalId
 * @property string $name
 * @property string $start
 * @property string $end
 * @property string $description
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Interval newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Interval newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Interval query()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Interval whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Interval whereDescription($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Interval whereEnd($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Interval whereIntervalId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Interval whereName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Interval whereStart($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Interval whereUpdatedAt($value)
 * @mixin \Eloquent
 */
class Interval extends Model
{
    protected $table = 'intervals';
    protected $primaryKey = 'intervalId';

    public function produce(){
        $this->hasMany('App\Produce','intervalId','intervalId');
    }
}
