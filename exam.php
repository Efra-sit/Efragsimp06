<?php
require_once("connexionMysql2.inc.php");
//---ajouter
if (isset($_POST['ajouter']))
{
$requete2="INSERT INTO etudiant SET matricule='".$_POST['matricule']."', nom='".$_POST['nom']."', prenom='".$_POST['prenom']."',adresse='".$_POST['adresse']."' , tel='".$_POST['tel']."'  ";
$resultat2=mysql_query($requete2);
header ("Location:01.php");
}
//---modifier
if (isset($_POST['modifier']))
{
header ("Location:01.php");
}
//--supprimer
if (isset($_POST['supprimer']))
{
header ("Location:01.php");
}
//--annuler
if (isset($_POST['annuler']))
{
header ("Location:exam.php");
}
$requete="SELECT * FROM etudiant" ;
$resultat=mysql_query($requete);
?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Formulaire  étudiant</title>
</head>

<body>

<form id="monform" name="form1" method="post" action="exam.php">
<p>
<table width="300"  border="0" cellspacing="0" cellpadding="5">
	<tr>
		<td><label>Matricule :</td>
		<td><input type="text" name="matricule"> </td>
		</label>
	</tr>
	<tr>
		<td><label>Nom :</td>
		<td><input type="text" name="nom" ></td>
		</label>
	</tr>
	<tr>
		<td><label>Prénom :</td>
		<td><input type="text" name="prenom" ></td>
		</label>
	</tr>
	<tr>
		<td><label>Adresse :</td>
		<td><input type="text" name="adresse" ></td>
		</label>
	</tr>
	<tr>
		<td><label>Tel :</td>
		<td><input type="text" name="tel"></td>
		</label>
	</tr>
</table>
</p>
<p>
	<table width="300"  border="0" cellspacing="0" cellpadding="5">
		<td><input type="submit" name="ajouter" value= "AJOUTER" /></td>
		<td><input type="submit" name="modifier" value="MODIFIER" /></td>
		<td><input type="submit" name="supprimer" value="SUPPRIMER" /></td>
		<td><input type="submit" name="annuler" value="ANNULER" /></td>
	</table>
	</form>	
</p>


</body>
</html>