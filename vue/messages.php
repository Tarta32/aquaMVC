<?php
include './vue/commun/headerAdmin.php'
?>

<h2 class="text-center text-success mt-5"><u>Messages</u></h2>
<div class="container  selectable mt-5">

    <div class="row border border-4 border-success">
        <div class="col-2 border-end border-4 border-success">
            <h3 class="text-success">Nom</h3>
        </div>
        <div class="col-2 border-end border-4 border-success">
            <h3 class="text-success">Prenom</h3>
        </div>
        <div class="col-2 border-end border-4 border-success">
            <h3 class="text-success">Email</h3>
        </div>
        <div class="col-2 border-end border-4 border-success">
            <h3 class="text-success">Telephone</h3>
        </div>
        <div class="col-4">
            <h3 class="text-success">Message</h3>
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

                        <?= $texte ?> <strong class="text-danger"> &nbsp;&nbsp;&nbsp;&nbsp;... voir plus</strong>
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
                        <h5 class="modal-title" id="exampleModalScrollableTitle">Message de : <?= $msg['nom'] . " " . $msg['prenom'] ?></h5>
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