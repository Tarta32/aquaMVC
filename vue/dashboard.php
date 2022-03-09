<?php

include './vue/commun/headerAdmin.php'

?>
<nav class="navbar navbar-expand-lg navbar-light">
        <div class="container-fluid">


            <a href="<?= Conf::index ?>"><img src="/aquaMVC/assets/image/imageAccueil/BGimage/logo.png" style="width:75px" alt="Logo de plongée"></a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarColor01" aria-controls="navbarColor01" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>


            <div class="collapse navbar-collapse justify-content-end" id="navbarColor01">
                <ul class="navbar-nav text-center">
                    <li class="nav-item">
                        <a href="<?= Conf::dashboardAccueil ?>" class="nav-link">Modifier accueil</a>
                    </li>
                    <li class="nav-item">
                        <a href="<?= Conf::message ?>" class="nav-link">Messages</a>
                    </li>
                    <li class="nav-item">
                    <a href="<?= Conf::deconnexion ?>" class="nav-link">Deconnexion</a>
                    </li>
                </ul>
            </div>
        </div>
        </div>
    </nav>
<div class="container">    
    <?php

    if (isset($_SESSION['message'])) {

        echo "<p style='color:red'>" . $_SESSION['message'] . "</p>";

        unset($_SESSION['message']);
    }


    ?>
    <div class="container">
        <div class="row">
            <div class="col-6 mx-auto">
                <h2 class="text-center">Departement</h2>
                <div class="form-group">
                    <form method="POST" action="<?= Conf::index ?>admin/dashboard">
                        <select class="form-select mt-4" id="exampleSelect1" name="departement">
                            <?php
                            foreach ($departement as $dp) {
                                if ($dp['visite'] == 1) {

                            ?>
                                    <option value="<?= $dp['departement_nom'] ?>" class="scrollVisite"><?= $dp['departement_code'] . " " . $dp['departement_nom'] ?> [visité]</option>
                                <?php } else { ?>
                                    <option value="<?= $dp['departement_nom'] ?>" class="scrollNonVisite"><?= $dp['departement_code'] . " " . $dp['departement_nom'] ?></option>
                            <?php }
                            } ?>
                        </select>
                        <div class="d-flex justify-content-between">
                            <input class="btn btn-success mt-4" type="submit" value="Modifier departement" name="valider">

                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <?php

    if (isset($selectDepartement)) {

        if ($selectDepartement['visite'] == 0) {

    ?>
            <div class="container">
                <div class="row">
                    <div class="col-8 mx-auto mt-5 p-5 border border-success border-2">
                        <form enctype='multipart/form-data' method="POST" action="/aquaMVC/admin/insert">
                            <h2><?= $selectDepartement['departement_nom'] ?></h2>
                            <input style="display: none;" type="text" name="departement" value="<?= $selectDepartement["id"] ?>">
                            <input style="display: none;" type="text" name="departement_slug" value="<?= $selectDepartement["departement_slug"] ?>">
                            <div class="form-group">
                                <label for="formFile" class="form-label mt-4">inserer image</label>
                                <input name='selectImage[]' class="form-control" type="file" id="formFile" multiple>
                            </div>
                            <input class="btn btn-success mt-2" type="submit" value="valider" name="valider2">
                        </form>
                    </div>
                </div>

            </div>

        <?php

        } else {

        ?>

            <form enctype='multipart/form-data' method="POST" action="/aquaMVC/admin/insert">
                <h2><?= $selectDepartement['departement_nom'] ?></h2>
                <input style="display: none;" type="text" name="departement" value="<?= $selectDepartement["id"] ?>">
                <input style="display: none;" type="text" name="departement_slug" value="<?= $selectDepartement["departement_slug"] ?>">
                <div class="form-group">
                    <label for="formFile" class="form-label mt-4">inserer image</label>
                    <input name='selectImage[]' class="form-control" type="file" id="formFile" multiple>
                </div>
                <input class="btn btn-success" type="submit" value="valider" name="valider2">
            </form>
            <section class="sectionMasonry">
                <div class="masonry">
                    <?php
                    foreach ($image as $img) {

                    ?>
                        <div class="mItem" style="position: relative;">

                            <img style="max-width: 200px;" src="<?= Conf::image . $img['nom_image'] ?>" alt="" />
                            <a style="position: absolute; left: 0" class="btn btn-danger" href="/aquaMVC/admin/supprimer/<?= $img['image_id'] ?>-<?= $img['id_departement'] ?>">X</a>

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