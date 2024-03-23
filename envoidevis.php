<?php
// Sécurité
class Securite
	{
		// Données entrantes
		public static function bdd($string)
		{
			// On regarde si le type de string est un nombre entier (int)
			if (ctype_digit($string))
			{
				$string = intval($string);
			}
			// Pour tous les autres types
			else
			{
				$string = addcslashes($string, '%_');
			}
			return $string;
		}
		// Données sortantes
		public static function html($string)
		{
			return htmlentities($string);
		}
	}
// Vérification 
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
// Récupération des variables et sécurisation des données
$nom         = Securite::bdd($_POST['nom']);
$prenom      = Securite::bdd($_POST['prenom']);
$structure   = Securite::bdd($_POST['structure']);
$email       = Securite::bdd($_POST['email']);
$categorie   = Securite::bdd($_POST['categorie']);
$message     = Securite::bdd($_POST['message']);
}
// Email du destinataire
$destinataire = 'contact@aseia.fr';
// Contenu de l'email
$contenu = 'Vous avez reçu une demande de devis de ' . $prenom . ' ' . $nom . ', dont l\'adresse mail est : ' . $email . '. Cette demande concerne la catégorie : ' . $categorie . '. Le message de l\'expéditeur est le suivant : ' . $message . '.';
// Envoi de l'e-mail	
mail($destinataire, $categorie, $contenu);
// Message pour indiquer que le message a été envoyé
//echo '<p class="ok">Votre message a bien été envoyé.</p>'; 

header('Location: mercimail.php');

