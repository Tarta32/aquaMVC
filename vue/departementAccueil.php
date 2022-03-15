<?php

$title = "Departements";
include './vue/commun/header.php'


?>
<div class="container">
    <h2 class="text-center bleu my-5"><span class="vert">L</span>iste des departements disponible</h2>
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