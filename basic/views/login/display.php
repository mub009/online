<?php
//print_r($data);
if(empty($data))
{
	echo "login failed";
}

else
{
$count=count($data);
for($i=0;$i<$count;$i++)
{
	//echo $data[$i]['Vchr_email'];
	//echo $data[$i]['Vchr_password'];
	echo "login success";
}
}
?>
