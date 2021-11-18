
 <!-- Head -->
<head>
    <meta charset="utf-8">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/magnific-popup.js/1.1.0/magnific-popup.min.css" rel="stylesheet" />
    <link rel="stylesheet" href="../css/inscription.css">
</head>


<!-- Main -->

<main>

<div class="formstyle">

                <?php 
                if(isset($_GET['reg_err']))
                {
                    $err = htmlspecialchars($_GET['reg_err']);

                    switch($err)
                    {
                        case 'success':
                        ?>
                            <div class="alert alert-success">
                                <strong>Succès</strong> inscription réussie !
                            </div>
                        <?php
                        break;

                        case 'password':
                        ?>
                            <div class="alert alert-danger">
                                <strong>Erreur</strong> mot de passe différent
                            </div>
                        <?php
                        break;

                        case 'pseudo_length':
                        ?>
                            <div class="alert alert-danger">
                                <strong>Erreur</strong> pseudo trop long
                            </div>
                        <?php 
                        
                        case 'already':
                        ?>
                            <div class="alert alert-danger">
                                <strong>Erreur</strong> compte deja existant
                            </div>
                        <?php 

                    }
                }
                ?>

    <h1>Inscription !</h1>

  <form action="inscription_traitement.php" method="post">

    <fieldset class="fieldset">
        
        <div class="champs">
        <input type="text" name="login" class="form-control" placeholder="Login" required="required" autocomplete="off">
        </div>

        <div class="champs">
        <input type="text" name="firstname" class="form-control" placeholder="FirstName" required="required" autocomplete="off">
        </div>

        <div class="champs">
        <input type="text" name="name" class="form-control" placeholder="Name" required="required" autocomplete="off">
        </div>

        <div class="champs">
        <input type="text" name="password" class="form-control" placeholder="Password" required="required" autocomplete="off">
        </div>
        
        <div class="champs">
        <input type="text" name="verify" class="form-control" placeholder="Type your password again" required="required" autocomplete="off">
        </div>

        <div class="champs">
        <input type="submit" name='submit' value="Inscription">
        </div>
    </fieldset>

  </form>
</div>
</main>
