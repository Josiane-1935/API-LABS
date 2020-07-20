<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

/**
 * App\Subscription
 *
 * @property int $subscriptionId
 * @property string $start
 * @property string $end
 * @property float $price
 * @property float $quantity
 * @property int $userId
 * @property int $status
 * @property int|null $terminationId
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Subscription newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Subscription newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Subscription query()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Subscription whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Subscription whereEnd($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Subscription wherePrice($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Subscription whereQuantity($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Subscription whereStart($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Subscription whereStatus($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Subscription whereSubscriptionId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Subscription whereTerminationId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Subscription whereUpdatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Subscription whereUserId($value)
 * @mixin \Eloquent
 */
class Subscription extends Model
{
    protected $table = 'subscriptions';
    protected $primaryKey = 'subscriptionId';

    public function payments(){
        $this->hasMany('App\Payment','subscriptionId','subscriptionId');
    }

    public function user(){
        $this->belongsTo('App\User');
    }

    public function termination(){
        $this->belongsTo('App\Termination');
    }
}
