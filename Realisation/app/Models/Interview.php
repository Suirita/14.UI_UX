<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Interview extends Model
{
    protected $fillable = [
        'student_id',
        'branch_id',
    ];

    public function student()
    {
        return $this->hasOne(Student::class);
    }

    public function branches()
    {
        return $this->belongsToMany(Branch::class);
    }
}
