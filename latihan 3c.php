<?php
function pangkat($angka, $pangkat) {
  return pow($angka, $pangkat);
}
echo 5 . " pangkat " . 4 . " = " . pangkat(5, 4);
?>