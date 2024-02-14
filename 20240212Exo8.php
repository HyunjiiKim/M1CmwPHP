<?php
      echo "Saisissez les secondes: ";
      $sec = readline();
      #calcul
      $hour = 3600%$sec;
      $min = 60%($sec-$hour);
      $sec = ;

      echo "$hour heure $min min $sec sec";
  