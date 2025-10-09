<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Student extends Model
{
    //
    protected $table = 'students';
    protected $primaryKey = 'id';
    protected $fillable = ['name','gender','date_of_birth', 'email', 'phone', 'address'];
    use HasFactory;

    public function payments()
{
    return $this->hasMany(Payment::class, 'student_id');
}

}
