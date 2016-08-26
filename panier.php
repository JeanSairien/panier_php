<!DOCTYPE html>
<html>
<head>
	<!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

<!-- Optional theme -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">

<!-- Latest compiled and minified JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
	<title>Panier red</title>
</head>
				<body>
					<div class="container">
						<form method="POST" action="panier.php" >
						<div class="col-lg-12">
								<div class="col-md-4">
									<h2>user</h2>
										<input type="text" name="prixU"/>
											Prix:<?php echo $_POST['prixU']?>
										<input type="text" name="tvaU"/>
											tva:<?php echo $_POST['tvaU']?>
										<input type="text" name="quantU"/>
										quantitée:<?php echo $_POST['quantU']?>
										<?php
										$resultS = ($prixU.$tvaU*$quantU);
										echo $resultU 
										?>
								</div>

								<div class="col-md-4">
									<h2>serveur</h2>
										<input type="text" name="prixS"/>
											Prix:<?php echo $_POST['prixS']?>
										<input type="text" name="tvaS"/>
											tva:<?php echo $_POST['tvaS']?>
										<input type="text" name="quantS"/>
										quantitée:<?php echo $_POST['quantS']?>
										<?php
											$prixS = $_POST['prixR'] ;
											$tvaS = $_POST['tvaR'] ;
											$quantS = $_POST['quantR'] ;
											$resultS = ($prixS.$tvaS*$quantS );
										echo $resultS ; 
										?>
								</div>

								<div class="col-md-4">
								<h2>routeur</h2>
									<input type="text" name="prix"/>
											Prix:<?php echo $_POST['prixR']?>
										<input type="text" name="tvaR"/>
											tva:<?php echo $_POST['tvaR']?>
										<input type="text" name="quantR"/>
										quantitée:<?php echo $_POST['quantR']?>
										<?php
											 ;
											$prixR = $_POST['prixR'] ;
											$tvaR = $prixR*$_POST['tvaR'] / $Div ;
											$quantR = $_POST['quantR'] ;
											$resultR = $prixR.$tvaR*$quantR ;
											echo $resultR ; 
											echo $tvaR ;
										?>
								</div>



						<button type="submit"/>test</button>			

	</div>

</form>

</div>


</body>
</html>	
