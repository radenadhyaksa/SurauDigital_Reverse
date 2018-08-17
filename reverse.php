<?php
$set =  "setyagus sucipto   sedang makan ";
echo "<pre> $set </pre>";

echo "<br>";
$ubah = array_reverse(explode(' ' ,$set));
$set = join (' ' ,$ubah);
echo $set;

?>