<?php
$year= date('Y');
$month=12;
$day=30;
$timestamp= strtotime("$year/$month/$day");
$week=idate('W', $timestamp);
echo $week, "<br>";
function getcreneau ($timestamp, $cre_j) {
    $j=idate('w', $timestamp);    
            if($j==0)  { $c=0; $dispo=0;}
            else { $c=($j-1)*4; $dispo=1; }
 return $dispo*($c+$cre_j);
}
echo getcreneau(strtotime('next wednsday'), 2);
echo strtotime('12:15pm')-strtotime('10:30am');
?>
