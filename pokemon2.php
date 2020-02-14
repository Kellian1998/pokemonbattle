<?php


$Pok2 = new Pokemon($name2, $vie2, $atak2, $avatar2);
?>
<img 
data-name="<?php echo $Pok2->getName()?>"
data-life="<?php echo $Pok2->getvie()?>"
data-atak="<?php echo $Pok2->getAtak()?>"  
class ="cardimage"
id="pikachu" 
src="img/<?php echo $Pok2->getAvatar()?>">