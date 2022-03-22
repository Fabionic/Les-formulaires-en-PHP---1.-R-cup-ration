<!doctype html>

<html lang="fr">

<head>
  <meta charset="utf-8">
  <title>Titre de la page</title>
  <link rel="stylesheet" href="style.css">
  <script src="script.js"></script>


</head>

<form  action="/ma-page-de-traitement"  method="post" id="contactForm">

<?php

  echo  $_POST['user_name'];

?>


    <div>

      <label  for="prénom">Prénom :</label>

      <input  type="text"  id="prénom"  name="firstname">

    </div>

    <div>

      <label  for="nom">Nom :</label>

      <input  type="text"  id="nom"  name="lastname">

    </div>

    <div>

      <input type="select">
      
        <libellé>Quel est votre sport préféré ?</libellé>

      <select size="1"> 
        
        <option valeur="fr">Pétanque</option>
        <option valeur="nl">Bowling</option>
        <option valeur="en">Natation</option>
        <option valeur="other">Autre</option>
      </select>
      </input>
    
    </div> 

    <div>

      <label  for="courriel">Courriel :</label>

        <input  type="email"  id="courriel"  name="user_email">

    </div>

    <div>

      <label  for="téléphone">Téléphone :</label>

        <input  type="phone"  id="téléphone"  name="user_phone">

    </div>

    <div>

      <label  for="message">Message :</label>

      <textarea  id="message"  name="user_message"></textarea>

    </div>

    <div  class="button">

      <button  type="submit">Envoyer votre message</button>

    </div>
    
  </form>
  
  </html>


