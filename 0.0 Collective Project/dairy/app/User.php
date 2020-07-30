<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

/**
 * App\User
 *
 * @property int $userId
 * @property int|null $nationalId
 * @property int|null $empId
 * @property string $firstName
 * @property string $lastName
 * @property string $photo
 * @property string $gender
 * @property string $dob
 * @property int|null $nssf
 * @property int|null $nhif
 * @property string|null $password
 * @property int $roleId
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @method static \Illuminate\Database\Eloquent\Builder|\App\User newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\User newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\User query()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\User whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\User whereDob($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\User whereEmpId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\User whereFirstName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\User whereGender($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\User whereLastName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\User whereNationalId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\User whereNhif($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\User whereNssf($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\User wherePassword($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\User wherePhoto($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\User whereRoleId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\User whereUpdatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\User whereUserId($value)
 * @mixin \Eloquent
 */
class User extends Model
{
    protected $table = 'users';
    protected $primaryKey = 'userId';

    public function contacts(){
        return $this->hasMany('App\Contact','userId','userId');
    }

    public function payments(){
        return $this->hasMany('App\Payment','userId','userId');
    }

    public function produce(){
        return $this->hasMany('App\Produce','userId','userId');
    }

    public function role(){
        return $this->belongsTo('App\Role');
    }

    public function tokens(){
        return $this->hasMany('App\Token','userId','userId');
    }

    public function subscriptions(){
        return $this->hasMany('App\Subscription','userId','userId');
    }

}
