<?php
$liste = new ThemeBD($cnx);
$themes = $liste->getTheme();
//$nbr = count($themes);
?>

<div class="container">
    <div class="card text-center bg-warning bg-gradient">
        <div class="card-header">
            <img src="./admin/images/cnx.jpg" class="d-block w-100" alt="...">
        </div>

        <div class="card-body">
            <nav class="navbar navbar-expand-lg navbar-light bg-light bg-gradient rounded-pill">
                <div class="container-fluid">
                    <a class="navbar-brand"> DECOUVREZ PLUS</a>
                    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                    </button>
                    <div class="collapse navbar-collapse " id="navbarSupportedContent">
                        <ul class="navbar-nav me-auto mb-2 mb-lg-0 ">
                            <li class="nav-item dropdown">
                                <a class="nav-link dropdown-toggle btn-lg " href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                    Marques
                                </a>

                                <ul class="dropdown-menu bg-warning" aria-labelledby="navbarDropdown">
                                    <div class="form-check list-group-item d-flex justify-content-between align-items-center">
                                        <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
                                        <label class="form-check-label" for="flexCheckDefault">
                                            <img src="./admin/images/Audi_logo.jpg" width="25" height="25" alt="audi_logo" /> Audi
                                        </label>
                                        <span class="badge bg-warning rounded-pill">20</span>
                                    </div>
                                    <div class="form-check list-group-item d-flex justify-content-between align-items-center">
                                        <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
                                        <label class="form-check-label" for="flexCheckDefault">
                                            <img src="./admin/images/Bmw_logo.jpg" width="22" height="22" alt="bmw_logo" /> Bmw
                                        </label>
                                        <span class="badge bg-info rounded-pill">24</span>
                                    </div>
                                    <div class="form-check list-group-item d-flex justify-content-between align-items-center">
                                        <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
                                        <label class="form-check-label" for="flexCheckDefault">
                                            <img src="./admin/images/citroen_logo.jpg" width="30" height="30" alt="citroen_logo" /> Citröen
                                        </label>
                                        <span class="badge bg-success rounded-pill">12</span>
                                    </div>
                                    <div class="form-check list-group-item d-flex justify-content-between align-items-center">
                                        <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
                                        <label class="form-check-label" for="flexCheckDefault">
                                            <img src="./admin/images/Mercedès_logo.jpg" width="30" height="30" alt="mercedès_logo" /> Mercedès
                                        </label>
                                        <span class="badge bg-danger rounded-pill">42</span>
                                    </div>
                                    <div class="form-check list-group-item d-flex justify-content-between align-items-center">
                                        <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
                                        <label class="form-check-label" for="flexCheckDefault">
                                            <img src="./admin/images/Opel_logo.jpg" width="26" height="26" alt="mercedès_logo" /> Opel
                                        </label>
                                        <span class="badge bg-dark rounded-pill">17</span>
                                    </div>
                                    <div class="form-check list-group-item d-flex justify-content-between align-items-center">
                                        <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
                                        <label class="form-check-label" for="flexCheckDefault">
                                            <img src="./admin/images/Peugeot_logo.jpg" width="28" height="28" alt="mercedès_logo" /> Peugeot
                                        </label>
                                        <span class="badge bg-light rounded-pill text-warning">14</span>
                                    </div>
                                    <div class="form-check list-group-item d-flex justify-content-between align-items-center">
                                        <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
                                        <label class="form-check-label" for="flexCheckDefault">
                                            <img src="./admin/images/toy.jpg" width="25" height="25" alt="toyota_logo" /> Toyota
                                        </label>
                                        <span class="badge bg-primary rounded-pill">24</span>
                                    </div>
                                    <div class="form-check list-group-item d-flex justify-content-between align-items-center">
                                        <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
                                        <label class="form-check-label" for="flexCheckDefault">
                                            <img src="./admin/images/Volkswagen_logo.jpg" width="25" height="25" alt="toyota_logo" /> Volkswagen
                                        </label>
                                        <span class="badge bg-secondary rounded-pill">10</span>
                                    </div>
                                </ul>
                            </li>
                        </ul>
                        <form class="d-flex">
                            <input class="form-control me-2 btn-outline-warning rounded-pill" type="search" placeholder="Search" aria-label="RECHERCHER">
                            <button class="btn btn-outline-info text-dark rounded-pill" type="submit">RECHERCHER</button>
                        </form>
                    </div>
                </div>
            </nav>


        </div>
        <h1 class="display-6">Nos véhicules récemment soldés</h1>
    </div>

    <div class="card-group">
        <div class="card">

            <div id="carouselExampleControlsNoTouching" class="carousel slide" data-bs-touch="false" data-bs-interval="false">
                <div class="carousel-inner">
                    <div class="carousel-item active">
                        <img src="./admin/images/v1.jpg" class="d-block w-100" alt="...">
                    </div>
                    <div class="carousel-item">
                        <img src="./admin/images/v2.jpg" class="d-block w-100" alt="...">
                    </div>
                    <div class="carousel-item">
                        <img src="./admin/images/v3.jpg" class="d-block w-100" alt="...">
                    </div>
                </div>
                <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleControlsNoTouching" data-bs-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Previous</span>
                </button>
                <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleControlsNoTouching" data-bs-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Next</span>
                </button>
            </div>

            <div class="card-body">
                <h5 class="card-title">Smart forTwo </i></h5>
                <p class="card-text"><small class="text-muted">PURE</small></p>
                <p class="card-text">Essence | 2017 | 56.448 km </p>
                <del class="card-prix">€5.800</del>
                <h5 class="card-prix text-danger ">€5.475 </i></h5>
                <p class="card-text"><small class="text-muted">12 mois de garantie</small></p>
            </div>
        </div>
        <div class="card">
            <div id="carouselExampleControls" class="carousel slide" data-bs-ride="carousel">
                <div class="carousel-inner">
                    <div class="carousel-item active">
                        <img src="./admin/images/a1.jpg" class="d-block w-100" alt="...">
                    </div>
                    <div class="carousel-item">
                        <img src="./admin/images/a2.jpg" class="d-block w-100" alt="...">
                    </div>
                    <div class="carousel-item">
                        <img src="./admin/images/a3.jpg" class="d-block w-100" alt="...">
                    </div>
                </div>
                <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleControls"  data-bs-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Previous</span>
                </button>
                <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleControls"  data-bs-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Next</span>
                </button>
            </div>
            <div class="card-body">
                <h5 class="card-title">Audi A4 </h5>
                <p class="card-text"><small class="text-muted">1.9 TDI -Airco - Radio/CD</small></p>
                <p class="card-text">Diesel | 2005 | 308.902 km</p>
                <del class="card-prix">€2.990</del>
                <h5 class="card-prix text-danger">€2.500 </i></h5>
                <p class="card-text"><small class="text-muted">12 mois garantie</small></p>
            </div>
        </div>
        <div class="card">

            <div id="carouselExampleIndicators" class="carousel slide" data-bs-ride="carousel">
                <div class="carousel-indicators">
                    <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
                    <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1" aria-label="Slide 2"></button>
                    <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2" aria-label="Slide 3"></button>
                </div>
                <div class="carousel-inner">
                    <div class="carousel-item active">
                        <img src="./admin/images/b1.jpg" class="d-block w-100" alt="...">
                    </div>
                    <div class="carousel-item">
                        <img src="./admin/images/b2.jpg" class="d-block w-100" alt="...">
                    </div>
                    <div class="carousel-item">
                        <img src="./admin/images/b3.jpg" class="d-block w-100" alt="...">
                    </div>
                </div>
                <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators"  data-bs-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Previous</span>
                </button>
                <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators"  data-bs-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Next</span>
                </button>
            </div>
            <div class="card-body">
                <h5 class="card-title">Volkswagen Golf </h5>
                <p class="card-text"><small class="text-muted">1.6 CR TDI GPS, CLIM</small></p>
                <p class="card-text">Diesel | 2011 | 187.246 km</p>
                <del class="card-prix">€4.940</del>
                <h5 class="card-prix text-danger">€4.300 </i></h5>
                <p class="card-text"><small class="text-muted">12 mois garantie</small></p>
            </div>
        </div>
    </div>

    <div class="card-group">
        <div class="card">
            <div id="carouselExampleFade" class="carousel slide carousel-fade" data-bs-ride="carousel">
                <div class="carousel-inner">
                    <div class="carousel-item active">
                        <img src="./admin/images/c1.jpg" class="d-block w-100" alt="...">
                    </div>
                    <div class="carousel-item">
                        <img src="./admin/images/c2.jpg" class="d-block w-100" alt="...">
                    </div>
                    <div class="carousel-item">
                        <img src="./admin/images/c3.jpg" class="d-block w-100" alt="...">
                    </div>
                </div>
                <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleFade"  data-bs-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Previous</span>
                </button>
                <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleFade"  data-bs-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Next</span>
                </button>
            </div>
            <div class="card-body">
                <h5 class="card-title">Peugeot 307 </h5>
                <p class="card-text"><small class="text-muted">1.6 HDI Confort</small></p>
                <p class="card-text">Diesel | 2007 | 246.135 km</p>
                <del class="card-prix">€2.250</del>
                <h5 class="card-prix text-danger">€2.000 </i></h5>
                <p class="card-text"><small class="text-muted">12 mois garantie</small></p>
            </div>
        </div>
        <div class="card">

            <div id="carouselExampleDark" class="carousel carousel-dark slide" data-bs-ride="carousel">
                <div class="carousel-indicators">
                    <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
                    <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="1" aria-label="Slide 2"></button>
                    <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="2" aria-label="Slide 3"></button>
                </div>
                <div class="carousel-inner">
                    <div class="carousel-item active" data-bs-interval="10000">
                        <img src="./admin/images/d1.jpg" class="d-block w-100" alt="...">
                    </div>
                    <div class="carousel-item" data-bs-interval="2000">
                        <img src="./admin/images/d2.jpg" class="d-block w-100" alt="...">
                    </div>
                    <div class="carousel-item">
                        <img src="./admin/images/d3.jpg" class="d-block w-100" alt="...">
                    </div>
                </div>
                <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleDark"  data-bs-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Previous</span>
                </button>
                <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleDark"  data-bs-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Next</span>
                </button>
            </div>
            <div class="card-body">
                <h5 class="card-title">Audi A3 </h5>
                <p class="card-text"><small class="text-muted">1.8 Turbo 16v FSI *S-Line sport</small></p>
                <p class="card-text">Essence | 2007 | 178.000 km</p>
                <del class="card-prix">€5.900</del>
                <h5 class="card-prix text-danger">€5.580 </i></h5>
                <p class="card-text"><small class="text-muted">12 mois garantie</small></p>
            </div>
        </div>
        <div class="card">

            <div id="carouselExampleInterval" class="carousel slide" data-bs-ride="carousel">
                <div class="carousel-inner">
                    <div class="carousel-item active" data-bs-interval="10000">
                        <img src="./admin/images/r1.jpg" class="d-block w-100" alt="...">
                    </div>
                    <div class="carousel-item" data-bs-interval="2000">
                        <img src="./admin/images/r2.jpg" class="d-block w-100" alt="...">
                    </div>
                    <div class="carousel-item">
                        <img src="./admin/images/r3.jpg" class="d-block w-100" alt="...">
                    </div>
                </div>
                <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleInterval"  data-bs-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Previous</span>
                </button>
                <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleInterval"  data-bs-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Next</span>
                </button>
            </div>
            <div class="card-body">
                <h5 class="card-title">Citroen C4 CACTUS </i></h5>
                <p class="card-text"><small class="text-muted">Shine-130 pk</small></p>
                <p class="card-text">Essence | 2018 | 24.135 km</p>
                <del class="card-prix">€12.480</del>
                <h5 class="card-prix text-danger">€12.150 </i></h5>
                <p class="card-text"><small class="text-muted">18 mois garantie</small></p>
            </div>
        </div>
    </div>

    <div class="card bg-ligth">
        <h5 class="card-header text-center bg-warning"><img src="./admin/images/Profil.jpg" alt="" width="100" height="100"></h5>
        <div class="card-body bg-warning">
            <form class=" bg-warning ">
                <div class="mb-3 row">
                    <label for="inputPseudo" class="col-sm-2 col-form-label">Pseudo</label>
                    <div class="col-sm-10">
                        <input type="pseudo" class="form-control" id="inputPseudo">
                    </div>
                </div>
                <div class="mb-3 row">
                    <label for="exampleDropdownFormPassword2" class="col-sm-2 col-form-label">Mot de pass</label>
                    <div class="col-sm-10">
                        <input type="password" class="form-control" id="exampleDropdownFormPassword2" placeholder="Password">
                    </div>
                <div class="mb-3 form-check">
                    <input type="checkbox" class="form-check-input" id="exampleCheck1">
                    <small class="form-check-label text-light" for="exampleCheck1">Se souvenir de moi</small>
                </div>
                    <ol class="breadcrumb">
                    <small class="breadcrumb-item"> Avez-vous un compte ? <a href="#"> Inscrivez-vous </a></small>
                    </ol>
                    <div class="d-grid gap-2 col-6 mx-auto">
                        <button class="btn btn-info text-light rounded-pill" type="button">Connexion</button>
                    </div>
            </form>
        </div>
    </div>

    <div class="card-footer text-muted bg-warning bg-gradient">
        <img src="./admin/images/showroom.jpg" class="card-img" alt="...">
    </div>
</div>












