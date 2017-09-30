<?php
	echo "<html><body>";
	
	$q1input = $_POST["1"];
	$q2input = $_POST["2"];
	$q3input = $_POST["3"];
	$q4input = $_POST["4"];
	$q5input = $_POST["5"];
	
	echo "<p>1. What is the square root of 25?</p>";
	echo "Your answer: " . $q1input . "<br>";
	echo "<b>Correct answer: 5</b><br><br>";
	
	echo "<p>2. What is 18 + 4?</p>";
	echo "Your answer: " . $q2input . "<br>";
	echo "<b>Correct answer: 22</b><br><br>";
	
	echo "<p>3. What is 97 - 5?</p>";
	echo "Your answer: " . $q3input . "<br>";
	echo "<b>Correct answer: 92</b><br><br>";
	
	echo "<p>4. What is 8^2?</p>";
	echo "Your answer: " . $q4input . "<br>";
	echo "<b>Correct answer: 64</b><br><br>";
	
	echo "<p>5. What is 3 * 11?</p>";
	echo "Your answer: " . $q5input . "<br>";
	echo "<b>Correct answer: 33</b><br><br><br>";
	
	$total = 100;
	
	if($q1input != 5) {
		$total -= 20;
	}
	
	if($q2input != 22) {
		$total -= 20;
	}
	
	if($q3input != 92) {
		$total -= 20;
	}
	
	if($q4input != 64) {
		$total -= 20;
	}
	
	if($q5input != 33) {
		$total -= 20;
	}
	
	$correct = $total / 20;
	
	echo "<h2>You answered " . $correct . " questions correctly!</h2>";
	echo "<h2>Your score: " . $total . "%</h2>";
?>