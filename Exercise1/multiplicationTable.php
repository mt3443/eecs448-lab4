<?php
echo "<html> <body style='width: 3000px; overflow-x: scroll;'>";
  for($i = 1; $i <= 100; $i++) {
    echo "<div>";
    for($j = 1; $j <= 100; $j++) {
      echo $i * $j;
    }
    echo "</div>";
  }
echo "</body> </html>";
?>
