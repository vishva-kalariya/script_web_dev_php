<?php
function myfunction($v1,$v2)
{
return $v1 . " " . $v2;
}
$a=array("mansi","vishva","disha");
print_r(array_reduce($a,"myfunction"));
?>
