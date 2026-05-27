<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Student extends Model
{
    use HasFactory;

    protected $fillable = [
        'student_id', 'first_name', 'last_name', 'email', 
        'phone', 'course', 'year_level'
    ];

    public function grades()
    {
        return $this->hasMany(Grade::class);
    }

    public function fullName()
    {
        return "{$this->first_name} {$this->last_name}";
    }
}