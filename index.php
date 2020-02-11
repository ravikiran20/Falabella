<?php

echo 'Write a program that prints all the numbers from 1 to 100. However, for <br/> 
multiples of 3, instead of the number, print "Linio". For multiples of 5 print "IT". <br/> 
For numbers which are multiples of both 3 and 5, print "Linianos". <br/><br/>';

numbers(100);

function numbers($n)  
{
	$outputs = [3 => 'Linio', 5 => 'IT', 15 => 'Linianos'];
	for ($i = 1; $i <= $n; ++$i) {
		$s = '';
		$j = $i;
		foreach ($outputs as $key => $value){ 
			if (($i % $key) === 0) {
				$j = $i;
				$j = ' ' . $value;
			}
		}
		$s .= $j . '<br/>';
		echo $s;
	}
}