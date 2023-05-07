<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>sweetMarket</title>
    <script src="bootstrap_abrita/bjquery-3.0.0.min.js"></script>
    <script src="bootstrap_abrita/bootstrap.min.js"></script>
    <link href="bootstrap_abrita/bootstrap.min.css" rel="stylesheet" />
    <link href="bootstrap_abrita/bootstrap.css" rel="stylesheet" />
    <link href="momoshop.css" rel="stylesheet" />

</head>
<style type="text/css">
    .nav-link {
        color: #ffffff;
    }
</style>

<body>
    <div class='head'>
        <div class='container'>
            <div class="row">
                <div class="col-md-3 " id='logo'><a href='#' style='margin-top:10px;'>
                        <h3>
                            <span style='color:#00d4ff'>Sw</span><span style='color:#ffffff;'>eet-Market</span>
                        </h3>
                    </a>
                </div>
                <div class="col-md-3">
                    <?php $anne = date('Y');
                    $mois = date('m');
                    $jour = date('d');
                    print("<p style='
                                       text-align:center;
                                      color:#FFFFFF;
                                      '>$anne-$mois-$jour</p>");
                    ?>
                </div>
                <div class="col-md-3 " id='login'><a href="#">login</a></div>
                <div class="col-md-3 " id='create_account'><a href="#">Create Account</a></div>

            </div>



        </div>


    </div>


    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <div class="container-fluid">

            <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
                aria-label="Toggle navigation">
                <!-- paramtre de navigation mobile-->
                <span class="navbar-toggler-icon" style='background-color:#ffffff; padding-right:0px'></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent"
                style="margin-top:-15px;margin-bottom:-15px ;">

                <div class="container-fluid" style="margin-left: 300px">
                    <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                        <li class="nav-item">
                            <a class="nav-link active" aria-current="page" href="#"><svg
                                    xmlns="http://www.w3.org/2000/svg" width="28" height="20" fill="currentColor"
                                    class="bi bi-house-door" viewBox="0 0 16 16" style='padding-bottom: -10px'>
                                    <path
                                        d="M8.354 1.146a.5.5 0 0 0-.708 0l-6 6A.5.5 0 0 0 1.5 7.5v7a.5.5 0 0 0 .5.5h4.5a.5.5 0 0 0 .5-.5v-4h2v4a.5.5 0 0 0 .5.5H14a.5.5 0 0 0 .5-.5v-7a.5.5 0 0 0-.146-.354L13 5.793V2.5a.5.5 0 0 0-.5-.5h-1a.5.5 0 0 0-.5.5v1.293L8.354 1.146zM2.5 14V7.707l5.5-5.5 5.5 5.5V14H10v-4a.5.5 0 0 0-.5-.5h-3a.5.5 0 0 0-.5.5v4H2.5z" />
                                </svg>
                                Home</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">Nos Produits</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">En Solde</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">Contacts</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">Condition D'utilisation</a>
                        </li>
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button"
                                data-bs-toggle="dropdown" aria-expanded="false">En Solde</a>
                            <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                                <li><a class="dropdown-item" href="#">Chemise</a></li>
                                <li><a class="dropdown-item" href="#">Cravate</a></li>
                                <li><a class="dropdown-item" href="#">jouets pour enfant</a></li>
                                <!--  produits indisponiques-->
                                <li><a class="nav-link disabled" href="#" tabindex="-1" aria-disabled="true">Cartable
                                        enfants</a></li>
                                <li><a class="dropdown-item" href="#">Rudeau de chambre</a></li>
                            </ul>
                        </li>

                    </ul>


                </div>
                <form class="d-flex" style="margin-left: -500px; margin-right: 30px">
                    <input class="form-control me-2" type="search" placeholder="Enter Something" aria-label="Search">
                    <button class="btn btn-outline-success" type="submit" style="padding-bottom: -10px;">Search</button>
                </form>
            </div>
        </div>
    </nav>




    <div class="partie_primcipale">
        <div style="text-align: center; margin-right: -50px">
            <div id="carouselExampleSlidesOnly" class="carousel slide" data-bs-ride="carousel">
                <div class="carousel-inner">
                    <div class="carousel-item active">
                        <img src="images/image2.jpg" class="d-block w-100" alt="..." height="90px">
                    </div>
                    <div class="carousel-item">
                        <img src="images/image1.jpg" class="d-block w-100" alt="... " height="90px">
                    </div>
                    <div class="carousel-item">
                        <img src="images/Sac XX1.jpeg" class="d-block w-100" alt="..." height="90px">
                    </div>
                </div>
            </div>
        </div><br>
        <div class="row firstrow" style="margin-left: 100px">
            <div class="col-md-9">


                <form>

                    <div class="row ">

                        <div class="col-md-3">

                            <div class="card" style="width: 15rem;" id="card">
                                <img src="images/Sac XX2.jpeg" class="card-img-top" alt="Accroche HTML">
                                <div class="card-body">
                                    <h5>sac pour dame</h5>
                                    <p style="font-family: Arial; font-size: 15px;">PRIX 5000 FCFA</p>
                                    <s>10 000 FCFA</s>
                                    <button class="btn btn-primary" id="ajouter">ajouter au panier</button>
                                    <button class="btn btn-primary" id="supprimer">supprimer du panier </button>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="card" style="width: 15rem;" id="card">
                                <img src="images/Sac XX1.jpeg" class="card-img-top" alt="Accroche HTML">
                                <div class="card-body">
                                    <h5>sac pour dame</h5>
                                    <p style="font-family: Arial; font-size: 15px;">PRIX 5000 FCFA</p>
                                    <button class="btn btn-primary" id="ajouter">ajouter au panier</button>
                                    <button class="btn btn-primary" id="supprimer">supprimer du panier </button>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="card" style="width: 15rem;" id="card">
                                <img src="images/Sac XX3.jpeg" class="card-img-top" alt="Accroche HTML">
                                <div class="card-body">
                                    <h5>sac pour dame</h5>
                                    <p style="font-family: Arial; font-size: 15px;">PRIX 5000 FCFA</p>
                                    <button class="btn btn-primary" id="ajouter">ajouter au panier</button>
                                    <button class="btn btn-primary" id="supprimer">supprimer du panier </button>
                                </div>
                            </div>
                        </div>


                    </div>


            </div>

            <div class="col-md-3" id="sidebar">
                <h4>Pour une meilleurs esperience <br>
                    Veuiller-vous connecter</h4>


                <p id='logo'><a href='#' style='margin-top:10px;'>
                        <h3 style="background-color: black;
                                   width: 250px;
                                   
                                   font-size: 20px;">

                            <span style='color:#00d4ff'>Sw</span><span style='color:#ffffff;'>eet-Market</span>
                        </h3>
                    </a>
                </p>
            </div>

            <div class="row">
                <div class='col-md-3'></div>
                <div class='col-md-3'><input type='reset' value="Reinitialiser" id="Reinitialiser" /></div>
                <div class='col-md-3'><input type='submit' value='Poursuivre la commande'
                        id='Poursuivre la commande' />'</div>
                <div class='col-md-3'></div>
            </div>

            </form>
        </div>
        <div class='row administrateur'>
            <div class="col-md-4">
                <div class="row">
                    <div class="col-md-6"><h3><u>Notre Devise</u></h3>
                     <p><i>Votre Satisfaction <br>
                      Notre Ultime Desire !!!</i></p></div>
                    <div class="col-md-6"><h3><u>Nos Principal<br>Clients<br></u></h3>
                     <p><i>ils Nous Font confiance <br>
                      Qu'attendez-vous pour <br>
                      Pour rejoindre Cette Merveilleuse<br>
                  Aventure !!!</i></p></div>
                </div>
            </div>
            <div class="col-md-8">
                <div class="row">

                    <div class="col-md-3">
                        <div class="card" style="width: 13rem;  padding: 1.5em .5em .5em;
    border-radius: 2em;
    text-align: center;
    box-shadow: 0 5px 10px rgba(0,0,0,.2);
    background-color: #3E7B88">
                            <img src="images/arnol.png" class="card-img-top" alt="..." style="width: 65%;
    border-radius: 50%;
    margin: 0 auto;
    box-shadow: 0 0 10px rgba(0,0,0,.2);">
                            <div class="card-body">
                                <p class="card-text">Arnol Dongmo  <br>
                                    cm-uds-14sci1324</p>

                            </div>
                        </div>
                    </div>

                    <div class="col-md-3">
                        <div class="card" style="width: 13rem;  padding: 1.5em .5em .5em;
    border-radius: 2em;
    text-align: center;
    box-shadow: 0 5px 10px rgba(0,0,0,.2);
    background-color: #3E7B88">
                            <img src="images/ngnie.png" class="card-img-top" alt="..." style="width: 65%;
    border-radius: 50%;
    margin: 0 auto;
    box-shadow: 0 0 10px rgba(0,0,0,.2);">
                            <div class="card-body">
                                <p class="card-text">Ngnie Jean Paul <br>
                                    cm-uds-14sci1324</p>

                            </div>
                        </div>
                    </div>


                    <div class="col-md-3">
                        <div class="card" style="width: 13rem;  padding: 1.5em .5em .5em;
    border-radius: 2em;
    text-align: center;
    box-shadow: 0 5px 10px rgba(0,0,0,.2);
    background-color: #3E7B88">
                            <img src="images/Sac XX3.jpeg" class="card-img-top" alt="..." style="width: 65%;
    border-radius: 50%;
    margin: 0 auto;
    box-shadow: 0 0 10px rgba(0,0,0,.2);">
                            <div class="card-body">
                                <p class="card-text">NGNIE JEAN PAUL <br>
                                    cm-uds-14sci1324</p>

                            </div>
                        </div>
                    </div>


                    <div class="col-md-3">
                        <div class="card" style="width: 13rem;  padding: 1.5em .5em .5em;
    border-radius: 2em;
    text-align: center;
    box-shadow: 0 5px 10px rgba(0,0,0,.2);
    background-color: #3E7B88">
                            <img src="images/Sac XX3.jpeg" class="card-img-top" alt="..." style="width: 65%;
    border-radius: 50%;
    margin: 0 auto;
    box-shadow: 0 0 10px rgba(0,0,0,.2);">
                            <div class="card-body">
                                <p class="card-text">NGNIE JEAN PAUL <br>
                                    cm-uds-14sci1324</p>

                            </div>
                        </div>
                    </div>




                </div>
            </div>


        </div>
        <div class='row footer id='footer'>
        <div class="row">
            <div class="col-md-3">CONTACTS</div>
            <div class="col-md-3">NOS OFFRES</div>
            <div class="col-md-3">NOS PARTENAIRE </div>
            <div class="col-md-3"></div>
        </div>

        </div>
</body>

</html>

<script type="text/javascript">
    $(document).ready(function () {
        document.querySeletor(".partie_primcipale .row firstrow form .card .card-body #supprimer").hide();
        $('.partie_primcipale .row firstrow form .card .card-body #ajouter').click(
            function () {
                document.querySeletor(".partie_primcipale .row firstrow form .card .card-body #ajouter").hide();
                document.querySeletor(".partie_primcipale .row firstrow form .card .card-body #supprimer").show();
            });
    });
</script>