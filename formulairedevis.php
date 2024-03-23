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
  
  <title>CATEGORIE ASSISTANCE ADMINISTRATIVE ASEIA, Assistanat et Secrétariat pour Entreprises, Indépendants et Associations, page de formulaire de devis</title>


 	<link rel="stylesheet" href="styles/normalize.css">
  <link rel="stylesheet" href="ASEIA.css">
  
  <link rel="icon" type="image/png" href="favicon-96x96.png" />
  
  

</head>


<body>

<?php include('header.php'); ?>

<?php include('nav.php'); ?>

<section class="sectionformulaire">
<link rel="stylesheet" href="ASEIA.css">
  

  <div class="formulaire">
    <h3>DEVIS</h3>
    
    <form method="post" action="envoidevis.php" id="post name="post"> 

    <label for=""></label>
    <input type="text" id="fname" name="nom" placeholder="Vos nom et prénom">

    <label for="fname"></label>
    <input type="text" id="fname" name="structure" placeholder="Votre societé">



    <label for="categorie">Selectionnez une categorie</label><br />

       <select name="categorie" id="categorie">

          <option value="ASSISTANCE ADMINISTRATIVE">ASSISTANCE ADMINISTRATIVE</option>
          <option value="RELECTURE - CORRECTION">RELECTURE - CORRECTION</option>
          <option value="ASSISTANCE LINGUISTIQUE ANGLAIS ">ASSISTANCE LINGUISTIQUE ANGLAIS </option>
          <option value="TRANSCRIPTION AUDIO ">TRANSCRIPTION AUDIO </option>
          <option value="AUTRE">AUTRE</option>
           
       </select>

    <label for="emailAddress"></label>
    <input id="emailAddress" type="email" name="email" placeholder="Votre email">
    
    <label for="subject"></label>
    <textarea id="subject" name="message" placeholder="Votre message" style="height:200px"></textarea>    



    <input type="submit" value="Envoyer">
  </div>


</section>

<?php include('footer.php'); ?>

<?php include('conceptiongraphique.php'); ?>

<?php include('script.php'); ?>


</body>
</html>
