<!DOCTYPE html>
<html lang="fr">
    <head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="=alimentation, aliment, bien être, santé">
        <meta name="author" content="Seeker225 AIJNWJ">
        
        <base href="http://localhost:8080/php-projects/cvital-app/">
        
        <title> Catalogue | Cvital WebApp </title>
        <!-- Bootstrap icons-->
        <link href="./node_modules/bootstrap-icons/font/bootstrap-icons.css" rel="stylesheet">
        <!-- Favicon-->
        <link href="./node_modules/@fortawesome/fontawesome-free/css/all.min.css" rel="stylesheet">

        <link rel="icon" type="image/x-icon" href="./node_modules/bootstrap-icons/icons/box-seam.svg" />
        <!-- Core theme CSS (includes Bootstrap)-->
        <link href="./assets/css/main.css" rel="stylesheet" />
    </head>
    <body>
        <!-- Navigation-->
        <nav class="navbar navbar-expand-lg navbar-light bg-light">
            <div class="container px-4 px-lg-5">
                <a class="navbar-brand" href="index.php"> 
                    <i class="bi-box-seam" style="width: 32px; height: 32px;"></i> 
                    <strong> Cvital </strong>
                </a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation"><span class="navbar-toggler-icon"></span></button>
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav me-auto mb-2 mb-lg-0 ms-lg-4">
                        <li class="nav-item">
                            <a class="nav-link" aria-current="page" href="index.php">
                                Accueil
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#!">
                                A propos
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#!">
                                Programmes
                            </a>
                        </li>
                        <li class="nav-item dropdown">
                            <a class="nav-link active dropdown-toggle" id="navbarDropdown" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                Catalogue
                            </a>
                            <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                                <li><a class="dropdown-item" href="#!">Tous les produits</a></li>
                                <li><hr class="dropdown-divider" /></li>
                                <li><a class="dropdown-item" href="#!">Popular Items</a></li>
                                <li><a class="dropdown-item" href="#!">New Arrivals</a></li>
                            </ul>
                        </li>
                    </ul>
                    <form class="d-flex">
                        <button class="btn btn-outline-dark" type="submit">
                            <i class="bi-cart-fill me-1"></i>
                            Panier
                            <span class="badge bg-dark text-white ms-1 rounded-pill">0</span>
                        </button>
                    </form>
                </div>
            </div>
        </nav>