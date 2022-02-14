<!DOCTYPE html>
<html>
<body>

<?php
$t = date("H");
echo "<p>The hour (Jesus) is " . $t; 
echo ", and will give the following message:</p>";

if ($t < "10") {
  echo "ha en bra dag!";
} elseif ($t < "20") {
  echo "ha en bra kväll!";
} else {
  echo "ha en dålig dag!";
}
?>
 
</body>
</html>
