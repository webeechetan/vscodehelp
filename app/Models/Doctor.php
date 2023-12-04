<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Clinic;
use App\Models\Slot;

class Doctor extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'email',
        'address',
        'speciality',
    ];

    public function clinics()
    {
        return $this->belongsToMany(Clinic::class);
    }

    public function slots()
    {
        return $this->belongsToMany(Slot::class);
    }
}
