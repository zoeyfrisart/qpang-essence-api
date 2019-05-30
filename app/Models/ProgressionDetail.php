<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class ProgressionDetail extends Model
{
    /**
     * @var array
     */
    protected $fillable = [
        'detail', 'state'
    ];

    /**
     * @return BelongsTo
     */
    public function progression(): BelongsTo
    {
        return $this->belongsTo(Progression::class);
    }
}
