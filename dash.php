<?php

 $year=date('Y/');
 $day=date('d');
 $manth=date('m');
$year2=date('Y')+2;
$end_date=$year2.'/'.$day.'/'.$manth;
$date=date('Y/m/d');
$maonth_day=date('m/d');

if($date>='2020/5/26')
{
echo "today date is big";
}

?>