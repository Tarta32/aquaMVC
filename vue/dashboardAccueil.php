<?php

include './vue/commun/headerAdmin.php'

?>
<div class="container">
    <div class="row">
        <div class="col">
            <form action="insert.php" method="post">
            </form>
        </div>
    </div>
    <div class="row">
        <div class="col">
            <h2 class="text-center text-success mt-5"><u>Modification de l'acceuil</u></h2>
                <p class="text-danger"><?php if (isset($_SESSION['message_error'])) {
                                            echo "<p style='color:red'>" . $_SESSION['message_error'] . "</p>";
                                            unset($_SESSION['message_error']);
                                        } else if (isset($_SESSION['message_success'])) {
                                            echo "<p style='color:green'>" . $_SESSION['message_success'] . "</p>";
                                            unset($_SESSION['message_success']);
                                        }
                                        ?></p>
            <form method="POST" action="<?= Conf::index ?>admin/update">
                <div class="form-group mt-3 mb-3">
                    <label for="inputDefault">Titre :</label>
                    <input type="text" class="form-control" id="inputDefault" value="<?= $accueil[0]["titre"] ?>" name="titre">
                </div>
                <div class="form-group">
                    <label for="contenu" class="form-label mt-4">Contenu :</label>
                    <textarea name="contenu" class="form-control" id="contenu" rows="6"><?= $accueil[0]["contenu"] ?></textarea>
                </div>
                <input class="btn btn-success mt-2" type="submit" value="Modifier contenu" name="updateAccueil">
            </form>
            <div class="row">
                <div class="col-6">
                    <form enctype='multipart/form-data' method="POST" action="<?= Conf::index ?>admin/update">
                        <input name='selectVideo' class="form-control mt-5" type="file" id="formFile">
                        <input class="btn btn-success mt-2 mb-3" type="submit" value="Modifier video" name="updateVideo">
                        <video autoplay muted width="100%" style="max-width: 500px;">
                            <source src='<?= Conf::index ?>assets/videoAccueil/<?= $accueil[0]['media'] ?>' type='video/mp4'>
                        </video>
                    </form>
                </div>
                <div class="col-6">
                    <form enctype='multipart/form-data' method="POST" action="<?= Conf::index ?>admin/insert">
                        <div class="form-group">
                            <input name='selectImage[]' class="form-control mt-5" type="file" id="formFile" multiple>
                            <input class="btn btn-success mt-2 mb-3" type="submit" value="Telecharger image(s)" name="validerAccueil">
                        </div>
                    </form>
                    <section class="sectionMasonry">
                        <div class="masonry dashboardMasonry">
                            <?php
                            foreach ($requeteImage as $img) {
                            ?>
                                <div class="mItem" style="position: relative;">
                                    <img style="max-width: 150px;" src="<?= Conf::index ?>assets/image/<?= $img['nom_image'] ?>" alt="" />
                                    <a style="position: absolute; left: 0" class="btn btn-danger" href="<?= Conf::index ?>admin/supprimerAccueil/<?= $img['id'] ?>">X</a>
                                </div>
                            <?php
                            }
                            ?>
                        </div>
                    </section>
                </div>
            </div>
        </div>
    </div>
</div>