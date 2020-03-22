<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Simplon Charleville-Mézières</title>

    <!-- Bootstrap -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css"
        integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">

    <!-- Style  -->
    <link rel="stylesheet" href="css/style.css">

    <!-- Google Font -->
    <link href="https://fonts.googleapis.com/css?family=PT+Sans:400,700|Open+Sans&display=swap" rel="stylesheet">

    <!-- Font Awesome -->
    <script src="https://kit.fontawesome.com/839df3b8b1.js"></script>
</head>

<body>

    <!-- nav php -->
    <?php include 'php/navbar_menu.php' ?>

    <!-- section main -->
    <section id="main" class="container-fluid">
        <div class="row">
            <div class="main_img order-2 order-sm-1 col-sm-8">
                <img class="img-fluid" src="img/main.jpg" alt="main_photo">
                <p class="slogan d-none d-sm-block"><span>Simplon.co est un réseau de Fabriques solidaires inclusives</span><br><span>qui
                        proposent des formations gratuites aux métiers techniques</span><br><span> du numérique en
                        France et à l’étranger.</span></p>
                <p class="slogan d-sm-none"><span>Simplon.co est un réseau</span><br><span>de Fabriques solidaires inclusives</span><br><span>qui
                        proposent des formations gratuites</span><br><span>aux métiers techniques du numérique</span><br><span>en
                        France et à l’étranger.</span></p>
            </div>
            <div class="col  order-1 order-sm-2 col-sm-4 text-center">
                <img class="main_logo img-fluid mt-4" src="img/logo_lg.png" alt="logo_lg">
                <div class="adresse my-4 mb-sm-0">
                    <p><strong>CCI Ardennes Pôle Formation</strong><br>Campus Sup Ardennes<br>8 rue Claude Chrétien<br>08000 Charleville-Mézières</p>
                </div>
            </div>
        </div>
    </section>
    <!-- fin de section main -->

    <!-- section grid*3 -->
    <section id="grid" class="container-fluid">
        <div class="row text-sm-center">
            <div class="grid grid1 col-sm-6 col-lg-4 pt-5 pb-5">
                <i class="grid-icon d-none d-sm-block fas fa-laptop-code"></i>
                <a class="text-dark" href="/vitrine-simplon/php/formation.php">
                <h2 class="mb-3">Se former</h2>
                <p>Vous êtes intéressé ?<br>Découvrez nos formations<i
                        class="d-inline-block fas fa-chevron-right ml-2"></i></p>
                </a>
            </div>
            <div class="grid grid2 col-sm-6 col-lg-4 pt-5 pb-5">
                <i class="grid-icon d-none d-sm-block fas fa-graduation-cap"></i>
               <a href="/vitrine-simplon/php/inscription.php">
               <h2 class="mb-3">Postuler</h2>
                <p>On vous a convaincu ?<br>Pour postuler, c'est par ici<i class="fas fa-chevron-right ml-2"></i></p>
               </a>
            </div>
            <div class="grid grid3 col-sm-12 col-lg-4 pt-5 pb-5">
                <i class="grid-icon d-none d-sm-block fas fa-user-secret"></i>
                <a href="/vitrine-simplon/php/entreprise.php">
                <h2 class="mb-3">Côté entreprise</h2>
                <p class="pl-lg-5 pr-lg-5">Vous souhaitez faire connaissance avec nos apprenants ou découvrir nos
                    projets<i class="fas fa-chevron-right ml-2"></i></p></a>
            </div>
        </div>
    </section>
    <!-- fin section grid*3 -->

    <!-- footer php -->
    <?php include 'php/footer.php' ?>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js"
        integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"
        integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous">
    </script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"
        integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous">
    </script>
    <script src="js/navbar.js"></script>

</body>

</html>