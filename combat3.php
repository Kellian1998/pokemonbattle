<div class="container" id="combat3">
    <div class="row" id="combat3esp">
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

CARAPUCE GAGNE !

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