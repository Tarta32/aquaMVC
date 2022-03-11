<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="???">
    <link rel="stylesheet" href="https://bootswatch.com/5/spacelab/bootstrap.min.css">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" defer></script>
    <script src="https://unpkg.com/boxicons@2.1.1/dist/boxicons.js" defer></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" integrity="sha512-Fo3rlrZj/k7ujTnHg4CGR2D7kSs0v4LLanw2qksYuRlEzO+tcaEPQogQ0KaoGN26/zrn20ImR1DfuLWnOo7aBA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="<?= Conf::index ?>assets/css/style.css">
    <link href='https://unpkg.com/boxicons@2.1.1/css/boxicons.min.css' rel='stylesheet'>
    <title><?= $title ?></title>


</head>

<body>
    <div class="container-fluid topHeader d-flex justify-content-between">
        <div class="headerMedia d-flex w-50 justify-content-between">
            <div class="mail">
                <a href="mailto:test@gmail.com"><i class='bx bx-mail-send'></i><span class="textHeaderTop">&nbsp; test@gmail.com</span></a>
            </div>
            <div class="phone">
                <a href="tel: 0123456789"><i class='bx bxs-phone-call'></i><span class="textHeaderTop">&nbsp; 0123456789</span></a>
            </div>
        </div>
        <div class="iconeFlex d-flex">
            <div>
                <a href=""><i class='bx bxl-instagram-alt'></i></a>
                <a href=""><i class='bx bxl-twitter'></i></a>
            </div>
            <div>
                <a href=""><i class='bx bxl-youtube'></i></a>
                <a href=""><i class='bx bxl-facebook-square'></i></a>
            </div>
        </div>
    </div>
    <nav class="navbar navbar-expand-lg navbar-light">
        <div class="container-fluid">


            <a href="<?= Conf::index ?>"><img src="<?= Conf::index ?>assets/image/imageAccueil/BGimage/logo.png" style="width:75px" alt="Logo de plongée"></a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarColor01" aria-controls="navbarColor01" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>


            <div class="collapse navbar-collapse justify-content-end" id="navbarColor01">
                <ul class="navbar-nav text-center">
                    <li class="nav-item">
                        <a class="nav-link" href="<?= Conf::index ?>">Accueil</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="<?= Conf::departement ?>">Departements</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Prestations</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="<?= Conf::contact ?>">Contact</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">A propos</a>
                    </li>
                    <?php if ($_SESSION) {
                    ?>
                        <li class="nav-item">
                            <a class="nav-link" href="<?= Conf::dashboard ?>">Admin</a>
                        </li>
                    <?php } ?>

                </ul>
            </div>

        </div>
        </div>
    </nav>
    <section class="headerIndex relative" style="background-image: url(<?= Conf::index ?>assets/image/imageAccueil/BGimage/Screenshot_20211026_223424.jpg);">
        <h2 class="shadowText nonSelectionnable absolute p-4"><?= $title ?></h2>
        <h1 class="absolute nonSelectionnable p-4"><?= $title ?></h1>
    </section>