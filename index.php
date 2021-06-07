<?php
$weapons = ['poing', 'fouet', 'pistolet'];
$opponentWeapon = $weapons[rand(0,2)]; 
$indyWeapon = ['poing', 'fouet', 'pistolet'];

switch ($opponentWeapon) {
  case $weapons[0]:
      echo $indyWeapon[2];
      break;
  case $weapons[1]:
    echo $indyWeapon[0];
      break;
      case $weapons[2]:
        echo $indyWeapon[1];
      break;
      default:
        echo ("prend ton arme !");
}

?>