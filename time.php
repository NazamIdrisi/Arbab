
<?php
//$d=mktime(11, 14, 54, 8, 12, 2014);
//echo "Created date is " . date("Y-m-d h:i:sa", $d);
?>



<?php
$dt = new DateTime();
$date= $dt->format('Y-m-d H:i:s');

echo $date;
?>