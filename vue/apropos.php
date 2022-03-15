<?php
$title = 'A propos';

include './vue/commun/header.php';
?>
<h2 class="text-center bleu mt-5"><span class="vert">D</span>ESCRIPTION</h2>
<h2 class="text-center  mt-5"><u>Presentation</u></h2>

<div class="container">
    <div class="row m-auto justify-content-between align-items-center">
        <div class="col-5 border border-dark border-3 p-5 mt-4 rounded-3  boxShadow">
            <h3 class="text-center"><?= $presentation[0]['titre'] ?></h3>
            <p><?= $presentation[0]['contenu'] ?></p>
        </div>
        <div class="col-6 mt-4 text-end">
            <img width="500px" class="rounded" src="<?= Conf::index ?>assets/image/imageAccueil/<?= $presentation[0]['image_accueil'] ?>" alt="">
        </div>
    </div>
    <div class="row justify-content-between align-items-center">
        <h2 class="text-center  mt-5"><u>Mon equipement</u></h2>
        <div class="col-6 mt-4">
            <img width="500px" class="rounded" src="<?= Conf::index ?>assets/image/imageAccueil/<?= $presentation[0]['image_perso'] ?>" alt="">
        </div>
        <div class="col-5 border border-dark border-3 p-5 mt-4 rounded-3 boxShadow">
            <h3 class="text-center"><?= $presentation[0]['titre_perso'] ?></h3>
            <p><?= $presentation[0]['contenu_perso'] ?></p>
        </div>

    </div>
</div>
</div>




<?php
include './vue/commun/footer.php'
?>