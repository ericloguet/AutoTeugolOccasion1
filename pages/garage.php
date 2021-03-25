<!--  jklkl    -->
<?php
$voit = new VoitureBD($cnx);
if(isset($_GET['id_marque'])){
    $liste_voit =$voit->getVoituresByMq($_GET['id_marque']);
}
else{
    $liste_voit = $voit->getAllVoiture();
}
$nbr_voit = count($liste_voit);
//print 'photo :'.$liste_voit[0]->photo;
?>
<html>
<title>
</title>
<head>
    <title>Garage Auto</title>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.6.0/dist/umd/popper.min.js" integrity="sha384-KsvD1yqQ1/1+IA7gi3P0tyJcT3vR+NdBTt13hSJ2lnve8agRGXTTyNaBYmCR/Nwi" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.min.js" integrity="sha384-nsg8ua9HAw1y0W1btsyWgBklPnCUAFLuTMS2G72MMONqmOymq585AcH49TLBQObG" crossorigin="anonymous"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">
    <link rel="stylesheet" href="lib/css/style.css"/>
    <link rel="stylesheet" href="lib/css/custom.css"/>
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous"/>
</head>
<body>
<?php
$mq = new ThemeBD($cnx);
$liste_mq = $mq->getTheme();
$nbr_mq = count($liste_mq);
?>
<div class="container">
    <div class="card bg-warning bg-gradient">
        <h1 class="display-6 text-center">Auto Teugol Occasion </h1>
    </div>

    <h1 class="display-6 text-center">Nos marques </h1>

    <div class="navbar bg-light ">
        <div class="container">
            <?php
            for ($i = 0; $i < $nbr_mq; $i++) {
            ?>
            <a class="navbar-brand " href="index_.php?pages=garage.php&id_marque=<?php print $liste_mq[$i]->id_marque; ?>" class="lien">
                <img src="./admin/images/<?php print $liste_mq[$i]->logo; ?>" alt="..." width="35" height="35">
            </a>
        <?php
        }
        ?>
    </div>
    </nav>


            <div class="card-body">
                 <small class="breadcrumb-item nav justify-content-end"><a href="./index_.php?page=garage.php">Supprimer les filtres</a></small>
                </p>


                <div class="album py-5 bg-light">
                    <h6 class="text-center"><mark> L'une de ces voitures pourrait être la vôtre</mark> </h6>
                    <div class="row row-cols-1 row-cols-sm-2 row-cols-md-3 g-3">
                    <?php
                    for($i = 0; $i<$nbr_voit;$i++){
                    ?>
                            <div class="col">
                                <div class="card shadow-sm">
                                    <img src="./admin/images/<?php print $liste_voit[$i]->photo; ?>"
                                         class="bd-placeholder-img card-img-top" width="100%" height="100%" xmlns="http://www.w3.org/2000/svg" role="img" aria-label="Placeholder: Thumbnail" preserveAspectRatio="xMidYMid slice" focusable="false"><rect width="100%" height="100%" fill="#55595c"/><text x="50%" y="50%" fill="#eceeef" dy=".3em">

                                    <div class="card-body">
                                           <h5 class="card-title">
                                                <?php print $liste_voit[$i]->nom_marque; ?>
                                            </h5>
                                            <p class="card-text"><small class="text-muted">
                                                    <?php print $liste_voit[$i]->modele; ?>
                                                </small></p>
                                            <p class="card-text">
                                                <?php print $liste_voit[$i]->carburant.' | ';
                                               print $liste_voit[$i]->annee.' | ';
                                                print $liste_voit[$i]->km.' km '; ?></p>
                                            <h5 class="card-prix text-danger ">
                                                <?php print $liste_voit[$i]->prix." €"; ?> </i></h5>
                                            <p class="card-text"><small class="text-muted">12 mois garantie</small></p>
                                        <div class="d-flex justify-content-between align-items-center">
                                            <div class="btn-group">
                                                <button type="button" class="btn btn-sm btn-outline-secondary">view</button>

                                            </div>
                                            <em><small class="text-muted bg-warning"><?php print $liste_voit[$i]->transmission; ?></small></em>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <?php
                    }
                    ?>
                </div>

                <a href="./pages/accueil.php" class="btn btn-primary">Go somewhere</a>
            </div>

                <div class="card text-muted bg-warning text-center ">
                    <div class="container">
                        <a class="navbar-brand" href="#">
                            <img src="./admin/images/hp.png" alt="" width="5%" height="5%">
                        </a>
                    </div>

                </div>
        </div>
    </div>
</div>
</body>
</html>





