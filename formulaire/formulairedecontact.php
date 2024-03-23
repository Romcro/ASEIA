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

<link rel="stylesheet" href="ASEIA.css">