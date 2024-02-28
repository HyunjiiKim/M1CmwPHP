<?php
    #Enigme
    
    echo "Resolution de l'engime";
    echo "Remplissez par un chiffre compris entre 1 et 9. \n Chaque chiffre ne peut être utilisé qu'une seule fois.\n";
    echo "Saisissez le premier nombre: ";
    $num = readline();
    
        if(is_numeric($num)){
           if($num!=1 or $num!=2 or $num!=3 or $num!=4 or $num!=5 or $num!=6 or $num!=7 or $num!=8 or $num!=9){
            echo "Erreur ! Les nombres saisis doivent être compris entre 1 et 9";

           }
           else{
            $numR=$num;
            echo "Saisissez le deuxième nombre: ";
            $num1 = readline();
        
                if($num==$num1){
                    echo "Erreur! Vous ne pouvez pas saisir plusieurs fois le même chiffre";
                }
                else{
                    $numR = $numR*$num1;
                    echo "Saisissez le troisième nombre: ";
                    $num2 = readline();
                
                        if($num2==$num OR $num2==$num1){
                            echo "Erreur! Vous ne pouvez pas saisir plusieurs fois le même chiffre";
                        }
                        else{
                            $numR = $numR/$num3;
                            echo "Saisissez le quatrième nombre: ";
                            $num4 = readline();
                        
                                if($num4==$num OR $num4==$num1 OR $num4==$num2){
                                    echo "Erreur! Vous ne pouvez pas saisir plusieurs fois le même chiffre";
                                }
                                else{
                                    $numR = $numR+$num4;
                                    $numR = $numR+12;
                                    echo "Saisissez le cinquième nombre: ";
                                    $num5 = readline();
                                
                                        if($num5==$num OR $num5==$num1 OR $num5==$num2 or $num5==$num4){
                                            echo "Erreur! Vous ne pouvez pas saisir plusieurs fois le même chiffre";
                                        }
                                        else{
                                            $numR = $numR*$num5;
                                            echo "Saisissez le sixième nombre: ";
                                            $num6 = readline();
                                        
                                                if($num6==$num OR $num6==$num1 OR $num6==$num2 or $num6==$num4 or $num6==$num5){
                                                    echo "Erreur! Vous ne pouvez pas saisir plusieurs fois le même chiffre";
                                                }
                                                else{
                                                    $numR = $numR-$num6;
                                                    $numR = $numR-11;
                                                    echo "Saisissez le septième nombre: ";
                                                    $num7 = readline();
                                                
                                                        if($num7==$num OR $num7==$num1 OR $num7==$num2 or $num7==$num4 or $num7==$num5 or $num7==$num6){
                                                            echo "Erreur! Vous ne pouvez pas saisir plusieurs fois le même chiffre";
                                                        }
                                                        else{
                                                            $numR = $numR+$num7;
                                                            echo "Saisissez le huitième nombre: ";
                                                            $num8 = readline();
                                                
                                                        if($num8==$num OR $num8==$num1 OR $num8==$num2 or $num8==$num4 or $num8==$num5 or $num8==$num6 or $num8==$num7){
                                                            echo "Erreur! Vous ne pouvez pas saisir plusieurs fois le même chiffre";
                                                        }
                                                        else{
                                                            $numR = $numR*$num8;
                                                            echo "Saisissez le neuvième nombre: ";
                                                            $num9 = readline();
                                                        
                                                                if($num9==$num OR $num9==$num1 OR $num9==$num2 or $num9==$num4 or $num9==$num5 or $num9==$num6 or $num9==$num7 or $num9==$num8){
                                                                    echo "Erreur! Vous ne pouvez pas saisir plusieurs fois le même chiffre";
                                                                }
                                                                else{
                                                                    $numR = $numR/$num9;
                                                                    $numR = $numR-10;
                                                                    if ($numR==66) {
                                                                        echo "Bravo, vous avez gagné !";
                                                                    }   
                                                                    else {
                                                                        echo "Désolé, vous avez perdu !";
                                                                    }
                                                                }
                                                            }
                                                        }
                                                    }
                                                }
                                            }
                                        }
                                    }
                                }
                            }
            else{
                echo "Erreur ! Vous ne pouvez saisir que des valeurs numériques.";
                                                                    
                }
                                                        
                
                                                        
                                                        
                                                
                                                    
                                                  
                                                
                                                    
                                                    
                                        
                                           
                                
                                   
                                   
                        
                           
                
                   
        
           

  
?>
    