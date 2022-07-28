<?php
    $bil = array(283, 182, 381, 119, 391, 591, 123, 124, 284, 215, 312.);
    $min = $bil[0];
    for ($i = 0; $i <=count($bil)-1; $i++)
     {
        if ($bil[$i] < $min)  $min = $bil[$i];
     }
     echo "array (283, 182, 381, 119, 391, 591, 123, 124, 284, 215, 312) <br>";
     echo "bilangan terkecil adalah : ".$min;
    
?>