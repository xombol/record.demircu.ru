<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Doctor extends Model
{
    use HasFactory;

    public function specialties(){
        return $this->belongsToMany(Specialty::class)->withTimestamps();
    }
}
