<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Student extends Model
{
    use HasFactory;
    
    protected $fillable = ['student_name','student_email','student_address','student_gender','student_image'];
    
    // public function courses()
    // {
    //     return $this->belongsToMany(Course::class);
    // }

    // public function enrollments()
    // {
    //     return $this->hasMany(Enrollment::class);
    // }
//     public function courses()
// {
//     return $this->belongsToMany(Course::class, 'teacher_course');
// }
}
