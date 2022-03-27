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
  
          <form action="" method="POST" novalidate>
            <ul>
                <?php foreach ($errors as $error) : ?>
                    <li><?= $error ?></li>
                <?php endforeach; ?>
            </ul>
            
            <label for="firstname">Prénom</label>
            <input type="text" id="firstname" name="firstname" placeholder="John Doe" required value="<?= $contact['firstname'] ?? '' ?>">

            <label for="email">Email</label>
            <input type="email" id="email" name="email" value="<?= $contact['email']  ?? '' ?>" placeholder="john@doe.com" required>

            <label for="country">Pays</label>
            <select name="country" id="country">
                <?php foreach ($countries as $countryCode => $country) : ?>
                    <option value="<?= $countryCode ?>" 
                        <?= isset($contact['country']) && $contact['country'] === $countryCode ? 'selected' : '' ?>
                    >
                        <?= $country ?>
                    </option>
                <?php endforeach; ?>
            </select>

            <label for="message">Message</label>
            <textarea name="message" id="message" cols="30" rows="10" required><?= $contact['message'] ?? '' ?></textarea>
            <div>max 3000 caractères</div>
            <button>Envoyer</button>
        </form>
  
  <form action="thanks.php" method="post">
    <div>
      <label for="lastname">Nom :</label>
      <input type="text" id="lastname" name="lastname">
    </div>
    <div>
      <label for="firstname">Prénom :</label>
      <input type="text" id="firstname" name="firstname">
    </div>
    <div>
      <label for="email">Email :</label>
      <input type="email" id="email" name="email">
    </div>
    <div>
      <label for="phone">Télephone :</label>
      <input type="tel" id="phone" name="phone">
    </div>
    
    <div>
      <label for="select"></label>
      <select id="select" name="select">
        <option value="france" selected>France</option>
        <option value="italy">Italie</option>
        <option value="ukraine">Ukraine</option>
      </select>
    </div>
    <div>
      <label for="message">Message :</label>
      <textarea id="message" name="message"></textarea>
    </div>
    <div class="button">
      <button type="submit">Envoyer votre message</button>
    </div>
  </form>
</body>
</html>


