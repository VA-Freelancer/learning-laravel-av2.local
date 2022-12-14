<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Student extends Model
{
    use HasFactory;

    protected $fillable = ['first_name', 'last_name', 'age', 'group_number', 'course_number', 'specialty'];
    public function works()
    {
        return $this->hasMany(Work::class, 'student_id', 'id');
    }
}
