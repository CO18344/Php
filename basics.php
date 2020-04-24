<?php 
//1. How to define constants in php
define('c','3x10^8 m/s');
echo "Speed of light=".c; 	//$c is invalid as constants are not preceded by $ in php

//setting 3rd argument=true makes variable non-case sensitive
//default value is false 
define('speed','45m/s',true);
echo '<br/>Speed='.speed;
echo '<br/>Speed='.SpeeD;

echo '<br/><br/><b>Data Types in PHP</b><br/><br/>';
//2. Data Types
//PHP string
$name='Satvik Singh';$hello='Hello World';
echo $name.'<br/>'.$hello;

//PHP integer
$age=20;
echo '<br/><br/>My age='.$age;

//PHP Float
$percentage="95.69";
echo '<br/><br/>Marks='.$percentage."%";

//PHP Booleans
$flag=true;
echo '<br/><br/>Flag='.$flag;	//true will be displayed as 1 in browser
//false is displayed as empty by browsers

echo "<br/><br/><b>Type Conversion in PHP</b><br/><br/>";
//String to Integer
$str='63';//63 is string
$int=63;//63 is integer
echo $str + $int;

echo "<br/><br/><b>Variable Scope in PHP</b><br/><br/>";
//local and global

/*global-> declared outside all functions
global variables are accessed in global scope
*/

/*local-> declared inside the function
local variables are accessed in local scope
*/

$string="Hello<br/>";
function hello()
{
	echo $string;	//Undefined Variable beacuse $string has been defined in global scope
}
hello();
echo $string;

echo "<br/><b>A way to solve the above error</b><br/>";
function hello2()
{
	global $string;	//it brings global declarations into local scope
	echo $string;	
}
hElLo2();	//also note that function names are not case sensitive

echo "<br/><br/><b>Variable Variables in PHP</b><br/><br/>";
$first='second';
$second='Satvik';
echo $$first;

echo "<br/><br/><b>Inc Dec Variables in PHP</b><br/><br/>";
$var1=26;
echo ++$var1;

echo "<br/><br/><b>Comparison Operators in PHP</b><br/><br/>";
$a=25;
$b='25';

echo $a==$b;	//Equal
echo $a===$b;	//Identical
echo $a!=$b;	//Not Equal
echo $a<>$b;	//Not Equal
echo '<br/>';
echo $a!==$b;	//Not identical

echo "<br/><br/><b>Logical Operators in PHP</b><br/><br/>";
echo $a and $b;		//true
echo $a xor $b;		//false
echo $a or $b;		//true

echo "<br/><br/><b>Numeric Arrays in PHP</b><br/><br/>";
$students=array('Satvik','Ishan','Rajat','Yagyam');
echo $students[0].'<br/>'.$students[1];
$students[4]='Muku';
echo "<br/>".$students[4];

echo "<br/><br/><b>Associative Arrays in PHP</b><br/><br/>";
$satvik=array('firstname'=>'Satvik','lastname'=>'Singh','friend'=>'Raju','semester'=>'4th');
echo $satvik['friend'];
echo "<br/>";

echo "<br/><br/><b>Multi-Dimenstional Arrays in PHP</b><br/><br/>";
$satvik2=array('firstname'=>'Satvik','lastname'=>'Singh','friends'=>array('Raju','Ishu'),'semester'=>'4th');
//here $satvik2['friends'] is itself a numeric array
echo $satvik2['friends'][0];	//Raju

$satvik3=array('firstname'=>'Satvik','lastname'=>'Singh','friends'=>array('first'=>'Raju','second'=>'Ishu'),'semester'=>'4th');
echo '<br/>';
echo $satvik3['friends']['second'];		//Ishu
//$satvik['friends'] is itself an associative array

$satvik4=array('firstname'=>'Satvik','lastname'=>'Singh','friends'=>array('first'=>'Raju','Ishu'),'semester'=>'4th');
echo '<br/>';
echo $satvik4['friends'][0];	//Ishu
echo '<br/>';
echo $satvik4['friends']['first'];		//Raju

echo "<br/><br/><b>Quoting in PHP</b><br/><br/>";
//quoting basically refers to changing usual behaviour of an operator by quoting it with something
//This quoting is similar to shell scripting in Linux
echo '<br/>';
echo $name;
echo '<br/>';
echo '$name';
echo '<br/>';
echo "$name";
echo '<br/>';
//In php concatenation using + is not allowed;
//The output may be confusing for some peoples
//in second case single quotes ' ' quoted the usual behaviour of $;

echo "<br/><br/><b>Conditional Statements in PHP</b><br/><br/>";
//if-else
if($name=='Satvik Singh')
	echo 'You guessed right'.'<br/>';
else
	echo 'you guessed wrong'.'<br/>';

//while loop
$i=1;
$num=2;
echo '<br/>';
while($i<=10)
{
	echo $num."x".$i."=".($num * $i).'<br/>';
	$i++;
}

//do-while
$i=1;
echo '<br/>';
do
{
	echo $num."x".$i."=".($num * $i).'<br/>';
	$i++;
}while($i<=10);

//for loop
echo '<br/>';
for($i=1;$i<=10;$i++)
{
	echo $num."x".$i."=".($num * $i).'<br/>';
}

//for-each
//this loop works only on arrays
echo '<br/>';
$myarray=array('Satvik','Raju',"Yagu","Muki");
foreach($myarray as $value)
{
	echo "$value<br/>";
}

//another form
// used for associative arrays
echo '<br/>';
$myarray2=array('first'=>'Satvik','second'=>'Singh','third'=>'is','fourth'=>'a','fifth'=>'good','sixth'=>'boy');


foreach($myarray2 as $key => $value)
{
	//echo "Key=$key and Value=$value<br/>";
	echo $myarray2[$key].'<br/>';
}

//switch case
echo '<br/>';
$day="wed";
switch ($day) {
	case 'sun':echo "Sunday";
		# code...
		break;
	case 'mon':echo "Monday";
		# code...
		break;
	case 'tue':echo "Tuesday";
		# code...
		break;
	case 'wed':echo "Wednesday";
		# code...
		break;
	case 'thu':echo "Thursday";
		# code...
		break;
	case 'fri':echo "Friday";
		# code...
		break;
	case 'sat':echo "Saturday";
		# code...
		break;
		
	default:echo "false input";
		# code...
		break;
}

echo "<br/><br/><b>Function in PHP</b><br/><br/>";

function mul($x,$y)
{
	return $x*$y;
}
echo mul(2,3);
?>
