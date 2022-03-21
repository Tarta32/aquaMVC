<?php

include './vue/commun/headerAdmin.php'

?>
<div class="container">
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
                <input type="hidden" value="<?= $_SESSION['token'] ?>" name="token">
                <div class="form-group mt-3 mb-3">
                    <label for="inputDefault">Titre :</label>
                    <input type="text" class="form-control" id="inputDefault" value="<?= htmlentities($accueil["titre"]) ?>" name="titre">
                </div>
                <div class="form-group">
                    <label for="contenu" class="form-label mt-4">Contenu :</label>
                    <textarea name="contenu" class="form-control" id="contenu" rows="6"><?= htmlentities($accueil["contenu"]) ?></textarea>
                </div>
                <input class="btn cssbuttons-io-button mt-2" type="submit" value="Modifier contenu" name="updateAccueil">
            </form>
            <div class="row">
                <div class="col-6">
                    <form enctype='multipart/form-data' method="POST" action="<?= Conf::index ?>admin/update">
                        <label for="selectVideo" class=" mt-5">Lien Youtube de la video :</label>
                        <input name='selectVideo' id="selectVideo" class="form-control mt-2" type="text">
                        <input class="btn cssbuttons-io-button mt-2 mb-3" type="submit" value="Modifier video" name="updateVideo">
                        <iframe width="500" height="300" src="https://www.youtube.com/embed/<?= htmlentities($accueil['media']) ?>" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                    </form>
                </div>
                <div class="col-6">
                    <form enctype='multipart/form-data' method="POST" action="<?= Conf::index ?>admin/insert">
                        <input type="hidden" value="<?= $_SESSION['token'] ?>" name="token">
                        <div class="form-group">
                            <input name='selectImage[]' class="form-control mt-5" type="file" id="formFile" multiple>
                            <input class="btn cssbuttons-io-button mt-2 mb-3" type="submit" value="Telecharger image(s)" name="validerAccueil">
                        </div>
                    </form>
                    <section class="sectionMasonry">
                        <div class="masonry dashboardMasonry">
                            <?php
                            foreach ($requeteImage as $img) {
                            ?>
                                <div class="mItem" style="position: relative;">
                                    <form style="position: absolute; left: 0" action="<?= Conf::index ?>admin/supprimerAccueil/<?= $img['id'] ?>" method="post">
                                        <input type="hidden" value="<?= $_SESSION['token'] ?>" name="token">
                                        <button type="submit" class="btn btn-danger">x</button>
                                    </form>
                                    <img style="max-width: 150px;" src="<?= Conf::index ?>assets/image/<?= htmlentities($img['nom_image']) ?>" alt="" />
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