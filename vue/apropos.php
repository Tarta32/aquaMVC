<?php
$title = 'A propos';

include './vue/commun/header.php';
?>
<h2 class="text-center bleu mt-5"><span class="vert">D</span>ESCRIPTION</h2>
<h2 class="text-center  mt-5"><u>Presentation</u></h2>

<div class="container">
    <div class="row m-auto justify-content-between align-items-center aproposFlex">
        <div class="col-8 col-md-6 mt-4 text-end">
            <img width="500px" class="rounded" src="<?= Conf::index ?>assets/image/imageAccueil/<?= htmlentities($accueil[0]['image']) ?>" alt="Image de presentation">
        </div>
        <div class="col-8 col-md-5 border border-dark border-3 p-5 mt-4 rounded-3  boxShadow">
            <h3 class="text-center"><?= htmlentities($accueil[0]['titre']) ?></h3>
            <p><?= htmlentities($accueil[0]['contenu']) ?></p>
        </div>
    </div>
    <h2 class="text-center  mt-5"><u>Mes equipements</u></h2>

    <?php 
    foreach($equipement as $equip){

    
    ?>
    <div class="row justify-content-between align-items-center aproposFlex">
        <div class="col-8 col-md-5 border border-dark border-3 p-5 my-4 rounded-3 boxShadow">
            <h3 class="text-center"><?= htmlentities($equip['nom']) ?></h3>
            <p><?= htmlentities($equip['description']) ?></p>
        </div>
        <div class="col-8 col-md-6 mt-4">
            <img width="500px" class="rounded" src="<?= Conf::index ?>assets/image/imageAccueil/<?= htmlentities($equip['image']) ?>" alt="">
        </div>
    </div>

    <?php 
    }
    ?>
</div>
</div>




<?php
include './vue/commun/footer.php'
?>