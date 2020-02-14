<?php

$Pok4 = new Pokemon($name4, $vie4, $atak4, $avatar4);
?>
<img 
data-name="<?php echo $Pok4->getName()?>"
data-life="<?php echo $Pok4->getvie()?>"
data-atak="<?php echo $Pok4->getAtak()?>"  
class ="cardimage"
id="carapuce" 
src="img/<?php echo $Pok4->getAvatar()?>">