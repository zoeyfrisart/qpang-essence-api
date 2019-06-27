<?php

namespace App\Models;

use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Database\Eloquent\Relations\HasOne;
use Laravel\Passport\HasApiTokens;

class User extends Authenticatable
{
    use HasApiTokens;

    /**
     * @var array
     */
    protected $fillable = [
        'name', 'email', 'password',
    ];

    /**
     * @return HasOne
     */
    public function player(): HasOne
    {
        return $this->hasOne(Player::class);
    }

    /**
     * @param string $username
     * @return \Illuminate\Database\Eloquent\Builder|\Illuminate\Database\Eloquent\Model|object|null
     */
    public function findForPassport(string $username)
    {
        return static::query()->where('name', $username)->orWhere('email', $username)->first();
    }
}
