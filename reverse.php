<html>
   <body>
     <div class="wrapper">
       <form method="post">
         <div>
           <label>Masukkan Kalimat</label>
           <input type="text" name="text"/>
           <input type="submit" name="submit" value="kirim"/>
         </div>
       </form>
     </div>
   </body>
</html>

<?php
  if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $set = $_POST['text'];
    echo "<pre> $set </pre>";
    
    echo "<br>";
    $ubah = array_reverse(explode(" " ,$set));
    $set = join (' ' ,$ubah);
    echo $set;
}

?>