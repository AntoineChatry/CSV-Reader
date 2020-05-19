<?php
$fop = fopen('classeur1.csv', 'r');
if($fop === false)
{
   // Ouverture du fichier échouée
}
else
{
echo'<table>';

   $delimiter = ','; 
   while(($a = fgetcsv($fop, 0, $delimiter)) !== false) // Récupération d'une ligne
   {

  echo'<tr>';

      foreach($a as $val) // Parcours en boucle des cellules de la ligne
      {

      echo'<td>';
      echo $val; 
      echo'</td>';

      }

   echo'</tr>';

   }
   fclose($fop);

echo'</table>';

}
?>
