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
echo getcreneau(strtotime('next wednesday'), 2),"<br>";
echo strtotime('12:15pm')-strtotime('10:30am');
echo "<br>", idate('w', strtotime("next tuesday"));
echo "<br>", idate('w', strtotime("next wednesday"));
echo "<br>", idate('m', strtotime("next thursday"));
echo "<br>", date('Y')-1;
?>
