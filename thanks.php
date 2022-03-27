<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=, initial-scale=1.0">
    <title>Document</title>
    <a href="form.php"></a>
</head>
<body>

<p>Merci <?php echo $_POST['firstname'] .''. $_POST['lastname']?>  de nous avoir contacté à propos de “<?php echo $_POST['select'] ?> ”.

Un de nos conseiller vous contactera soit à l’adresse <?php echo $_POST['email'] ?> ou par téléphone au <?php echo $_POST['phone'] ?> dans les plus brefs délais pour traiter votre demande : 

<?php echo $_POST['message'] ?>
</p>
</body>
</html

    
    <?php

// foreach($_POST as $key => $value) {
//     $contact[$key] = trim($value);
// }

$errors = [];
    
$countries = [
    'france' => 'France',
    'italy' => 'Italie',
    'ukraine' => 'Ukraine',
    
];

if ($_SERVER['REQUEST_METHOD'] === 'POST') {

    $contact = array_map('trim', $_POST);

    if (empty($contact['firstname'])) {
        $errors[] = 'Le prénom est obligatoire';
    }

    $firstnameMaxLength = 70;
    if (strlen($contact['firstname']) > $firstnameMaxLength) {
        $errors[] = 'Le prénom doit faire moins de ' . $firstnameMaxLength . ' caractères';
    }

    if (empty($contact['email'])) {
        $errors[] = 'L\'email est obligatoire';
    }

    $emailMaxLength = 255;
    if (strlen($contact['email']) > $emailMaxLength) {
        $errors[] = 'Le mail doit faire moins de ' . $emailMaxLength . ' caractères';
    }

    if (!filter_var($contact['email'], FILTER_VALIDATE_EMAIL)) {
        $errors[] = 'Mauvais format pour l\'email ' . htmlentities($contact['email']);
    }

    if (empty($contact['message'])) {
        $errors[] = 'Le message est obligatoire';
    }

    if (!key_exists($contact['country'], $countries)) {
        $errors[] = 'Le pays est invalide';
    }

    if (empty($errors)) {
        // traitement de mon form
        // insert en bdd
        // envoie de mail...

        header('Location: /index.php'); // redirection en GET (vide le POST)
    }
}
?>
