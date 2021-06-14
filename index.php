<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP Projet05 Exercice03</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <div class="container-fluid col-11 p-3 m-4 border border-warning rounded justify-content-center">
        <div class="row ">
            <h1 class="col-12 text-secondary text-center">PHP Projet05 Exercice03</h1>
            <h2 class="col-12 text-info text-center">Créez un lien avec les paramètres "nom", "prénom" et "âge" dirigeant sur une autre page. 
            Si l'âge est supérieur à 18 et inférieur à 130 affichez ces paramètres. L'âge ne peut être qu'un entier.</h2>
        </div>
        <div class="row border border-primary rounded p-3 m-4 text-secondary justify-content-center">
            <a href="index.php?nom=Cécile&amp;prenom=Cécile&amp;age=41">Test des paramètres de l'url : </a>
        </div>
        <div class="row border border-primary rounded p-3 m-4 text-secondary justify-content-center">
            <?php 
            $_GET['age'] = (int)$_GET['age'];
            echo 'Nom : '. $_GET['nom']. ' '. 'Prénom : '. $_GET['prenom']. '  '. 'Âge : '. '  '. $_GET['age'];
            var_dump($_GET['age']);
            if($_GET['age'] >= 18 && $_GET['age'] < 111){
            echo 'Vous êtes majeur !';
            }elseif($_GET['age'] > 0 && $_GET['age'] < 18){
            echo '  '. 'Vous êtes mineur !';    
            }else{
            echo '  '. 'Veuillez rentrer un âge valide !';
            }           
            ?>
        </div>
    </div>
</body>
</html>