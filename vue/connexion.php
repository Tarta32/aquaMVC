<?php 
    include './vue/commun/headerAdmin.php';

?>

<div class="container adminCenter">
    <form method='POST' action="">
      <div class="row justify-content-center">
      <div class="col-6 text-center">
        <div class="form-group ">
          <input name="login" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Entrez login">
        </div>
        <div class="form-group mt-5">
          <input name="password" type="password" class="form-control" id="exampleInputPassword1" placeholder="Password">
        </div>
        <a class="btn btn-danger mt-5" href="./index.php">Retour</a>
        <input name="valider" class="btn btn-success mt-5" type="submit" value="Connexion">
      </div>
    </div>
    </form>
  </div>
</body>

</html>