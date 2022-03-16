<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="https://bootswatch.com/5/spacelab/bootstrap.min.css">
  <link rel="stylesheet" href="<?= Conf::index ?>assets/css/style.css">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" defer></script>
  <title>Admin</title>
</head>

<body>

  <div class="container adminCenter">
    <form method='POST' action="">
      <div class="row justify-content-center">
        <div class="col-6 text-center">
          <p class="text-danger"><?php if(isset($_SESSION['error'])) { echo $_SESSION['error']; unset($_SESSION['error']); } ?></p>
          <div class="form-group ">
            <input name="login" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Entrez login">
          </div>
          <div class="form-group mt-5">
            <input name="password" type="password" class="form-control" id="exampleInputPassword1" placeholder="Password">
          </div>
          <input name="valider" class="btn cssbuttons-io-button mt-5" type="submit" value="Connexion">
          <button class="btn cssbuttons-io-button-red mt-5" onclick="window.location.href='<?= Conf::index ?>'">Retour</button>
        </div>
      </div>
    </form>
  </div>
</body>

</html>