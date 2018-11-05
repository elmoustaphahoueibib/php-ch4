
<?php
/* Les variables qui ne sont pas valides sont mavar parcequ'on doit ajouté le signe $ avant chaque variable en php
  est celle ci  son syntax nest pas correcte  ($hotel4*) */

$x="PostgreSQL";
/*echo "$x";*/
echo $GLOBALS['x'];
$y="MySQL";
/*echo "$y";*/
echo $GLOBALS['y'];
$z=&$x;
/*echo "$z";*/
echo $GLOBALS['z'];

$x = "7 Personnes";
$y=(integer) $x;
$x="9E3";
$z=(double) $x;

echo $x;
echo $y;
echo $z;
?>




