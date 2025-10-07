<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;



class Enrollment extends Model
{
    protected $table = 'enrollment';
    protected $primaryKey = 'id';
    protected $fillable = ['student_id', 'course_id', 'status', 'fee', 'join_date'];

    public function student(){
    return $this->belongsTo(Student::class, 'student_id');
}
    public function course(){
    return $this->belongsTo(Course::class, 'course_id');
    
}


}

