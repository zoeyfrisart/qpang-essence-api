<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Relations\HasOne;

class User extends Model
{
    /**
     * @var array
     */
    protected $fillable = [
        'name', 'email', 'verified_at', 'password'
    ];

    /**
     * @return HasOne
     */
    public function players(): HasOne
    {
        return $this->hasOne(Player::class);
    }
}
