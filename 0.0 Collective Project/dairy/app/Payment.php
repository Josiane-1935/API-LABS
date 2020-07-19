<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

/**
 * App\Payment
 *
 * @property int $paymentId
 * @property int $subscriptionId
 * @property int $userId
 * @property float $amount
 * @property string $paymentMethod
 * @property string $paidOn
 * @property string $narrative
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Payment newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Payment newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Payment query()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Payment whereAmount($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Payment whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Payment whereNarrative($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Payment wherePaidOn($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Payment wherePaymentId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Payment wherePaymentMethod($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Payment whereSubscriptionId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Payment whereUpdatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Payment whereUserId($value)
 * @mixin \Eloquent
 */
class Payment extends Model
{
    protected $table = 'payments';
    protected $primaryKey = 'paymentId';

    public function subscription(){
        $this->belongsTo('App\Subscription');
    }

    public function user(){
        $this->belongsTo('App\User');
    }
}
