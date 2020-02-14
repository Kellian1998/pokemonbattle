<div class="container" id="combat6">
    <div class="row" id="combat6esp">
        <div class="col-sm-3" id="gridcard">

        <?php

$Pok3 = new Pokemon($name3, $vie3, $atak3, $avatar3);
?>
<img 
data-name="<?php echo $Pok3->getName()?>"
data-life="<?php echo $Pok3->getvie()?>"
data-atak="<?php echo $Pok3->getAtak()?>"  
class ="cardimage"
id="salameche" 
src="img/<?php echo $Pok3->getAvatar()?>"><br><br>


        </div>
        <div class="col-sm-3" id="comeff">

SALAMECHE GAGNE !

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