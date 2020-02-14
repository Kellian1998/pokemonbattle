<div class="container" id="combat1">
    <div class="row" id="combat1esp">
        <div class="col-sm-3" id="gridcard">

			<?php

$Pok1 = new Pokemon($name, $vie, $atak, $avatar);
?>
<img 
data-name="<?php echo $Pok1->getName()?>" 
data-life="<?php echo $Pok1->getvie()?>"
data-atak="<?php echo $Pok1->getAtak()?>" 
id="bulbizar"
src="img/<?php echo $Pok1->getAvatar()?>"><br><br>

        </div>
        <div class="col-sm-3" id="comeff">

			PIKACHU GAGNE !

		</div>
        <div class="col-sm-3" id="gridcard">

			<?php


$Pok2 = new Pokemon($name2, $vie2, $atak2, $avatar2);
?>
<img 
data-name="<?php echo $Pok2->getName()?>"
data-life="<?php echo $Pok2->getvie()?>"
data-atak="<?php echo $Pok2->getAtak()?>"  
class ="cardimage"
id="pikachu" 
src="img/<?php echo $Pok2->getAvatar()?>"><br><br>

		</div>
		
    </div>
</div><br>
<div class="col-12" id="rejouer">

<button type="button" class="btn btn-warning" onclick="window.location.reload(false)">REJOUER</button>

</div>