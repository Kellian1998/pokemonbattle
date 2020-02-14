<?php

$Pok3 = new Pokemon($name3, $vie3, $atak3, $avatar3);
?>
<img 
data-name="<?php echo $Pok3->getName()?>"
data-life="<?php echo $Pok3->getvie()?>"
data-atak="<?php echo $Pok3->getAtak()?>"  
class ="cardimage"
id="salameche" 
src="img/<?php echo $Pok3->getAvatar()?>">