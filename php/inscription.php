
 <?php

// je crée des variable pour chaque donné 
$login = $_POST['login'];
$firstname = $_POST['firstname'];
$name = $_POST['name'];
$password = $_POST['password'];

        // CONNECTION ET SELECTION DE LA DB
        $bdd  =mysqli_connect("localhost" , "root" ,"root","moduleconnexion");

        // je test si les donnés sont entré
        if(isset($_POST['submit'])){
            // je test si le mot de passe et la verification sont les memes 
            if($_POST['password'] == $_POST['verify']){ 
                // j'ajoute les donnés a la bdd
                $req = mysqli_query($bdd , "INSERT INTO `utilisateurs`(`login`, `prenom`, `nom`, `password`) VALUES ('$login','$firstname','$name','$password')");
                // je redirige vers la page index
                header('Location: ../index.php');
            }
        }
?>



 <!-- Head -->
<head>
    <meta charset="utf-8">
    <link rel="stylesheet" href="../css/inscription.css">
</head>


<!-- Main -->

<main>

<div class="formstyle">
    <h1>Inscription !</h1>

  <form action="#" method="post">

    <fieldset class="fieldset">
        
        <div class="champs">
        <label for="login">Login:</label>
        <input type="text" id="login" name="login"></input>
        </div>

        <div class="champs">
        <label for="name">Nom:</label>
        <input type="text" id="name" name="name"></input>
        </div>

        <div class="champs">
        <label for="firstname">Prénom:</label>
        <input type="text" id="firstname" name="firstname"></input>
        </div>

        <div class="champs">
        <label for="password">Password:</label>
        <input type="password" id="password" name="password"></input>
        </div>
        
        <div class="champs">
        <label for="verify">Write your Password again:</label>
        <input type="password" id="verify" name="verify"></input>
        </div>

        <div class="champs">
        <input type="submit" name='submit' value="Envoyer">
        </div>
    </fieldset>

  </form>
</div>
</main>
