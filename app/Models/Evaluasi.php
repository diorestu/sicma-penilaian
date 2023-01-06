<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Evaluasi extends Model
{
    protected $guarded = ['id'];

    public function uraian(): HasMany
    {
        return $this->hasMany(Uraian::class, 'aspek_id', 'id');
    }
}
