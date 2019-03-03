<?php
$A=0;
$B=0;
$input;
for($i=0; $i<count($input); $i++) {
    $elemCurrent=$input[$i];
    
    //$input[$i][0]
    //if($input[$i][0]>$input[$i][1])
    if($elemCurrent[0]>$elemCurrent[1]) {
        $A++;
    }else if($elemCurrent[0]<$elemCurrent[1]) {
        $B++;
    };
};
if($A>$B) {
    $winner='A';
};
if($A<$B) {
    $winner='B';
}


