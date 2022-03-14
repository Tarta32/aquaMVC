<?php
$title = 'A propos';

include './vue/commun/header.php';

?>
<h2 class="text-center text-success mt-5"><u>DESCRIPTION</u></h2>

<div class="container">
    <div class="row">
        <div class="col border ">
            <h3 class="text-center"><?= $presentation[0]['titre'] ?></h3>
            <p><?= $presentation[0]['contenu'] ?></p>
        </div>
    </div>
    <div class="row">
        <div class="col border ">
            <h3 class="text-center"><?= $presentation[0]['titre_perso'] ?></h3>
            <p><?= $presentation[0]['contenu_perso'] ?></p>
        </div>
    </div>
</div>
 



<?php 
    include './vue/commun/footer.php'
?>