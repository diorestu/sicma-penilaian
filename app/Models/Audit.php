<?php

namespace App\Models;

use App\Models\Uraian;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Audit extends Model
{
    protected $guarded = ['id'];
    /**
     * Get the uraian that owns the Audit
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function uraian(): BelongsTo
    {
        return $this->belongsTo(Uraian::class, 'uraian_id', 'id');
    }
}
