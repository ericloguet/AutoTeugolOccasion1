<!--  jklkl    -->

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
<div class="container">
    <div class="card bg-warning bg-gradient">
        <div class="card">
            <div class="card-header">
                <div class="card-dark bg-warning bg-gradient">
                    <nav class="nav nav-pills nav-fill">
                        <h5 class=" nav-link text-light">Auto Teugol Occasion</h5>
                    </nav>
                </div>
            </div>
            <div class="card-body">
                <h5 class="card-title text-warning text-center">Inscription</h5>
                <p class="card-text">

                <form class="row g-3">
                    <div class="row g-3">
                        <div class="col">
                            <input type="text" class="form-control is-valid" placeholder="Prenom" aria-label="First name">
                        </div>
                        <div class="col">
                            <input type="text" class="form-control is-valid" placeholder="Nom de famille" aria-label="Last name">
                        </div>
                    </div>

                    <div class="row g-3">
                        <div class="col">
                            <div class="input-group has-validation">
                                <input type="text" class="form-control is-invalid" placeholder="Pseudo" id="validationServerUsername" aria-describedby="inputGroupPrepend3 validationServerUsernameFeedback" required>

                            </div>
                        </div>
                        <div class="col">
                            <input type="Password" class="form-control is-invalid" placeholder="Password" aria-label="Password">

                        </div>
                        <div class="col">
                            <input type="Password" class="form-control is-invalid" placeholder="Confirmez password" aria-label="Confirme password">

                        </div>
                    </div>
                    <div class="row g-3">
                        <div class="col">
                            <div class="input-group has-validation">
                                <span class="input-group-text" id="inputGroupPrepend3">@</span>
                                <input type="text" class="form-control is-valid" placeholder="Adresse électronique" id="validationServerUsername" aria-describedby="inputGroupPrepend3 validationServerUsernameFeedback" required>
                                <div id="validationServerUsernameFeedback" class="invalid-feedback">
                                    choisir un pseudo svp.
                                </div>
                            </div>
                        </div>
                        <div class="col">
                            <input type="text" class="form-control is-valid" placeholder="Localité" aria-label="Last name">
                        </div>
                        <div class="col">
                            <input type="text" class="form-control is-valid" placeholder="Télephone" aria-label="Last name">
                        </div>
                    </div>
                    <div class="row g-3">
                        <div class="col">
                            <input type="number" class="form-control is-invalid" placeholder="Code postale" aria-label="cp">
                        </div>
                        <div class="col">
                            <input type="text" class="form-control is-valid" placeholder="Rue" aria-label="Last name">
                        </div>
                        <div class="col">
                            <select class="form-select " id="validationServer04" aria-describedby="validationServer04Feedback" required>
                                <option selected disabled value="">Sexe ...</option>
                                <option>Homme</option>
                                <option>Femme</option>
                            </select>
                        </div>
                    </div>

                    <div class="col-12">
                        <div class="form-check">
                            <input class="form-check-input is-invalid" type="checkbox" value="" id="invalidCheck3" aria-describedby="invalidCheck3Feedback" required>
                            <label class="form-check-label" for="invalidCheck3">
                                Accepter les modalités
                            </label>
                            <div id="invalidCheck3Feedback" class="invalid-feedback">
                                Vous devez vous mettre d'accord avant de soumettre.
                            </div>
                        </div>
                    </div>
                    <div class="col-12">
                        <button class="btn btn-warning rounded-pill text-light" type="submit">Soumettre inscription</button>
                    </div>
                </form>
                </p>
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





