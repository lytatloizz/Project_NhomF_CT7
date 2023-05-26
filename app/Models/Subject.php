<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class Subject extends Model
{
    use HasFactory;
    //primary key
    protected $primaryKey = 'subject_id';

    //relationship
    public function user()
    {
        return $this->belongsTo(User::class);
    }

    //Get subject by class room id
    function scopeFindByClassroomId(Builder $query, $class_id)
    {
        return $query->where('classroom_id', $class_id);
    }
    //Get subject by user id
    function scopeFindByUserId(Builder $query, $user_id)
    {
        return $query->where('user_id', $user_id);
    }
    //Add new subject
    function scopeAddSubject(Builder $query, Request $request){
        $request->validate([
            'end_at' => ['required', 'after:start_at'],
            'subject_numbers' => 'required|max:75',
        ]);
        $subject = new Subject;
        $subject->subject_name = $request->subject_name;
        $subject->subject_numbers = $request->subject_numbers;
        $subject->subject_description = $request->subject_description;
        $subject->start_at = $request->start_at;
        $subject->end_at = $request->end_at;
        $subject->week_day = $request->week_day;
        $subject->classroom_id = $request->classrooms;
        $subject->user_id = Auth::id();
        $subject->save();
    }
    //Edit subject
    function scopeEditSubjectById(Builder $query, Request $request){
        $request->validate([
            'end_at' => ['required', 'after:start_at'],
            'subject_numbers' => 'required|max:75',
        ]);
        $subject = Subject::find($request->subject_id);
        $subject->subject_name = $request->subject_name;
        $subject->subject_numbers = $request->subject_numbers;
        $subject->subject_description = $request->subject_description;
        $subject->start_at = $request->start_at;
        $subject->end_at = $request->end_at;
        $subject->week_day = $request->week_day;
        $subject->classroom_id = $request->classrooms;
        $subject->user_id = Auth::id();
        $subject->save();
    }
    //Delete subject
    function scopeDeletelSubjectById(Builder $query, $id){
        $subject = Subject::find($id);
        $subject->delete();
    }
}
