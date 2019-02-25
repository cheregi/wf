<?php
function getAllMondaysOfMonth($year, $month) {
    $result=[];

    for($day = 1; $day <= 31; $day++)
    {
        $time = mktime(0, 0, 0, $month, $day, $year);
        if (date('N', $time) == 1 && date('n', $time)==$month)
        {
            //'Monday 1, Feb 2021'
            array_push($result, date('l j, M Y', $time));
        }
    }

    return $result;
}

var_dump(getAllMondaysOfMonth(2019,2));
var_dump(getAllMondaysOfMonth(2019,12));