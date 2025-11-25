<!DOCTYPE html>
<html>

<head>
    <title>Login</title>
</head>


<body>

        <!-- Creation d'un formulaire classique html-->

        <form action="" method="post">  <!-- method="post" qui me permet de recup les variables en $_POST-->
        <label>Votre nom :</label>
        <input name="name" id="name" type="text" /> <!-- name pour le nom de la variable-->
        <label>Votre âge :</label>
        <input name="age" id="age" type="number" /></p> <!-- age pour le nom de la variable-->
        <button type="submit">Valider</button>
        </form>

        <?php

            session_start(); // Ouvrir la session
            if (isset($_POST['name']) && isset($_POST['age'])){ // Si les variables names et age existent

                $_SESSION['name'] = $_POST['name']; // on prend le nom et on le met dans la session
                echo "Bonjour " . $_POST['name'] . ", "; // affichage du prenom
                echo "vous avez " . $_POST['age'] . " ans. <br>"; // affichage de l'âge
                echo "Pour acceder à votre page: <br>"; // Message pour le lien vers l'autre site 
                echo '<a link href="welcome.php"> Cliquez-ici </a>';  // Message vers l'autre site 

            }

        ?>
    </div>    

</body>

<footer>

</footer>

</html>



<!-- fichier 2 -->
<!DOCTYPE html>
<html>
<head>
    <title>Varsup</title>
</head>
<body>
    
    <?php

        session_start();
        if (isset($_SESSION['name'])) {
            echo "Bienvenue " . htmlspecialchars($_SESSION['name']);
        }

    ?>

    <form action="logout.php" method="post">
        <button type="submit">Se déconnecter</button>
    </form>

</body>
</html>



<!-- fichier 3 dans un 'logout.php'-->
 <?php
session_start();
session_unset();
session_destroy();
header("Location: login.php");
exit;
?>