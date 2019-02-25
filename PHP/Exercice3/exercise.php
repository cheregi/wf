<?php

$input=[[1,2],[3,4],[5,6]];
//$winner;
$brotherA=0;
$brotherB=0;

foreach($input as $round) {
    if($round[0] > $round[1]) {
        $brotherA++;
    } else if ($round[0] < $round[1]) {
    $brotherB++;
    }
    //else nothing
}


if($brotherA > $brotherB) {
    $winner='A';
} else {
    $winner='B';
};

//teacher's version
//<?php
///**
// * Get winner
// *
// * Return the winner of a game containing multiple rounds
// *
// * @param array[] $input The input containing rounds
// *
// * @return string
// */
//function getWinner(array $input) : string
//{
//    $brotherA = 0;
//    $brotherB = 0;
//
//    foreach ($input as [$cardA, $cardB]) {
//        if ($cardA > $cardB) {
//            $brotherA++;
//        } else if ($cardA < $cardB) {
//            $brotherB++;
//        }
//    }
//    if ($brotherA > $brotherB) {
//        return 'A';
//    }
//    return 'B';
//}
//
//$winner = getWinner($input);




