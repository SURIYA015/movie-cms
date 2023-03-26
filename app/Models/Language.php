<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\MoviesDetail;

class Language extends Model
{
    use HasFactory;

    public function moviesdetail(): \Illuminate\Database\Eloquent\Relations\HasMany
    {
        return $this->hasMany(MoviesDetail::class);
    }
}
