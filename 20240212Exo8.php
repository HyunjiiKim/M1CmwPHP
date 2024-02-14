<?php
      echo "Saisissez les secondes: ";
      $sec = readline();
      #calcul

      if($sec>3600){
            $hour = $sec%3600;
            $min = ($sec-(3600*$hour))%60;
            $sec = $sec-(3600*$hour)-(60*$min);
            echo "$hour heure $min min $sec sec";
  
      }
      elseif($sec>600){
            $min = $sec%60;
            $sec = $sec-(60*$min);
            echo "$min min $sec sec";
      }
      else{
            echo "$sec sec";
      }
   
?>