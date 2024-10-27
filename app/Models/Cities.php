<?php

namespace App\Models;

use App\Models\States;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use \Illuminate\Database\Eloquent\Factories\HasFactory;

class Cities extends Model
{
    use HasFactory;

    protected $fillable = ['state_id', 'name'];

    public function state():BelongsTo
    {
        return $this->belongsTo(States::class);      
    }
}
