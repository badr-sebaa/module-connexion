
 <?php

// je crée des variable pour chaque donné 
$login = $_POST['login'];
$password = $_POST['password'];

        // CONNECTION ET SELECTION DE LA DB
        $bdd  =mysqli_connect("localhost" , "root" ,"root","moduleconnexion");

        // je récupere tout les utilisateurs 
        $req = mysqli_query($bdd , "SELECT * FROM `utilisateurs`");
        $res = mysqli_fetch_all($req);

          // je test si les donnés sont entré
          if(isset($_POST['submit'])){
            // je test si le mot de passe et le login existe dans la db
                foreach($res as $key => $value){
                    foreach($value as $key2 => $value2){
                        if($value2[2] == $login and $value[5] == $password){
                            // je redirige vers la page index
                            header('Location: ../index.php');
                        }
                        else{echo 'Mot de passe ou login incorrect ! ';}
                    }
                    
                }
                
            
        }

?>



 <!-- Head -->
<head>
    <meta charset="utf-8">
    <link rel="stylesheet" href="../css/connexion.css">
</head>


<!-- Main -->

<main>

<div class="formstyle">
    <h1>Connexion !</h1>

  <form action="../index.php" method="post">

    <fieldset class="fieldset">
        
        <div class="champs">
        <label for="login">Login:</label>
        <input type="text" id="login" name="login"></input>
        </div>

        <div class="champs">
        <label for="password">Password:</label>
        <input type="password" id="password" name="password"></input>
        </div>

        <div class="champs">
        <input type="submit" value="Envoyer">
        </div>
    </fieldset>

  </form>
</div>
</main>
