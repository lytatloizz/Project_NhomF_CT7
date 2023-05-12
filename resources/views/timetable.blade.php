<?php

use App\Models\Classroom;

function getNameClassRoom($id){
    return Classroom::find($id)->class_name;
}
function createTimeTable($subjectS, $classroom)
{
    if (count($subjectS[$classroom]) > 1) {
        $k = array();
        for ($i = 2; $i <= 8; $i++) {
            foreach ($subjectS[$classroom] as $subject) {
                if ($subject->week_day == $i) {
                    array_push($k,$i);
                    echo '  <td>
                        <p>' . $subject->subject_name . '</p>
                        <p><span>' . $subject->start_at . '</span> - <span>' . $subject->end_at . '</span></p>
                    </td>';
                }
            }
            if(in_array($i,$k) == false){
                echo '<td></td>';
            }
        }
    } else {
        foreach ($subjectS[$classroom] as $subject) {
            $k = array('',);
            for ($i = 2; $i <= 8; $i++) {
                if ($subject->week_day == $i) {
                    $k[0] = $i;
                    echo '  <td>
                        <p>' . $subject->subject_name . '</p>
                        <p><span>' . $subject->start_at . '</span> - <span>' . $subject->end_at . '</span></p>
                    </td>';
                }
                if ($k[0] != $i) {
                    echo '<td></td>';
                }
            }
        }
    }
}
?>
@extends('index')
@section('content')

<table class="table table-striped table-bordered timetable">
    <thead>
        <tr class="info">
            <th scope="col">#</th>
            <th scope="col">Monday</th>
            <th scope="col">Tuesday</th>
            <th scope="col">Wednesday</th>
            <th scope="col">Thursday</th>
            <th scope="col">Friday</th>
            <th scope="col">Saturday</th>
            <th scope="col">Sunday</th>
        </tr>
    </thead>
    <tbody>
        @foreach($checkclassroom as $classroom)
        <tr>
            <th>{{getNameClassRoom($classroom)}}</th>
            {{createTimeTable($subjectS, $classroom)}}
        </tr>
        @endforeach
    </tbody>
</table>

@endsection