<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Course extends Model
{
    use HasFactory;
    protected $fillable = ['course_id','course_name','course_des'];

    public function teacher()
    {
        return $this->belongsTo(Teacher::class);
    }
    
    // public function students()
    // {
    //     return $this->belongsToMany(Student::class);
    // }
//     public function teachers()
// {
//     return $this->belongsToMany(Teacher::class, 'teachercourse');
// }
}
