<!--  jklkl    -->


<?php include ('lib/php/verifier_connexion.php'); ?>

<html>
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
<div class="container">
    <div class="card bg-warning bg-gradient">
        <div class="card">
            <div class="card-header">
                <div class="card-dark bg-warning bg-gradient">
                    <nav class="nav nav-pills nav-fill">
                        <h5 class="display-6 nav-link text-dark bg-warning">Auto Teugol Occasion</h5>
                    </nav>
                </div>
            </div>

            <?php
            $voiture = new VoitureBD($cnx);
            if(isset($_GET['editer'])){
            ?><pre><?php
                var_dump($_GET);
                ?><pre><?php
                    extract($_GET,EXTR_OVERWRITE);
                    $voit=$voiture->mise_a_jourVoiture();
            }
            if(isset($_GET['inserer'])){
                $voit =$voiture->ajout_voiture();
                // TODO il manque des paramètres
            }
            ?>


            <div class="card">
                <div class="card-body">
                    <form class="row g-3" action="<?php print $_SERVER['PHP_SELF']; ?>">
                        <!--
                        <div class="col-md-12">
                            Exemple à effacer <input type="text" id="recup" >
                        </div>
                        -->
                        <div class="col-md-3">
                            <label for="matricule" class="form-label">N° matricule</label>
                            <input type="text" class="form-control" id="matricule" name="matricule">
                        </div>
                        <div class="col-md-4">
                            <label for="marque" class="form-label">Marque</label>
                            <input type="text" class="form-control" id="marque" name="marque">
                        </div>
                        <div class="col-md-5">
                            <label for="modele" class="form-label">Modèle</label>
                            <input type="text" class="form-control" id="modele" name="modele">
                        </div>
                        <div class="col-md-4">
                            <label for="carro" class="form-label">Carrosserie</label>
                            <input type="text" class="form-control" id="carro" name="carro">
                        </div>
                        <div class="col-md-4">
                            <label for="carburant" class="form-label">Carburant</label>
                            <input type="text" class="form-control" id="carburant" name="carburant">
                        </div>
                        <div class="col-md-4">
                            <label for="km" class="form-label">Kilométrage</label>
                            <input type="number" class="form-control" id="km" name="km">
                        </div>
                        <div class="col-md-3">
                            <label for="transmission" class="form-label">Transmission</label>
                            <input type="text" class="form-control" id="transmission" name="transmission">
                        </div>
                        <div class="col-md-3">
                            <label for="annee" class="form-label">Année</label>
                            <input type="text" class="form-control" id="annee" name="annee">
                        </div>
                        <div class="col-md-3">
                            <label for="prix" class="form-label">Prix (€)</label>
                            <input type="real" class="form-control" id="prix" name="prix">
                        </div>
                        <div class="col-md-3">
                            <label for="photo" class="form-label">Photo</label>
                            <input type="text" class="form-control" id="photo" name="photo">
                        </div>

                        <div class="col-4  button-center">
                            <input type="hidden" name="id_voiture " id=""id_voiture>
                            <button type="submit" class="btn btn-warning rounded-pill" id="editer" name="editer">Mettre à jour</button>
                            <button type="submit" class="btn btn-primary rounded-pill " id="inserer" name="inserer">Enregistrer</button>
                        </div>
                    </form>
                </div>
                </div>
            </div>

            </div>
            <div class="card text-muted bg-warning text-center ">
                <div class="container">
                    <a class="navbar-brand" href="#">
                        <img src="./images/hp.png" alt="" width="5%" height="5%">
                    </a>
                </div>
            </div>
        </div>
    </div>
</div>

</body>
</html>






