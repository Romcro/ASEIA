<!DOCTYPE html>
<html lang="fr">
<head>
	
	<!-- Global site tag (gtag.js) - Google Analytics -->
<script async src="https://www.googletagmanager.com/gtag/js?id=UA-129788818-1"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'UA-129788818-1');
</script>
	
	
	
	<meta charset="UTF-8">
	<meta http-equiv="Cache-control" content="public/private/no-cache/no-store">

	<meta name="description"
    content="" />

 	<meta name="keywords"
    content="" />
  
  <title>CATEGORIE ASSISTANCE ADMINISTRATIVE ASEIA, Assistanat et Secrétariat pour Entreprises, Indépendants et Associations, formulaire de contact</title>


 	<link rel="stylesheet" href="styles/normalize.css">
  <link rel="stylesheet" href="ASEIA.css">
  
  <link rel="icon" type="image/png" href="favicon-96x96.png" />
  
  

</head>


<body>

<?php include('header.php'); ?>

<?php include('nav.php'); ?>


<section class="sectionformulaire">




<div class="formulaire">
  <h3>Formulaire de contact</h3>

  <form method="post" action="envoicontact.php" id="post name="post"> 
    
    <label for="fname"></label>
    <input type="text" id="nom" name="nom" placeholder="Vos nom et prénom">

    <label for="fname"></label>
    <input type="text" id="structure" name="structure" placeholder="Votre structure">

    <label for="sujet"></label>
    <input type="text" id="sujet" name="sujet" placeholder="L'objet de votre message">

    <label for="emailAddress"></label>
    <input id="email" type="email" name="email" placeholder="Votre email">


    <label for="subject"></label>
    <textarea id="message" name="message" placeholder="Votre message" style="height:200px"></textarea>

    <input type="submit" value="Envoyer">
  </form>
</div>




</section>



<?php include('footer.php'); ?>

<?php include('conceptiongraphique.php'); ?>

<?php include('script.php'); ?>


</body>
</html>
