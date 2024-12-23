<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Subject extends Model
{
    use HasFactory;

    protected $fillable = ['semester_id', 'name'];

    // A subject belongs to a semester
    public function semester()
    {
        return $this->belongsTo(Semester::class);
    }

    // A subject has many books
    public function books()
    {
        return $this->hasMany(Book::class);
    }
}
