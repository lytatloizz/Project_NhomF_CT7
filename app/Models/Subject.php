<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Subject extends Model
{
    use HasFactory;
    //primary key
    protected $primaryKey = 'subject_id';

    function scopeFindByClassroomId(Builder $query, $class_id)
    {
        return $query->where('classroom_id', $class_id);
    }
    function scopeFindByUserId(Builder $query, $user_id)
    {
        return $query->where('user_id', $user_id);
    }
}
