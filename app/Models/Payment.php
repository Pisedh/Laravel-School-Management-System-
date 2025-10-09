<?php

namespace App\Models;


use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Payment extends Model
{
    protected $table = 'payments';
    protected $primaryKey = 'id';
    protected $fillable= [
        'student_id',
        'enrollment_id',
        'amount',
        'payment_method',
        'payment_date',
        'status',
        'reference_no',
        'description',
        'academic_year',
        'term',
        ];
    use HasFactory;


    public function enrollment(){
        return $this->belongsTo(Enrollment::class);
        
    }
    public function student(){
        return $this->belongsTo(Student::class,'student_id');
    }

}
