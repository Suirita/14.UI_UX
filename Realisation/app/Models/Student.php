<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Student extends Model
{
    protected $fillable = [
        'firstName',
        'lastName',
        'interview_id',
        'answer_id',
    ];

    public function interview()
    {
        return $this->belongsTo(Interview::class);
    }

    public function answer()
    {
        return $this->hasOne(Answer::class);
    }
}
