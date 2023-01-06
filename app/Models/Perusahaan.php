<?php

namespace App\Models;

use App\Models\User;
use App\Models\Aspek;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Perusahaan extends Model
{
    protected $guarded = ['id'];

    public function aspek(): HasMany
    {
        return $this->hasMany(Aspek::class, 'company_id', 'id');
    }
    public function user(): HasMany
    {
        return $this->hasMany(User::class, 'company_id', 'id');
    }
}
