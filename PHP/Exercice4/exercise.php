<?php
function getAllMondaysOfMonth(int $year, int $month) {
    $result=[];
    $firstMonday=strtotime('next Monday', mktime(0,0,0,$month,0, $year));
    array_push($result, date('l j, M Y', $firstMonday));
    $nextMonday=$firstMonday;
    $thisMonth=$month;
    while($thisMonth==$month) {
        $nextMonday=strtotime('next Monday' . date('Y-m-d',$nextMonday));
        $thisMonth=date_parse(date('Y-m-d',$nextMonday))['month'];
        if($thisMonth==$month) {
            array_push($result, date('l j, M Y', $nextMonday));
        }
    }
    return $result;
};