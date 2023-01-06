<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Uraian extends Model
{
    protected $guarded = ['id'];

    /**
     * Get the aspek that owns the Uraian
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function aspek(): BelongsTo
    {
        return $this->belongsTo(Aspek::class, 'aspek_id', 'id');
    }
}
