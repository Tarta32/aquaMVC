<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Mon but est de vous faire découvrir ce que je vois sous la surface des étangs et rivières et lutter pour la préservation des milieux aquatiques en dépolluant un maximum ces milieux.">
    <meta prefix="og: http://ogp.me/ns#" property="og:title" content="Div Web association création de site internet & formation Nancy" />
    <meta prefix="og: http://ogp.me/ns#" property="og:type" content="video.movie" />
    <meta prefix="og: http://ogp.me/ns#" property="og:url" content="https://www.aquavision-shooting.com/" />
    <meta prefix="og: http://ogp.me/ns#" property="og:image" content="https://www.aquavision-shooting.com/assets/image/imageAccueil/BGimage/accueil.jpg" />
    <meta prefix="og: http://ogp.me/ns#" property="og:image:secure_url" content="https://www.aquavision-shooting.com/assets/image/imageAccueil/BGimage/accueil.jpg" />
    <meta prefix="og: http://ogp.me/ns#" property="og:image:type" content="image/jpeg" />
    <meta prefix="og: http://ogp.me/ns#" property="og:image:width" content="400" />
    <meta prefix="og: http://ogp.me/ns#" property="og:image:height" content="300" />
    <meta prefix="og: http://ogp.me/ns#" property="og:image:alt" content="Robert Morgan" />
    <meta prefix="og: http://ogp.me/ns#" property="og:description" content="Mon but est de vous faire découvrir ce que je vois sous la surface des étangs et rivières et lutter pour la préservation des milieux aquatiques en dépolluant un maximum ces milieux." />
    <meta name="keywords" content="photo, sub-aquatique, poisson, faune, flores, aquatique, referencement, marin, mer ocean, fleuve, etang, riviere, lac, france, suisse, depollution">
    <meta name="author" content="Barbe Julien">
    <link rel="icon" type="image/png" href="<?= Conf::index ?>assets/image/imageAccueil/BGimage/favicon.ico" />
    <link rel="stylesheet" href="https://bootswatch.com/5/spacelab/bootstrap.min.css">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" defer></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" integrity="sha512-Fo3rlrZj/k7ujTnHg4CGR2D7kSs0v4LLanw2qksYuRlEzO+tcaEPQogQ0KaoGN26/zrn20ImR1DfuLWnOo7aBA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="<?= Conf::index ?>assets/css/style.css">
    <script src="<?= Conf::index ?>assets/js/script.js" defer></script>
    <link href='https://unpkg.com/boxicons@2.1.1/css/boxicons.min.css' rel='stylesheet'>
    <title><?= $title . $description ?></title>


</head>

<body>
    <div class="container-fluid topHeader d-flex justify-content-between">
        <div class="headerMedia d-flex w-50 justify-content-between">
            <div class="mail">
                <a href="mailto:morgan.robert1987@gmail.com"><i class='bx bx-mail-send'></i><span class="textHeaderTop">&nbsp; morgan.robert1987@gmail.com</span></a>
            </div>
            <div class="phone">
                <a href="tel: 0631895783"><i class='bx bxs-phone-call'></i><span class="textHeaderTop">&nbsp; 0631895783</span></a>
            </div>
        </div>
        <div class="iconeFlex d-flex">
            <div>
                <a href="https://www.instagram.com/fish_ooting/" class="text-primary"><i class='bx bxl-instagram-alt'></i></a>
                <a href="https://www.facebook.com/MorganAquatique" class="text-primary"><i class='bx bxl-facebook-square'></i></a>
                <a href="https://www.youtube.com/channel/UC4DCDphd0U-pfaxjrGOAEIQ" class="text-primary"><i class='bx bxl-youtube'></i></a>
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
                        <a class="nav-link" href="<?= Conf::index ?>"><span class="vert">A</span>ccueil</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="<?= Conf::departement ?>"><span class="vert">D</span>epartements</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#"><span class="vert">P</span>restations</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="<?= Conf::contact ?>"><span class="vert">C</span>ontact</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="<?= Conf::apropos ?>"><span class="vert">A</span> propos</a>
                    </li>
                    <?php if ($_SESSION) {
                    ?>
                        <li class="nav-item">
                            <a class="nav-link" href="<?= Conf::dashboard ?>"><span class="vert">A</span>dmin</a>
                        </li>
                    <?php } ?>

                </ul>
            </div>

        </div>
        </div>
    </nav>
    <section class="headerIndex relative" style="background-image: url(<?= Conf::index ?>assets/image/imageAccueil/BGimage/Screenshot_20211026_223424.jpg);">
        <h2 class="shadowText nonSelectionnable absolute p-4 revealAnim"><?= $title ?></h2>
        <h1 class="absolute nonSelectionnable p-4 revealAnim"><?= $title ?></h1>
    </section>