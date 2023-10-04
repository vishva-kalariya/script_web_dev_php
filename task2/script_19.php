<?php
	$a=26;
	$b=29;
	
	for($i=2; $i<$a; $i++)
	{
		if($a%$i==0)
		{
			$b++;
			break;
		}
	}
if ($b==0){
	echo $a. " is prime number";
}
else {
	echo $a. " is not prime number";
}
?>