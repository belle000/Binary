<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Semester extends Model
{
    use HasFactory;

    protected $fillable = ['major_id', 'number'];

    // A semester belongs to a major
    public function major()
    {
        return $this->belongsTo(Major::class);
    }

    // A semester has many subjects
    public function subjects()
    {
        return $this->hasMany(Subject::class);
    }
}
