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

<p>Merci <?php echo $_POST['user_first'] .''. $_POST['user_name']?>  de nous avoir contacté à propos de “<?php echo $_POST['select'] ?> ”.

Un de nos conseiller vous contactera soit à l’adresse <?php echo $_POST['user_email'] ?> ou par téléphone au <?php echo $_POST['user_phone'] ?> dans les plus brefs délais pour traiter votre demande : 

<?php echo $_POST['user_message'] ?>
</p>
</body>
</html
