<!doctype html>
<html lang="fr">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="description" content="améliorer, amélioration, alimentation, sommeil, sport, bien être, santé">
        <meta name="author" content="Seeker225 AIJNWJ">
        
        <base href="http://localhost:8080/php-projects/cvital-app/">
        
        <title>Akwaba · Cvital WebApp</title>
        <link href="./node_modules/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet">
        <link href="./node_modules/bootstrap-icons/font/bootstrap-icons.css" rel="stylesheet">
        <link href="./node_modules/@fortawesome/fontawesome-free/css/all.min.css" rel="stylesheet">

        <style>
            .bd-placeholder-img {
                font-size: 1.125rem;
                text-anchor: middle;
                -webkit-user-select: none;
                -moz-user-select: none;
                user-select: none;
            }

            @media (min-width: 768px) {
                .bd-placeholder-img-lg {
                    font-size: 3.5rem;
                }
            }

            .b-example-divider {
                height: 3rem;
                background-color: rgba(0, 0, 0, .1);
                border: solid rgba(0, 0, 0, .15);
                border-width: 1px 0;
                box-shadow: inset 0 .5em 1.5em rgba(0, 0, 0, .1), inset 0 .125em .5em rgba(0, 0, 0, .15);
            }

            .b-example-vr {
                flex-shrink: 0;
                width: 1.5rem;
                height: 100vh;
            }

            .bi {
                vertical-align: -.125em;
                fill: currentColor;
            }

            .nav-scroller {
                position: relative;
                z-index: 2;
                height: 2.75rem;
                overflow-y: hidden;
            }

            .nav-scroller .nav {
                display: flex;
                flex-wrap: nowrap;
                padding-bottom: 1rem;
                margin-top: -1px;
                overflow-x: auto;
                text-align: center;
                white-space: nowrap;
                -webkit-overflow-scrolling: touch;
            }
        </style>

    </head>
    <body>
    
        <header>
            <div class="collapse bg-dark" id="navbarHeader">
                <div class="container">
                    <div class="row">
                        <div class="col-sm-8 col-md-7 py-4">
                        <h4 class="text-white">A propos</h4>
                        <p class="text-muted">
                            Add some information about the album below, the author, or any 
                            other background context. Make it a few sentences long so folks 
                            can pick up some informative tidbits. Then, link them off to some
                            social networking sites or contact information.
                        </p>
                        </div>
                        <div class="col-sm-4 offset-md-1 py-4">
                        <h4 class="text-white">Contact</h4>
                        <ul class="list-unstyled">
                            <li><a href="#" class="text-white">Follow on Twitter</a></li>
                            <li><a href="#" class="text-white">Like on Facebook</a></li>
                            <li>
                                <a href="index.php/account/login" class="text-white">
                                    Se connecter
                                </a>
                            </li>
                        </ul>
                        </div>
                    </div>
                </div>
            </div>
            <div class="navbar navbar-dark bg-dark shadow-sm">
                <div class="container">
                    <a href="#" class="navbar-brand d-flex align-items-center">
                        <i class="bi-box-seam" style="width: 32px; height: 32px;"></i> 
                        <strong> Cvital </strong>
                    </a>
                    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarHeader" aria-controls="navbarHeader" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                    </button>
                </div>
            </div>
        </header>

        <main>

            <section class="py-5 text-center container">
                <div class="row py-lg-5">
                    <div class="col-lg-6 col-md-8 mx-auto">
                        <h1 class="fw-light">Cvital</h1>
                        <p class="lead text-muted">
                            Bien se sentir un être toujours opérationnel et productif est important pour tout
                            être humain. Mais, comment y arriver ?
                            <br>
                            Nous vous proposons d'<em>améliorer</em> votre <strong>bien-être</strong> en mettant 
                            votre <strong>alimentation</strong>, votre <strong>sommeil</strong> et votre activité <strong>sportive</strong>
                            à contribution pour avoir une bonne <strong>santé</strong>. 
                        </p>
                        <p>
                            <a href="index.php/marche/catalogue" class="btn btn-primary my-2">
                                Acheter un produit
                            </a>
                            <a href="#" class="btn btn-secondary my-2">
                                Souscrire à un programme
                            </a>
                        </p>
                    </div>
                </div>
            </section>

            <div class="album py-5 bg-light">
                <div class="container">

                    <div class="row row-cols-1 row-cols-sm-2 row-cols-md-3 g-3">
                        <div class="col">
                            <div class="card shadow-sm">
                                <svg class="bd-placeholder-img card-img-top" width="100%" height="225" xmlns="http://www.w3.org/2000/svg" role="img" aria-label="Placeholder: Thumbnail" preserveAspectRatio="xMidYMid slice" focusable="false"><title>Placeholder</title><rect width="100%" height="100%" fill="#55595c"/><text x="50%" y="50%" fill="#eceeef" dy=".3em">Thumbnail</text></svg>

                                <div class="card-body">
                                <p class="card-text">
                                    Notre catalogue répertorie des produits qui feront votre affaire.
                                </p>
                                <div class="d-flex justify-content-between align-items-center">
                                    <div class="btn-group">
                                        <button type="button" class="btn btn-sm btn-outline-secondary">
                                            Consulter
                                        </button>
                                    </div>
                                    <small class="text-muted">0 produit(s)</small>
                                </div>
                                </div>
                            </div>
                        </div>
                        <div class="col">
                            <div class="card shadow-sm">
                                <svg class="bd-placeholder-img card-img-top" width="100%" height="225" xmlns="http://www.w3.org/2000/svg" role="img" aria-label="Placeholder: Thumbnail" preserveAspectRatio="xMidYMid slice" focusable="false"><title>Placeholder</title><rect width="100%" height="100%" fill="#55595c"/><text x="50%" y="50%" fill="#eceeef" dy=".3em">Thumbnail</text></svg>

                                <div class="card-body">
                                <p class="card-text">
                                    Des <strong>spécialistes</strong> du domaine de la santé, de la nutrition et du sport
                                    vous permettent d'aller ...
                                </p>
                                <div class="d-flex justify-content-between align-items-center">
                                    <div class="btn-group">
                                        <button type="button" class="btn btn-sm btn-outline-secondary">Souscrire</button>
                                    </div>
                                    <small class="text-muted">0 programme(s)</small>
                                </div>
                                </div>
                            </div>
                        </div>
                        <div class="col">
                            <div class="card shadow-sm">
                                <svg class="bd-placeholder-img card-img-top" width="100%" height="225" xmlns="http://www.w3.org/2000/svg" role="img" aria-label="Placeholder: Thumbnail" preserveAspectRatio="xMidYMid slice" focusable="false"><title>Placeholder</title><rect width="100%" height="100%" fill="#55595c"/><text x="50%" y="50%" fill="#eceeef" dy=".3em">Thumbnail</text></svg>

                                <div class="card-body">
                                    <p class="card-text">
                                        Notre blog sera bientôt disponible pour des articles qui vous intéressent.    
                                    </p>
                                    <div class="d-flex justify-content-between align-items-center">
                                        <div class="btn-group">
                                            <button type="button" class="btn btn-sm btn-outline-secondary">
                                                Parcourir
                                            </button>
                                        </div>
                                        <small class="text-muted">0 article(s)</small>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!--
                        <div class="col">
                            <div class="card shadow-sm">
                                <svg class="bd-placeholder-img card-img-top" width="100%" height="225" xmlns="http://www.w3.org/2000/svg" role="img" aria-label="Placeholder: Thumbnail" preserveAspectRatio="xMidYMid slice" focusable="false"><title>Placeholder</title><rect width="100%" height="100%" fill="#55595c"/><text x="50%" y="50%" fill="#eceeef" dy=".3em">Thumbnail</text></svg>

                                <div class="card-body">
                                <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                                <div class="d-flex justify-content-between align-items-center">
                                    <div class="btn-group">
                                    <button type="button" class="btn btn-sm btn-outline-secondary">View</button>
                                    <button type="button" class="btn btn-sm btn-outline-secondary">Edit</button>
                                    </div>
                                    <small class="text-muted">9 mins</small>
                                </div>
                                </div>
                            </div>
                        </div>

                        -->

                    </div>
                </div>
            </div>