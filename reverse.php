<?php
$set = "<pre>". "setyagus sucipto   sedang makan " ."</pre>";
echo $set;

echo "<br>";
$ubah = array_reverse(explode(' ', $set));
$set = join (' ', $ubah);
echo $set;

?>