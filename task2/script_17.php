<?php
	$year=2014;
	if($year%400==0)
	{
		echo $year." is leap year";
	}
	elseif($year%4==0)
	{
		echo $year." is leap year";
	}
	else
	{
	echo $year." is not leap year";	
	}
?>