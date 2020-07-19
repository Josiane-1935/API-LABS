<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

/**
 * App\Termination
 *
 * @property int $terminationId
 * @property string $reason
 * @property string $terminatedOn
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Termination newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Termination newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Termination query()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Termination whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Termination whereReason($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Termination whereTerminatedOn($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Termination whereTerminationId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Termination whereUpdatedAt($value)
 * @mixin \Eloquent
 */
class Termination extends Model
{
    protected $table = 'terminations';
    protected $primaryKey = 'terminationId';

    public function subscriptions(){
        $this->hasMany('App\Subscription','terminationId','terminationId');
    }
}
