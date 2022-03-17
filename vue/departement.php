<?php

$title = $departement['departement_nom'];
include './vue/commun/header.php'
?>


<div class="container">
    <div class="row justify-content-between">
        <div class="col-5 mt-5 p-3 border border-info border-3 rounded">
        <h2 class="text-center bleu"><span class="vert">T</span>ype de cours d'eau photographié</h2>
                <?php
                foreach($epingles as $epingle){
                    ?>  
                        <h4 class="text-info text-center">&asymp;&nbsp;<?= htmlentities($epingle['description']) ?></h4>
                    <?php } ?>
            </div>
            <div class="col-5 mt-5 p-3 border border-info border-3 rounded">
            <h2 class="text-center bleu"><span class="vert">D</span>escription du departement</h2>
                <p class="text-center"><?= $departement['departement_description'] ?></p>
            </div>
    </div>
</div>
<section class="sectionMasonry mt-5 p-3">
    <div class="masonry">
        
    <?php 
        foreach ($images as $img) {
        ?>
            <div class="mItem">

                <img class="rounded" style="box-shadow: 10px 11px 15px -3px rgba(0,0,0,0.58)" src="<?= Conf::index ?>assets/image/<?= htmlentities($img['nom_image']) ?>" alt="" />

            </div>
        <?php
        }
        ?>
    </div>
</section>

<?php 
    include './vue/commun/footer.php'
?>