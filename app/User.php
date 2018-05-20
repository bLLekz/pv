<?php

namespace App;

use App\Profile;
use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Nicolaslopezj\Searchable\SearchableTrait;


class User extends Authenticatable
{
//    use Notifiable;
//    use SearchableTrait;
//
//    protected $searchable = [
//        'columns' => [
//            'consignment.name' => 10,
//            'consignment.full_name' => 5,
//        ],
//    ];

    public function profile()
    {
        return $this->hasOne(Profile::class);
    }
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'role', 'email', 'password',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];
}
