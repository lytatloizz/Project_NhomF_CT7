<?php
use App\Models\Classroom;

function rule($rule){
    if($rule == '0'){
        echo "admin";
    }elseif($rule == '1'){
        echo "student";
    }else{
        echo "teacher";
    }
}
function getNameClassRoom($id){
    return Classroom::find($id)->class_name;
}
function createTimeTable($subjectS, $classroom)
{
    if (count($subjectS[$classroom]) > 1) {
        $k = array();
        $td = array();
        for ($i = 2; $i <= 8; $i++) {
            $td[$i] = '';
            foreach ($subjectS[$classroom] as $subject) {
                if ($subject->week_day == $i) {
                    array_push($k,$i);
                    $td[$i] .= '<p>' . $subject->subject_name . '</p>
                    <p><span>' . $subject->start_at . '</span> - <span>' . $subject->end_at . '</span></p>';
                }
            }
            if(in_array($i,$k) == false){
                echo '<td></td>';
            }else{
                echo '<td>'.$td[$i].'</td>';
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