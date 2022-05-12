<?php 
	error_reporting(E_ALL);
	ini_set('display_errors',E_ALL);
	include "./include/traitement.php"
	
?>
<!DOCTYPE html>
<html lang="FR" class="no-js">
	<head>
		<meta charset="UTF-8" />
		<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1"> 
		<meta name="viewport" content="width=device-width, initial-scale=1.0"> 
		<title>Projet TP Formulaire</title>
		<meta name="description" content="Blueprint: Blueprint: Responsive Multi-Column Form" />
		<meta name="keywords" content="responsive form, inputs, html5, responsive, multi-column, fluid, media query, template" />
		<meta name="author" content="Codrops" />
		<link rel="shortcut icon" href="../favicon.ico">
		<link rel="stylesheet" type="text/css" href="css/default.css" />
		<link rel="stylesheet" type="text/css" href="css/component.css" />
		<script src="js/modernizr.custom.js"></script>
		<style>
			.error {
				color: green;
			}
		</style>
	</head>
	<body>
		<div class="container">
			<header class="clearfix">
				<span>Projet de TP  <span class="bp-icon bp-icon-about" data-content="Ajouter le script PHP avec les filtres et les fonctions expression regulieres qui valident les données saisies dans ce formulaire appliquer aussi les régles de sécurité comme vue au cours"></span></span>
				<h1>Tec Web Avancée Formulaire</h1>
				<nav>
					<a href="http://www.emena.org/SMIS6" class="bp-icon bp-icon-prev" data-info="Site Cours"><span> Ajouter le script PHP avec les filtres et les fonctions expression regulieres qui valident les données saisies dans ce formulaire appliquer aussi les régles de sécurité comme vue au cours</span></a>
									</nav>
			</header>	
			<div class="main">
				<form class="cbp-mc-form" action=<?php echo htmlspecialchars($_SERVER['PHP_SELF']);  ?> method="POST" >
					<div class="cbp-mc-column">
						<label for="first_name"> Nom</label>
	  					<input type="text" id="first_name" name="nom" placeholder="Alaoui">
						  <span class="error"><?php echo $nom_err ;  ?></span>
	  					<label for="last_name">Prénom</label>
	  					<input type="text" id="last_name" name="prenom" placeholder="Driss">
						  <span class="error"><?php echo $prenom_err ;  ?></span>
						
	  					<label for="email">Email Address</label>
	  					<input type="text" id="email" name="email" placeholder="dris@fso.ump.ma">
						  <span class="error"><?php echo $email_err ;  ?></span>
	  					<label for="country">Pays</label>
	  					<select id="country" name="pays" >
	  						<option value="">Choisir Pays</option>
	  						<option>Russie</option>
	  						<option>Maroc</option>
	  						<option>Ile Comore</option>
	  						<option>Mali</option>
	  						<option>Mauritanie</option>
	  						<option>Madagascare</option>
	  						<option>Senegal</option>


	  					</select>
						  <span class="error"><?php echo $pays_err;  ?></span>
	  					<label for="bio">CV</label>
	  					<textarea id="bio" name="cv"></textarea>
						  <span class="error"><?php echo $cv_err ;  ?></span>
	  				</div>
	  				<div class="cbp-mc-column">
	  					<label for="phone">Telephone Numero</label>
	  					<input type="text" id="phone" name="tele" placeholder="+212 999 999">
						  <span class="error"><?php echo $tele_err ;  ?></span>
						<label for="affiliations">Affiliations</label>
	  					<textarea id="affiliations" name="aff"></textarea>
						  <span class="error"><?php echo $aff_err ;  ?></span>
	  					<label>les cours</label>
	  					<select id="occupation" name="cour" >
	  						<option value="">Choisir la matiere</option>
	  						<option>Web avancée</option>
	  						<option>Ad Réseau</option>
	  						<option>Systeme Exploitation</option>
	  						<option>Base Données Av</option>
	  						<option>PFE</option>
	  						<option>Architecture</option>
	  						<option>Algoritmique</option>

	  					</select>
						  <span class="error"><?php echo $cour_err ;  ?></span>
	  					<label for="cat_name">choisir un nombre Hexadicimale</label>
	  					<input type="text" id="cat_name" name="hex" placeholder="F0A3">
						  <span class="error"><?php echo $hex_err ;  ?></span>
	  					<label for="gagdet">Chosir une adress IP</label>
	  					<input type="text" id="gagdet" name="ip" placeholder="193.200.10.132">
						  <span class="error"><?php echo $ip_err ;  ?></span>
	  				</div>
	  				<div class="cbp-mc-column">
	  					<label>Vos talents en programation</label>
	  					<select id="talent" name="lp" >
	  						<option value="">le langage Préféré</option>
	  						<option>Phyton</option>
	  						<option>C++</option>
	  						<option>JavaScript</option>
	  						<option>PHP</option>
	  						<option>C</option>
	  						<option>Java</option>
	  						<option>HTML</option>

	  					</select>
						  <span class="error"><?php echo $lp_err ;  ?></span>
						<label for="drink">Site web URL</label>
	  					<input type="text" id="drink" name="url" placeholder="www.Fso.ump.ma">
						  <span class="error"><?php echo $url_err ;  ?></span>
	  					<label for="power">Votre date de naissance</label>
	  					<input type="text" id="power" name="date" placeholder="la date">
						  <span class="error"><?php echo $date_err ;  ?></span>
	  					<label for="weapon">Langage Programation préféré</label>
	  					<input type="weapon" id="weapon" name="language" placeholder="PHP">
						  <span class="error"><?php echo $language_err ;  ?></span>
	  					<label for="comments">Dite A propos de votre PFE</label>
	  					<textarea id="comments" name="prop"></textarea>	
						  <span class="error"><?php echo $prop_err ;  ?></span>
	  				</div>
	  				<div class="cbp-mc-submit-wrap"><input class="cbp-mc-submit" type="submit" value="Enregistrer " /></div>
				</form>
			</div>
		</div>
	</body>
</html>
