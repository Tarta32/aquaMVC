<?php

$title = $departement['departement_nom'];
include './vue/commun/header.php'
?>

<section class="sectionMasonry mt-5 p-3">
    <div class="masonry">

        <?php
        foreach ($images as $img) {
        ?>
            <div class="mItem">

                <img class="rounded" style="box-shadow: 10px 11px 15px -3px rgba(0,0,0,0.58)" src="<?= Conf::index ?>assets/image/<?= $img['nom_image'] ?>" alt="" />

            </div>
        <?php
        }
        ?>
    </div>
</section>

<?php 
    include './vue/commun/footer.php'
?>