<?php

echo 'Saisissez une note A: ';
$A2=readline();
echo '\nSaisissez une note B: ';
$B2=readline();

$noteF=(min($A2,$B2)*(abs($A2-$B2))+max($A2,$B2)*(20-abs($A2-$B2)))/20;

echo "votre note est $noteF sur 20."

?>