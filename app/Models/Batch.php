<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Batch extends Model
{
    protected $table = 'batch';
    protected $primaryKey = 'id';
    protected $fillable = ['name', 'course_id','course_name', 'start_year', 'end_year', 'program'];
    use HasFactory;


    public function course(){
        return $this->belongsTo(Course::class);

    }

   
    
}
