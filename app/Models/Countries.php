<?php

namespace App\Models;

use App\Models\States;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Relations\HasMany;


class Countries extends Model
{
    use  HasFactory;
    protected $fillable = ['country_code', 'name'];

    public function states():HasMany{
        return $this->hasMany(States::class);
    }

    public function cities():HasMany{
        return $this->hasMany(Cities::class);
    }

}
