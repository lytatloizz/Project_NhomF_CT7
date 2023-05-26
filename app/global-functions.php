<?php

use App\Models\Classroom;
use App\Models\User;
use Illuminate\Support\Facades\Auth;

//get rule
function rule_number(){
    return User::find(Auth::id())->user_rule;
}

//get name rule
function rule($rule)
{
    if ($rule == '0') {
        return "admin";
    } elseif ($rule == '1') {
        return "student";
    } else {
        return "teacher";
    }
}
//get name class room
function getNameClassRoom($id)
{
    return Classroom::find($id)->class_name;
}
//get name user
function getNameUser($id){
    return User::find($id)->user_name;
}
//create time table
function createTimeTable($subjectS, $classroom)
{
    if (count($subjectS[$classroom]) > 1) {
        $k = array();
        $td = array();
        for ($i = 2; $i <= 8; $i++) {
            $td[$i] = '';
            foreach ($subjectS[$classroom] as $subject) {
                if ($subject->week_day == $i) {
                    array_push($k, $i);
                    $td[$i] .= '<p>' . $subject->subject_name . '</p>
                    <p><span>' . $subject->start_at . '</span> - <span>' . $subject->end_at . '</span></p>';
                }
            }
            if (in_array($i, $k) == false) {
                echo '<td></td>';
            } else {
                echo '<td>' . $td[$i] . '</td>';
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
//get week day name
function week_day($day)
{
    switch ($day) {
        case 2:
            return 'Monday';
            break;
        case 3:
            return 'Tuesday';
            break;
        case 4:
            return 'Wednesday';
            break;
        case 5:
            return 'Thursday';
            break;
        case 6:
            return 'Friday';
            break;
        case 7:
            return 'Saturday';
            break;
        case 8:
            return 'Sunday';
            break;
        default:
            return 'We have something wrong';
            break;
    }
}
