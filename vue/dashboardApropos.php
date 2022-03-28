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

        <div class="d-flex aproposFlex align-items-center justify-content-around">
            <div class="col-10 col-md-5">
                <form enctype='multipart/form-data' method="POST" action="<?= Conf::index ?>admin/update">
                    <input type="hidden" value="<?= $_SESSION['token'] ?>" name="token">
                    <img class="mt-5" width="300px" src="<?= Conf::index ?>assets/image/imageAccueil/<?= htmlentities($accueil[0]['image']) ?>" alt="">
                    <input name='selectImagePresentation' class="form-control mt-2" type="file" id="formFile">
                    <input class="btn cssbuttons-io-button mt-2 mb-3" type="submit" value="Modifier image" name="updateImagePresentation">
                </form>
            </div>
            <div class="col-10 col-md-6">
                <form method="POST" action="<?= Conf::index ?>admin/update">
                    <input type="hidden" value="<?= $_SESSION['token'] ?>" name="token">
                    <div class="form-group mt-3 mb-3">
                        <label for="inputDefault">Titre :</label>
                        <input type="text" class="form-control" id="inputDefault" value="<?= htmlentities($accueil[0]["titre"]) ?>" name="titre">
                    </div>
                    <div class="form-group">
                        <label for="contenu" class="form-label mt-4">Contenu :</label>
                        <textarea name="contenu" class="form-control" id="contenu" rows="6"><?= htmlentities($accueil[0]["contenu"]) ?></textarea>
                    </div>
                    <input class="btn cssbuttons-io-button mt-2" type="submit" value="Modifier contenu" name="updatePresentation">
                </form>
            </div>
        </div>
    </div>
    <h2 class="text-center  my-5"><u>Mon equipement</u></h2>


    <div class="d-flex justify-content-center">
        <button type="button" class="btn cssbuttons-io-button-blue" data-bs-toggle="modal" data-bs-target="#exampleModal"><span>Ajouter un equipement</span></button>
    </div>
    <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Ajouter un equipement</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">

                    <form enctype='multipart/form-data' method="POST" action="<?= Conf::index ?>admin/insert">
                        <input type="hidden" value="<?= $_SESSION['token'] ?>" name="token">
                        <div class="form-group mt-3 ">
                            <label for="inputDefault">Nom :</label>
                            <input type="text" class="form-control" id="inputDefault" name="titre">
                        </div>
                        <div class="form-group mt-3">
                            <label for="contenu" class="form-label mt-4">Description :</label>
                            <textarea name="contenu" class="form-control" id="contenu" rows="6"></textarea>
                        </div>
                        <div class="form-group mt-3">
                            <label for="selectImageEquipement">Image :</label>
                            <input type='file' name='selectImageEquipement' class="form-control mt-2" id="selectImageEquipement" />
                        </div>

                        <input class="btn cssbuttons-io-button mt-2" type="submit" value="Ajouter equipement" name="ajouterEquipement">

                    </form>
                </div>
            </div>
        </div>
    </div>


    <?php
    $chiffre = 1;
    foreach ($equipement as $equip) {

        $equipID = $equip['id'];
    ?>
        <div class="row my-5 m-2 p-3 border border-4 aproposFlex align-items-center">
            <div class="col-12 col-md-6">
                <div>

                    <button class="btn cssbuttons-io-button-red mb-5" onclick='window.location.href="<?= Conf::index ?>admin/supprimerEquipement/<?= $equipID ?>"'>Supprimer l'equipement</button>
                    <h4 class="text-center">Equipement <?= $chiffre ?></h4>

                </div>
                <form method="POST" action="<?= Conf::index ?>admin/update">
                    <input type="hidden" value="<?= $_SESSION['token'] ?>" name="token">
                    <div class="form-group mt-3 mb-3">
                        <label for="inputDefault">Titre :</label>
                        <input type="text" class="form-control" id="inputDefault" value="<?= htmlentities($equip["nom"]) ?>" name="titre_equipement">
                    </div>
                    <div class="form-group">
                        <label for="contenu" class="form-label mt-4">Contenu :</label>
                        <textarea name="contenu_equipement" class="form-control" id="contenu" rows="6"><?= htmlentities($equip["description"]) ?></textarea>
                    </div>
                    <input class="btn cssbuttons-io-button mt-2" type="submit" value="Modifier contenu" name="updateEquipement">
                    <input type="hidden" name="id_equipement" value="<?= $equip['id'] ?>">
                </form>
            </div>
            <div class="col-12 col-md-6">
                <div class="text-end">
                </div>
                <form enctype='multipart/form-data' method="POST" action="<?= Conf::index ?>admin/update">
                    <input type="hidden" value="<?= $_SESSION['token'] ?>" name="token">
                    <img class="mt-5" width="300px" src="<?= Conf::index ?>assets/image/imageAccueil/<?= htmlentities($equip['image']) ?>" alt="">
                    <input name='selectImageEquipement' class="form-control mt-2" type="file" id="formFile">
                    <input class="btn cssbuttons-io-button mt-2 mb-3" type="submit" value="Modifier image" name="updateImageEquipement">
                    <input type="hidden" name="id_equipement" value="<?= $equip['id'] ?>">
                </form>
            </div>
        </div>
    <?php
        $chiffre++;
    }
    ?>
</div>
</div>