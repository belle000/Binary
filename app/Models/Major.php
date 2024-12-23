<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Major extends Model
{
    use HasFactory;

    protected $fillable = ['name'];

    // A major has many semesters
    public function semesters()
    {
        return $this->hasMany(Semester::class);
    }
}
