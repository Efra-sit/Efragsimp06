<?php
require_once("connexionMysql2.inc.php");
if (isset($_POST['valider']))
{
$requete="UPDATE etudiant SET nom='".$_POST['nom']."', prenom='".$_POST['prenom']."',adresse='".$_POST['adresse']."', tel='".$_POST['tel']."' WHERE matricule='".$_POST['matricule']."' ";
mysql_query($requete);
header ("Location:exam.php");
}
$requete3="SELECT * FROM etudiant WHERE matricule='".$_GET['matricule']."' ";
$resultat3=mysql_query($requete3);
$etudiant=mysql_fetch_array($resultat3);
?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Modification champ</title>
</head>

<body>
<form id="monform" name="form1" method="post" action="02.php">
<table width="300"  border="0" cellspacing="0" cellpadding="5">
<p>
	<tr>
		<td><label>Matricule :</td> <td><input type="hidden" name="matricule" value="<?php echo $etudiant['matricule'];?> " >
		<?php echo $etudiant['matricule'];?> </td>
		</label>
	</tr>
	<tr>
		<td><label>Nom :</td>
		<td><input type="text" name="nom" value="<?php echo $etudiant['nom'];?> " /></td>
		</label>
	</tr>
	<tr>
		<td><label>Prénom :</td>
		<td><input type="text" name="prenom" value="<?php echo $etudiant['prenom'];?> " /></td>
		</label>
	</tr>
	<tr>
		<td><label>Adresse :</td>
		<td><input type="text" name="adresse" value="<?php echo $etudiant['adresse'];?> " /></td>
		</label>
	</tr>
	<tr>
		<td><label>Tel :</td>
		<td><input type="text" name="tel" value="<?php echo $etudiant['tel'];?> " /></td>
		</label>
	</tr>
</table>
</p>
<p>
<p>
	<table width="300"  border="0" cellspacing="0" cellpadding="5">	
	<tr>
		<label>
		<td><input type="submit" name="valider" value="VALIDER" /></td>
		</label>
	</tr>
</p>
</form>	



</body>
</html>