<?php
//array to string conversion
function arrayToString($arr,$separator=" ")
{
	return implode($separator,$arr);
}
/*
$class=array("Satvik",56,23,45);
echo arrayToString($class,"<br/>");
*/
//print current date
function currentDate($intext=false)
{
	if($intext==true)
	{
		return date('d-F-Y');
	}
	return date('d-m-Y');
}
//print any date
function anyDate($day,$month,$year,$intext=false)
{
	$any=mktime(0,0,0,$month,$day,$year);
	if($intext==false)
	{
		return strftime('%d-%m-%Y',$any);
	}
	return strftime('%d-%B-%Y',$any);
}
//print current time
function currentTime()
{
	return date('h:i:s');
}
//print last modification stamp
function getLastModStamp($intext=false)
{
	if($intext==true)
	{
		return date("d-m-Y, h:i:sa", getlastmod());
	}
	return date("d-F-Y, h:i:sa", getlastmod());
	
}


?>
