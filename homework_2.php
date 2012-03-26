<?php

   $number = 0;
   $array = range(20,1000,37);
   function find_3_prime($array)
   {
   	  foreach ($array as $value)
   	  {
		global $number;  
   	  	if (is_Prime($value))
   	  		$number++;
   	  	if ($number==3)
			 return $value;	
   	  }
   	  return -1;
   }
   function is_Prime($value)
   {
   	for($i=2; $i<=sqrt($value);$i++)
   	{
   		if ($value%$i==0)
		   {
		   	  return false;
		   }	
		   
   	}
   	return true;
   }
   
   function check_exists($array)
   {
   	  if (in_array(146, $array))
   	  	echo "The number 146 exists in the array<br>";
   	  else
   		echo "The number 146 does not exist in the array<br>";
   	  if (in_array(284, $array))
   	  	echo "The number 284 exists in the array<br>";
   	  else
   		echo "The number 284 does not exist in the array<br>";	
	   if (in_array(871, $array))
   	  	echo "The number 871 exists in the array<br>";
   	  else
   		echo "The number 871 does not exist in the array<br>";	 	
   }
   echo find_3_prime($array), "<br>";
   check_exists($array);
   
?>