<?php
$set = "setyagus sucipto sedang makan ";
echo $set;

echo "<br>";
$ubah = array_reverse(explode(' ', $set));
$set = join (' ', $ubah);
echo $set;

?>