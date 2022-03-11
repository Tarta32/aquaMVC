<?php

$title = "Departements";
include './vue/commun/header.php'


?>
<div class="container">
    <h2 class="text-center text-success my-5"><u>Liste des departements disponible</u></h2>
    <ul>
        <?php
        foreach ($departementVisite as $dp) {
        ?>
            <li>
                <h2 class="text-center"> <a class="text-info" href="<?= Conf::index ?>departement/visite/<?= $dp['id'] ?>">&sime;<?= $dp['departement_nom'] ?> :&gtcir;</a></h2>
            </li>

        <?php
        }
        ?>

    </ul>
</div>



<?php

include './vue/commun/footer.php'
?>