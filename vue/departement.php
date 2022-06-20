<?php

$title = $departement['departement_nom'];
$description = " - Aquavision, photos videos et referencement sub-aquatique";
include './vue/commun/header.php'
?>

<?php if (isset($departement) && $departement != NULL) { ?>
    <div class="container">
        <div class="row justify-content-between">
            <div class="col-5 mt-5 p-3 border border-info border-3 rounded slideinLeftAnim">
                <h2 class="text-center bleu"><span class="vert">T</span>ype de cours d'eau photographié</h2>
                <?php
                foreach ($epingles as $epingle) {
                ?>
                    <h4 class="text-info text-center">&asymp;&nbsp;<?= htmlentities($epingle['description']) ?></h4>
                <?php } ?>
            </div>
            <div class="col-5 mt-5 p-3 border border-info border-3 rounded slideinRightAnim">
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

                <div class="mItem mt-3 ">
                    <div data-bs-toggle="modal" data-bs-target="#exampleModal<?= $img['id'] ?>">
                        <img style="box-shadow: 10px 11px 15px -3px rgba(0,0,0,0.58)" alt="Image Accueil" class="rounded-3 revealAnim imageMasonry" src='<?= Conf::index ?>assets/image/<?= htmlentities($img['nom_image']) ?>'>
                    </div>

                    <div class="modal fade mobile_remove" id="exampleModal<?= $img['id'] ?>" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                        <div class="modal-dialog modal-accueil">
                            <div class="modal-content">
                                <div class="modal-body modal-accueil-body">
                                    <img alt="Image Accueil" class="rounded-3" src='<?= Conf::index ?>assets/image/<?= $img['nom_image'] ?>'>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <script>
                    if (window.innerWidth < 768) {
        
                        document.querySelector('.mobile_remove').remove();
        
                    }
                </script>

            <?php
            }
            ?>
        </div>


    </section>
<?php } else {
    header('Location: ' . Conf::index . "erreur");
} ?>

<?php
include './vue/commun/footer.php'
?>