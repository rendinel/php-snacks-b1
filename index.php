<?php

$matches = array (
  array("eagle","cat",22,18),
  array("bull","wolf",45,33),
  array("raptor","lion",66,34),
);

echo "<br>";

echo $matches[0][0]." - ".$matches[0][1]." | ".$matches[0][2]." - ".$matches[0][3].".<br>";
echo $matches[1][0]." - ".$matches[1][1]." | ".$matches[1][2]." - ".$matches[1][3].".<br>";
echo $matches[2][0]." - ".$matches[2][1]." | ".$matches[2][2]." - ".$matches[2][3].".<br>";

echo "<br>";

for ($row = 0; $row < 3; $row++) {
  for ($col = 0; $col < 4; $col++) {
    // echo $matches[$row][$col]."<br>";
    echo $matches[$row][$col]." - ".$matches[$row][$col]." | ".$matches[$row][$col]." - ".$matches[$row][$col].".<br>";
  }
}
?>
