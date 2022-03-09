<?php
include './vue/commun/headerAdmin.php'
?>
<nav class="navbar navbar-expand-lg navbar-light">
        <div class="container-fluid">


            <a href="<?= Conf::index ?>"><img src="/aquaMVC/assets/image/imageAccueil/BGimage/logo.png" style="width:75px" alt="Logo de plongée"></a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarColor01" aria-controls="navbarColor01" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>


            <div class="collapse navbar-collapse justify-content-end" id="navbarColor01">
                <ul class="navbar-nav text-center">
                    <li class="nav-item">
                        <a href="<?= Conf::dashboard ?>" class="nav-link">Modifier departements</a>
                    </li>
                    <li class="nav-item">
                        <a href="<?= Conf::dashboardAccueil ?>" class="nav-link">Modifier accueil</a>
                    </li>
                    <li class="nav-item">
                    <a href="<?= Conf::deconnexion ?>" class="nav-link">Deconnexion</a>
                    </li>
                </ul>
            </div>
        </div>
        </div>
    </nav>

<h2 class="text-center">Messages</h2>
<div class="container  selectable mt-5">

    <div class="row border border-4 border-success">
        <div class="col-2 border-end border-4 border-success">
            <h2 class="text-success">Nom</h2>
        </div>
        <div class="col-2 border-end border-4 border-success">
            <h2 class="text-success">Prenom</h2>
        </div>
        <div class="col-2 border-end border-4 border-success">
            <h2 class="text-success">Email</h2>
        </div>
        <div class="col-2 border-end border-4 border-success">
            <h2 class="text-success">Telephone</h2>
        </div>
        <div class="col-4">
            <h2 class="text-success">Message</h2>
        </div>
    </div>

    <?php


    foreach ($messages as $msg) {
    ?>
        <div class="row bg-light border border-top-0 border-2 border-success">
            <div class="col-2 border-end border-2 border-success">
                <p><?= $msg['nom'] ?></p>
            </div>
            <div class="col-2 border-end border-2 border-success">
                <p><?= $msg['prenom'] ?></p>
            </div>
            <div class="col-2 border-end border-2 border-success">
                <p><?= $msg['mail'] ?></p>
            </div>
            <div class="col-2 border-end border-2 border-success">
                <p><?php
                    if ($msg['phone'] != "" || $msg['phone'] != NULL) {
                        echo $msg['phone'];
                    } else {
                        echo "Non renseigné";
                    } ?>
                </p>
            </div>

            <div class="col-4 messageHidden">
                <?php
                    if (strlen($msg['contenu']) < 20) {
                        echo $msg['contenu'];
                    } else {

                        $chiffre = $msg['id'];
                        $texte = substr($msg['contenu'], 0, 20);

                        ?>
                         <p class="msgHover" data-bs-toggle="modal" data-bs-target="#exampleModalLong<?= $chiffre ?>">
                        
                        <?= $texte ?>  <strong class="text-danger"> &nbsp;&nbsp;&nbsp;&nbsp;... voir plus</strong>
                    </p>
                      <?php
                    }
                    ?>
            </div>
        </div>
        <div class="modal fade selectable" id="exampleModalLong<?= $msg['id'] ?>" tabindex="-1" aria-labelledby="exampleModalScrollableTitle" aria-hidden="true">
            <div class="modal-dialog modal-dialog-scrollable">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalScrollableTitle">Message de : <?= $msg['nom']." ".$msg['prenom'] ?></h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <p class="text-break"><?= $msg['contenu'] ?></p>
                    </div>
                </div>
            </div>
        </div>
    <?php
    }
    ?>
</div>