<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
  <a href="thanks.php"></a>
</head>
<body>
  <form action="thanks.php" method="post">
    <div>
      <label for="nom">Nom :</label>
      <input type="text" id="nom" name="user_name">
    </div>
    <div>
      <label for="prenom">Prénom :</label>
      <input type="text" id="prenom" name="user_first">
    </div>
    <div>
      <label for="courriel">Courriel :</label>
      <input type="email" id="courriel" name="user_email">
    </div>
    <div>
      <label for="phone">Télephone :</label>
      <input type="tel" id="phone" name="user_phone">
    </div>
    <div>
      <label for="sujetselect" id="sujetselect"></label>
      <select id="select" name="select">
        <option value="information" selected>Information</option>
        <option value="recruitment">Recrutement</option>
        <option value="other">Autres</option>
      </select>
    </div>
    <div>
      <label for="message">Message :</label>
      <textarea id="message" name="user_message"></textarea>
    </div>
    <div class="button">
      <button type="submit">Envoyer votre message</button>
    </div>
  </form>
</body>
</html>


