<!DOCTYPE html>
<html lang="fr">
<head>
	<meta charset="UTF-8">
	<meta name=viewport content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
	<link rel="stylesheet" type="text/css" href="css/style.css">
	<title>Poke-Battle</title>
</head>
<body>

<?php include 'pokecrea.php'?>

 <div class="container" id="center">

 <div class="row">

	 <h1 class="col-12" id="Titre">Poke-Battle</h1>

	 <div class="col-12" id="background">

		 <img src="img/International_Pokémon_logo.svg.png" id="image">

	 </div>

	 <div class="col-12" id="btn">

<button type="button" class="btn btn-warning" id="bold">JOUER !</button>

	 </div>

 </div>

</div>

<div id="elem">

<div class="container" id="containerdisp">

    <div class="row">

        <div class="col-sm-3" id="gridcard">

		<?php include 'pokemon1.php'?><br><br>

		</div>

        <div class="col-sm-3" id="gridcard">

		<?php include 'pokemon2.php'?><br><br>

		</div>

		<div class="col-sm-3" id="gridcard">
			
		<?php include 'pokemon3.php'?><br><br>
		
		</div>

		<div class="col-sm-3" id="gridcard">
			
		<?php include 'pokemon4.php'?><br><br>
		
		</div>
		
	</div>
	
</div><br>

<div class="col-12" id="btn">

<button type="button" class="btn btn-warning" id="bbattle">BATTLE !</button>

</div>

<?php include 'combat1.php';?>
<?php include 'combat2.php';?>
<?php include 'combat3.php';?>
<?php include 'combat4.php';?>
<?php include 'combat5.php';?>
<?php include 'combat6.php';?>

</div>

</div>

 <script type  ="text/javascript" src="./javascript/function.js"></script>

</body>
</html>