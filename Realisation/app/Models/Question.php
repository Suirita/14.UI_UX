<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Question extends Model
{
    protected $fillable = [
        'title',
        'description',
        'answer_id',
    ];

    public function branch()
    {
        return $this->belongsTo(Branch::class);
    }

    public function answer()
    {
        return $this->hasOne(Answer::class);
    }
}
