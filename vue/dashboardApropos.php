<?php

include './vue/commun/headerAdmin.php';

?>
<div class="container mb-5">
    <div class="row">
        <h2 class="text-center text-success my-5"><u>Modification de A-propos</u></h2>
        <h2 class="text-center  my-5"><u>Presentation</u></h2>
        <p class="text-danger"><?php if (isset($_SESSION['message_error'])) {
                                    echo "<p style='color:red'>" . $_SESSION['message_error'] . "</p>";
                                    unset($_SESSION['message_error']);
                                } else if (isset($_SESSION['message_success'])) {
                                    echo "<p style='color:green'>" . $_SESSION['message_success'] . "</p>";
                                    unset($_SESSION['message_success']);
                                }
                                ?></p>
        <div class="col-6">
            <form method="POST" action="<?= Conf::index ?>admin/update">
                <div class="form-group mt-3 mb-3">
                    <label for="inputDefault">Titre :</label>
                    <input type="text" class="form-control" id="inputDefault" value="<?= $presentation[0]["titre"] ?>" name="titre">
                </div>
                <div class="form-group">
                    <label for="contenu" class="form-label mt-4">Contenu :</label>
                    <textarea name="contenu" class="form-control" id="contenu" rows="6"><?= $presentation[0]["contenu"] ?></textarea>
                </div>
                <input class="btn btn-success mt-2" type="submit" value="Modifier contenu" name="updatePresentation">
            </form>
        </div>

        <div class="col-6">
            <form enctype='multipart/form-data' method="POST" action="<?= Conf::index ?>admin/update">
                <img class="mt-5" width="300px" src="<?= Conf::index ?>/assets/image/imageAccueil/<?= $presentation[0]['image_accueil'] ?>" alt="">
                <input name='selectImagePresentation' class="form-control mt-2" type="file" id="formFile">
                <input class="btn btn-success mt-2 mb-3" type="submit" value="Modifier image" name="updateImagePresentation">
            </form>
        </div>
    </div>
    <div class="row">
        <h2 class="text-center  my-5"><u>Mon equipement</u></h2>
        <div class="col-6">
            <form enctype='multipart/form-data' method="POST" action="<?= Conf::index ?>admin/update">
                <img class="mt-5" width="300px" src="<?= Conf::index ?>/assets/image/imageAccueil/<?= $presentation[0]['image_perso'] ?>" alt="">
                <input name='selectImageEquipement' class="form-control mt-2" type="file" id="formFile">
                <input class="btn btn-success mt-2 mb-3" type="submit" value="Modifier image" name="updateImageEquipement">
            </form>
        </div>
        <div class="col-6">
            <form method="POST" action="<?= Conf::index ?>admin/update">
                <div class="form-group mt-3 mb-3">
                    <label for="inputDefault">Titre :</label>
                    <input type="text" class="form-control" id="inputDefault" value="<?= $presentation[0]["titre_perso"] ?>" name="titre">
                </div>
                <div class="form-group">
                    <label for="contenu" class="form-label mt-4">Contenu :</label>
                    <textarea name="contenu" class="form-control" id="contenu" rows="6"><?= $presentation[0]["contenu_perso"] ?></textarea>
                </div>
                <input class="btn btn-success mt-2" type="submit" value="Modifier contenu" name="updatePresentation">
            </form>
        </div>

    </div>
</div>
</div>