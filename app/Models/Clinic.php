<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Doctor;

class Clinic extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'address',
    ];
    
    public function doctors()
    {
        return $this->belongsToMany(Doctor::class);
    }
}
