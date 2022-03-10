<?php 

$title = "Departements";
include './vue/commun/header.php'


?>
<div class="container">
    <h2 class="text-center">Liste des departements disponible</h2>
<ul>
    <?php 
        foreach ($departementVisite as $dp){
            ?>
    <li>
        <h2 class="text-center" ><a href="/aquaMVC/departement/visite/<?= $dp['id'] ?>"><?= $dp['departement_nom'] ?></a></h2>
    </li>

<?php 
        }
?>
    
</ul>
</div>



<?php 

include './vue/commun/footer.php'
?>