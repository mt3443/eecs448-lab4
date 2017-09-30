<?php

	echo "<table>";
	
	for($i = 0; $i < 101; $i++) {
		echo "<tr>";
		
		for($j = 0; $j < 101; $j++) {
			
			if($i == 0 && $j == 0) {
				echo "<td></td>";
			} else if($i == 0) {
				echo "<td>" . $j . "</td>";
			} else if($j == 0) {
				echo "<td>" . $i . "</td>";
			} else {
				echo "<td>" . $i * $j . "</td>";
			}
		}
		
		echo "</tr>";
	}
	
	echo "</table>";

?>