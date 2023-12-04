<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Doctor;

class Slot extends Model
{
    use HasFactory;

    protected $fillable = [
        'slot',
    ];

    public function doctors()
    {
        return $this->belongsToMany(Doctor::class);
    }
}
