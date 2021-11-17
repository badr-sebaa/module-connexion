<head>
    <meta charset="utf-8">
    <link rel="stylesheet" href="index.css">
    </head>
    <body>

        <!-- CONNECTION ET SELECTION DE LA DB-->
    <?php
        $bdd  =mysqli_connect("localhost" , "root" ,"root","moduleconnexion");
        $req = mysqli_query($bdd , "SELECT * FROM utilisateurs");
        $res = mysqli_fetch_all($req);
        var_dump($res);
    ?>

        <!-- CREATION DU TABLEAU -->

        <table>
            <!-- entete du tableau -->
    <thead>
    <tr> 
        <th scope="col">id</th>
        <th scope="col">login</th>
        <th scope="col">prenom</th>
        <th scope="col">nom</th>
        <th scope="col">password</th>
    </tr>
    </thead>
            <!-- corps du tableau -->
    <tbody>
        <?php
        foreach($res AS $key => $value){
            echo '<tr>';
            foreach($value AS $key2 => $value2){
            echo '<th>'.$value2.'</th>';
            }
            echo '</tr>';
        }
        ?>  
    </tbody>    
    </table>
    
    </body>
    </html>