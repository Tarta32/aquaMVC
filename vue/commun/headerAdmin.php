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

<nav class="navbar navbar-expand-lg navbar-light">
    <div class="container-fluid">


        <a href="<?= Conf::index ?>"><img src="<?= Conf::index ?>assets/image/imageAccueil/BGimage/logo.png" style="width:75px" alt="Logo de plongée"></a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarColor01" aria-controls="navbarColor01" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>


        <div class="collapse navbar-collapse justify-content-end" id="navbarColor01">
            <ul class="navbar-nav text-center">
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" data-bs-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false">Modifier</a>
                    <div class="dropdown-menu ">
                        <a class="dropdown-item" href="<?= Conf::dashboard ?>">Modifier Departements</a>
                        <a class="dropdown-item" href="<?= Conf::dashboardAccueil ?>">Modifier Accueil</a>
                        <a class="dropdown-item" href="<?= Conf::dashboardApropos ?>">Modifier A-propos</a>
                    </div>
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