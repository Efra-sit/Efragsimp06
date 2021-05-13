<?php
require_once("connexionMysql2.inc.php");
//--supprimer
if  (isset($_GET['supp']))
{
	$requete2="DELETE FROM etudiant WHERE matricule='".$_GET['matricule']."' ";
	mysqli_query($connexion, $requete2);
}
$requete="SELECT matricule, nom, prenom, adresse, tel FROM etudiant" ;
$resultat=mysqli_query($connexion, $requete);
?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Formulaire  étudiant</title>
</head>

<body>
<table width="500"  border="1" cellspacing="0" cellpadding="5">
	<tr>
		<td>Matricule</td>
		<td>Nom</td>
		<td>Prénom</td>
		<td>Adresse</td>
		<td>Téléphone</td>
		<td>Modifier</td>
		<td>Supprimer</td>
	</tr>
	
<?php while ($etudiant=mysqli_fetch_array($resultat)) { ?>
	<tr>
		<td><?php echo $etudiant['matricule']; ?></td>
		<td><?php echo $etudiant['nom']; ?></td>
		<td><?php echo $etudiant['prenom']; ?></td>
		<td><?php echo $etudiant['adresse']; ?></td>
		<td><?php echo $etudiant['tel']; ?></td>
		<td><a href="02.php?matricule=<?php echo $etudiant['matricule']; ?>" >Modifier</a></td>
		<td><a href="01.php?matricule=<?php echo $etudiant['matricule']; ?>&supp=ok" >Supprimer</a></td>
	</tr>
<?php } ?>
	
</table>



</body>
</html>