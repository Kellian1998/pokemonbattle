<div class="container" id="combat5">
    <div class="row" id="combat5esp">
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
        <div class="col-sm-3" id="comeff">

PIKACHU GAGNE !

</div>
        <div class="col-sm-3" id="gridcard">

        <?php

$Pok4 = new Pokemon($name4, $vie4, $atak4, $avatar4);
?>
<img 
data-name="<?php echo $Pok4->getName()?>"
data-life="<?php echo $Pok4->getvie()?>"
data-atak="<?php echo $Pok4->getAtak()?>"  
class ="cardimage"
id="carapuce" 
src="img/<?php echo $Pok4->getAvatar()?>"><br><br>
		

		</div>
		
    </div>
</div><br>
<div class="col-12" id="rejouer">

<button type="button" class="btn btn-warning" onclick="window.location.reload(false)">REJOUER</button>

</div>