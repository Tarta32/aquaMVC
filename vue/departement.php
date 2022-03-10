<?php 

$title = $departement['departement_nom'];
include './vue/commun/header.php'
?>

<section class="sectionMasonry mt-5">
    <div class="masonry">

        <?php
        foreach ($images as $img) {
        ?>
            <div class="mItem">

                <img src="/aquaMVC/assets/image/<?= $img['nom_image'] ?>" alt="" />

            </div>
        <?php
        }
        ?>
    </div>
</section>