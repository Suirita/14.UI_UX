<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Branch extends Model
{

    protected $fillable = [
        'name',
        'interview_id',
        'question_id',
    ];

    public function interviews()
    {
        return $this->belongsToMany(Interview::class);
    }

    public function questions()
    {
        return $this->hasMany(Question::class);
    }
}
