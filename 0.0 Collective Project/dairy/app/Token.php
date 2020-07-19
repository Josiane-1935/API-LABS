<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

/**
 * App\Token
 *
 * @property int $tokenId
 * @property int $token
 * @property string $used
 * @property int $userId
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property-read \App\User $user
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Token newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Token newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Token query()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Token whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Token whereToken($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Token whereTokenId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Token whereUpdatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Token whereUsed($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Token whereUserId($value)
 * @mixin \Eloquent
 */
class Token extends Model
{
    protected $table = 'tokens';
    protected $primaryKey = 'tokenId';

    public function user(){
        return $this->belongsTo('App\User');
    }
}
