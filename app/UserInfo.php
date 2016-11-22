<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

/**
 * 用户信息
 * Class UserInfo
 * @package App
 */
class UserInfo extends Model {

    /**
     * The attributes that are mass assignable.
     * @var array
     */
    protected $fillable = [
        'country', 'city', 'address', 'status', 'zip',
    ];

}
