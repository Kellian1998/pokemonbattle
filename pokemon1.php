<?php

$Pok1 = new Pokemon($name, $vie, $atak, $avatar);
?>
<img 
data-name="<?php echo $Pok1->getName()?>" 
data-life="<?php echo $Pok1->getvie()?>"
data-atak="<?php echo $Pok1->getAtak()?>" 
id="bulbizar"
src="img/<?php echo $Pok1->getAvatar()?>">