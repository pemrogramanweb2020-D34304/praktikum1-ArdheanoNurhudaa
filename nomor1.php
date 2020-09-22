<?php
echo "<center>";
echo "Soal 1" . "<br>";
$star = 5;
for ($a = 1; $a <= $star; $a++) {
  for ($i = 1; $i <= $a; $i++) {
    echo " &nbsp";
  }
  for ($c = $star; $c >= $a; $c -= 1) {
    echo "*";
  }
  echo "<br>";
}
  ?>