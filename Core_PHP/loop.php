<!-- Often when you write code, you want the same block of code to run over and over again a certain number of times. So, instead of adding several almost equal code ...
 -->
<!-- 
1. for loop
2. while loop
3. do while loop
4. foreach loop --> <!-- Array -->

<?php
	
	// for ($i=1; $i <= 10; $i++) { 
		
	// 	echo "<h1>Sharvan Kumar</h1>";

	// 	// echo "<br>";
	// }

	// $i = 1;
	// while ($i <= 10) {
	// 	echo "<h1>Sharvan Kumar</h1>";
	// 	$i++;
	// }
	
	// $i = 10;
	// do {
	// 	echo $i;
	// 	echo "<br>";

	// 	$i++;
	// } while ($i <= 50);

	// for ($i=1; $i <= 10; $i++) { 
		
	// 	if ($i%2!=0) {
	// 		echo $i;
	// 		echo "<br>";
	// 	}

		
	// }

	// $number = 5;

	// for ($i=1; $i <= 10; $i++) { 
		
	// 	echo $number . " * ". $i . "=" . $number * $i;

	// 	echo "<br>";


	// }
	
	// $sum = 0;
	// for ($i=1; $i <= 10; $i++) { 
		
	// 	$sum = $sum + $i; // 0 + 1 // 1 

	// }


	// echo $sum;
	
	// $i = 1;
	// $sum = 0;
	// while ($i<= 10) {
	// 	$sum = $sum + $i;
	// 	$i++;
	// }

	// echo $sum;
	

	// 123

	// 1 + 2 + 3


	// 5
	// 5*4*3*2*1 = 120



	
	// for ($i=2000; $i <= 2010; $i++) { 

	// 	if ($i%4==0) {
	// 		echo $i;
	// 		echo "<br>";
	// 	}
	// 	// echo $i;

		
	// }

	$number = 4;

	$fact = 1;
	for ($i=$number; $i > 0; $i--) { 
		
		$fact = $fact * $i;
		// echo $i;
		// echo "<br>";
	}

	echo $fact;



?>