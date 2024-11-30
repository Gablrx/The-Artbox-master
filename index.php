<!doctype html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="css/style.css">
    <title>The ArtBox</title>
</head>

<body>
    <!------------------------------------- HEADER ------------------------------------>
    <header>
        <?php include('header.php'); ?> <!-- Injecte ici le contenu du fichier header.php -->
    </header>

    <!-------------------------------------- MAIN ------------------------------------->
    <main>

        <div id="liste-oeuvres">

            <?php include('oeuvres.php');
            foreach ($oeuvres as $oeuvre) : ?>
                <!-- Pour chaque valeur du tableau oeuvres :  -->
                <article class="oeuvre">
                    <!-- Injection de l'id dans l'URL :-->
                    <a href="oeuvre.php?id=<?php echo $oeuvre['id']; ?>">
                        <!-- Affiche l'img de l'oeuvre : -->
                        <img src="<?php echo $oeuvre['image']; ?>" alt="<?php echo $oeuvre['titre']; ?>">
                        <!-- Affiche le titre de l'oeuvre -->
                        <h2><?php echo $oeuvre['titre']; ?></h2>
                        <!-- Affiche La description de l'oeuvre -->
                        <p class="description"><?php echo $oeuvre['artiste']; ?></p>
                    </a>
                </article>
            <?php endforeach ?>
        </div>

    </main>

    <!------------------------------------- FOOTER ------------------------------------>
    <footer>
        <?php include('footer.php'); ?>
    </footer>

</body>

</html>