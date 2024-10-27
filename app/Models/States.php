<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;

class States extends Model
{
    use HasFactory;

    protected $fillable = ['country_id', 'name'];
    public function country(): BelongsTo{
        return $this->belongsTo(Countries::class);
    }

    public function cities(): HasMany{
        return $this->hasMany(Cities::class);
    }
}
