<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;


class Employees extends Model
{
    use HasFactory;

    protected $fillable = [
        'country_id', 
        'state_id', 
        'city_id', 
        'department_id', 
        'first_name', 
        'last_name', 
        'address', 
        'zip_code', 
        'birth_date', 
        'date_hired'
    ];
    
    
    public function country(): BelongsTo{
        return $this->belongsTo(Countries::class);
    }

    public function state(): BelongsTo{
        return $this->belongsTo(States::class);
    }

    public function city(): BelongsTo{
        return $this->belongsTo(Cities::class);
    }


    public function department(): BelongsTo{
        return $this->belongsTo(Departments::class);
    }

}
