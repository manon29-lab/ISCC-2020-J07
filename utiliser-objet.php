<?php
$dt = new DateTime ("now");
echo "Date 1: ", $dt ->format("Y-m-d H:i:s P"), PHP_EOL;
$dt2 = new DateTime ("2020-06-22 09:00:00");
echo "<br> Date 2 :", $dt2 ->format("Y-m-d H:i:s P"), PHP_EOL;

echo "<p>" . date_diff($dt,$dt2)->format("%d Jours : %h Heures : %i Secondes%");

?>