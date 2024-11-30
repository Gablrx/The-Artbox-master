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
    <!------------------------------------------------ HEADER -------------------------------------------->
    <header>
        <?php include('header.php'); ?> <!-- Injecte ici le contenu du fichier header.php -->
    </header>

    <!------------------------------------------------ MAIN ---------------------------------------------->
    <main>
        <?php
        include('oeuvres.php');

        /* Récupére l'id passé dans l'URL */
        $id = $_GET['id'];

        /* Pour chaque oeuvre du tableau oeuvres */
        foreach ($oeuvres as $oeuvre) : ?>
            <!-- On compare l'id de chaque oeuvre avec l'id passé dans l'url -->
            <!--  Si l'identifiant est le même que l'id passé dans l'URL  -->
            <?php if ($oeuvre['id'] == $id) : ?>

                <!--Affiche le détail de l'oeuvre correspondante : -->
                <article id="detail-oeuvre">
                    <div id="img-oeuvre">
                        <img src="<?php echo $oeuvre['image']; ?>" alt="<?php echo $oeuvre['titre']; ?>">
                    </div>
                    <div id="contenu-oeuvre">
                        <h1><?php echo $oeuvre['titre']; ?></h1>
                        <p class="description"><?php echo $oeuvre['artiste']; ?></p>
                        <p class="description-complete">
                            <?php echo $oeuvre['description']; ?>
                        </p>
                    </div>
                </article>

            <?php endif; ?>
        <?php endforeach ?>

    </main>

    <!--------------------------------------------- FOOTER ---------------------------------------------->
    <footer>
        <?php include('footer.php'); ?>
    </footer>

</body>

</html>