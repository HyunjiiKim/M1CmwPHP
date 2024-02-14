<?php
    #TarificationDegressive.php
    echo "Saisissez la quantité que vous souhaitez: ";
    $QTE = readline();
    
    if($QTE<10){echo "Chaque article coûte 150 euros";
    }
    if($QTE>10 && $QTE<49){ echo "Chaque article coûte 135 euros";
    }
    if($QTE>49){ echo "Chaque article coûte 110 euros";
    }

?>