<?php

include './vue/commun/headerAdmin.php'

?>

<div class="container">
    <?php

    if (isset($_SESSION['message_error'])) {

        echo "<p style='color:red'>" . $_SESSION['message_error'] . "</p>";

        unset($_SESSION['message_error']);
    }
    if (isset($_SESSION['message_success'])) {

        echo "<p style='color:green'>" . $_SESSION['message_success'] . "</p>";

        unset($_SESSION['message_success']);
    }


    ?>
    <div class="container">
        <div class="row">
            <div class="col-6 mx-auto">
                <h2 class="text-center">Departement</h2>
                <form method="POST" action="<?= Conf::index ?>admin/dashboard">
                    <input type="hidden" value="<?= $_SESSION['token'] ?>" name="token">
                    <div class="form-group">
                        <select class="form-select mt-4" id="exampleSelect1" name="departement">
                            <?php
                            foreach ($departement as $dp) {
                                if ($dp['visite'] == 1) {
                            ?>
                                    <option <?php if (Conf::dashboard . '/' . $dp['departement_slug'] == $_SERVER['REQUEST_URI']) {echo 'selected';} ?> value="<?= $dp['departement_slug'] ?>" class="scrollVisite"><?= $dp['id'] . " " . $dp['departement_nom'] ?> [visité]</option>
                                    <?php } else { ?>
                                        <option <?php if (Conf::dashboard . '/' . $dp['departement_slug'] == $_SERVER['REQUEST_URI']) {echo 'selected';} ?> value="<?= $dp['departement_slug'] ?>" class="scrollNonVisite"><?= $dp['id'] . " " . $dp['departement_nom'] ?></option>
                            <?php }
                            } ?>
                        </select>
                        <div class="d-flex justify-content-between">
                            <input class="btn cssbuttons-io-button mt-4" type="submit" value="Choisir departement" name="valider">

                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
    <?php

    if (isset($selectDepartement)) {

        if ($selectDepartement['visite'] == 0) {

    ?>
            <div class="container">
                <div class="row">
                    <div class="col-8 mx-auto my-5 p-5 border border-success border-2">
                        <form enctype='multipart/form-data' method="POST" action="<?= Conf::index ?>admin/insert">
                            <input type="hidden" value="<?= $_SESSION['token'] ?>" name="token">
                            <h2><?= $selectDepartement['departement_nom'] ?></h2>
                            <input style="display: none;" type="text" name="departement" value="<?= $selectDepartement["id"] ?>">
                            <input style="display: none;" type="text" name="departement_slug" value="<?= $selectDepartement["departement_slug"] ?>">                           
                            <div class="form-group">
                                <label for="formFile" class="form-label mt-4">inserer image</label>
                                <input name='selectImage[]' class="form-control" type="file" id="formFile" multiple required>
                            </div>
                            <input class="btn cssbuttons-io-button mt-2" type="submit" value="Upload image(s)" name="valider2">
                        </form>
                    </div>
                </div>

            </div>

        <?php

        } else {

        ?>
            <form method="POST" enctype="multipart/form-data" action="<?= Conf::index ?>admin/insert">

                <input type="hidden" value="<?= $_SESSION['token'] ?>" name="token">

                <input type="hidden" name="oldText" value="<?= $selectDepartement['departement_description'] ?>">
                <h2><?= $selectDepartement['departement_nom'] ?></h2>
                <input style="display: none;" type="text" name="departement" value="<?= $selectDepartement["id"] ?>">
                <input style="display: none;" type="text" name="departement_slug" value="<?= $selectDepartement["departement_slug"] ?>">
                <?php foreach ($epingles as $epingle) {
                ?>
                    <div class="form-check">
                        <input class="form-check-input" type="checkbox" name="epingle[]" value="<?= $epingle['id'] ?>" id="flexCheckDefault" <?php if (in_array($epingle['id'], $listeIdEpingleDepartement)) {
                                                                                                                                                    echo 'checked';
                                                                                                                                                } ?>>
                        <label class="form-check-label" for="flexCheckDefault">
                            <?= $epingle['description'] ?>
                        </label>
                    </div>
                <?php } ?>
                <div class="form-group mt-5">
                    <label for="descriptionDepartement">Description departement :</label>
                    <textarea class="form-control" name="descriptionDepartement" id="descriptionDepartement" cols="30" rows="10"><?= $selectDepartement['departement_description'] ?></textarea>
                </div>
                <div class="form-group">
                    <label for="formFile" class="form-label mt-4">inserer image</label>
                    <input name='selectImage[]' class="form-control" type="file" id="formFile" multiple>
                </div>
                <input class="btn cssbuttons-io-button my-3" type="submit" value="Upload image(s) et Valider description" name="valider2">
            </form>
            <section class="sectionMasonry">
                <div class="masonry">
                    <?php
                    foreach ($image as $img) {

                    ?>
                        <div class="mItem" style="position: relative;">
                            <button style="position: absolute; left: 0" type="button" class="btn btn-danger" data-bs-toggle="modal" data-bs-target="#exampleModal<?=$img['image_id']?>">
                                x
                            </button>
                            <div class="modal fade" id="exampleModal<?=$img['image_id']?>" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                <div class="modal-dialog">
                                    <div class="modal-content">
                                        <div class="modal-body">
                                            Supprimer l'element ?
                                        </div>
                                        <div class="modal-footer">
                                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Annuler</button>
                                            <form method="POST" action='<?= Conf::index ?>admin/supprimer/<?= $img['image_id'] ?>-<?= $img['id_departement'] ?>'>
                                                <input type="hidden" value="<?= $_SESSION['token'] ?>" name="token">
                                                <button type="submit" name="supprimer" class="btn btn-danger">Supprimer</button>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <img style="max-width: 200px;" src="<?= Conf::image . htmlentities($img['nom_image']) ?>" alt="" />

                        </div>

                    <?php
                    }
                    ?>
                </div>
            </section>
    <?php

        }
    }
    ?>
</div>
</body>
</html>