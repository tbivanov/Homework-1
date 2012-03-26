<?php
$result = $_GET["number"];
if (!is_numeric($result))
	echo "<font color=\"red\">The parameter is not a number</font>";
elseif (!($result>=0 && $result<=19999))
	echo "<font color=\"red\">The parameter is not within the range [0,19999] </font>";
else
{
   	for($i=2; $i<=sqrt($result);$i++)
   	{
   		if ($result%$i==0)
		   {
		   	  echo "<font color=\"blue\">The number ", $result ," is not prime </font>";
		   	  return;
		   }	
		   
   	}
   	echo "The number ", $result, " is prime";
}
?>