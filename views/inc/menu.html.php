<form method="post" action="<?php WEB_ROUTE ?>">
    <img style="position:absolute;height:70px;margin-left:1%;margin-top:0.5%" src=" <?= WEB_ROUTE . "img/logo.png" ?> ">
    <h4 style="background-color:red;text-align:center;color:white;height: 30px;padding:30px;font-size:20px;margin-top: -8px;">LE PLAISIR DE JOUER</h4>
    <h3 style="background-color:#F7586A;text-align:center;color:white;height: 40px;padding:30px;margin-top: -20px;">CREER ET PARAMETRER VOS QUIZZ
        <a class="btn btn-primary" style="margin-left:1050px;margin-top:-20px;color:red;background-color:white;height:90px ;border-color:red" href="<?= WEB_ROUTE . '?controlleurs=security&view=connexion' ?>">Deconnexion</a>
    </h3>
    <nav class="navbar navbar-expand-sm navbar-light bg-light">
        <!--  <button class="navbar-toggler d-lg-none" type="button" data-toggle="collapse" data-target="#collapsibleNavId" aria-controls="collapsibleNavId">
        <span class="navbar-toggler-icon"></span>
    </button> -->
        <br> <br>
        <div class="collapse navbar-collapse" id="collapsibleNavId">
            <ul class="nav flex-column mr-auto mt-2 mt-lg-0">
                <div class="bg-danger profile">

                </div>
                <br> <br>
                <?php if (est_admin()): ?>
                <li class="nav-item active">
                    <a class="nav-link" href="<?=WEB_ROUTE.'?controlleurs=admin&view=liste.question' ?>">LISTE DES QUESTIONS</a>
                    <img class=" image" src="<?=WEB_ROUTE."img/ic-liste-active.png" ?>" alt=" icone">
                </li></br>
                <li class="nav-item active">
                    <a class="nav-link" href="<?= WEB_ROUTE . '?controlleurs=admin&view=creer.admin' ?>">CREER ADMIN</a>
                    <img class="image" src="<?= WEB_ROUTE . "img/mi.png" ?>" alt=" icone">
                </li></br>
                <li class="nav-item active">
                    <a class="nav-link" href="<?= WEB_ROUTE . '?controlleurs=admin&view=liste.joueur' ?>">LISTE DES JOUEURS</a>
                    <img class="image" src="<?= WEB_ROUTE . "img/r.png" ?>" alt=" icone">
                </li></br>
                <li class="nav-item active">
                    <a class="nav-link" href="<?= WEB_ROUTE . '?controlleurs=admin&view=creer.question' ?>">CREER DES QUESTIONS</a>
                    <img class="image" src="<?= WEB_ROUTE . "img/mi.png" ?>" alt=" icone">
                </li></br>
                
                <li class="nav-item active">
                    <a class="nav-link" href="<?= WEB_ROUTE . '?controlleurs=admin&view=liste.admin' ?>">LISTE ADMIN</a>
                    <img class="image" src="<?= WEB_ROUTE . "img/r.png" ?>" alt=" icone">
                </li></br>
                <li class="nav-item active">
                    <a class="nav-link" href="<?= WEB_ROUTE . '?controlleurs=admin&view=tableau.bord' ?>">TABLEAU DE BORD</a>
                    <img class="image" src="<?= WEB_ROUTE . "img/mi.png" ?>" alt=" icone">
                </li></br>
                <?php endif ?>
            </ul>

        </div>
    </nav>
</form>
<style>
    nav ul {
        list-style: none;
        margin-top: 4px;
    }

    nav li a {
        text-decoration: none;
        color: #000;
    }

    nav ul li {

        padding: 12px;

    }

    nav {

        width: 510px;
        height: 400px;
        margin-top: 3%;
    }

    .profile {
        height: 145px;
        background-color: #F7586A;
    }

    .nav-item a:hover {
        background-color: #ddd;
        border-left: 8px solid #F7586A;

    }

    .image {
        float: left;
        margin-top: -5%;
        width: 7%;
        height: 7%;
        margin-left: 90%;
    }
</style>