<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasOne;
use Laravel\Passport\HasApiTokens;

class User extends Model
{

    use HasApiTokens,

        /**
         * @var array
         */
    protected $fillable = [
        'name', 'email', 'verified_at', 'password',
    ];

    /**
     * @return HasOne
     */
    public function players(): HasOne
    {
        return $this->hasOne(Player::class);
    }
}
