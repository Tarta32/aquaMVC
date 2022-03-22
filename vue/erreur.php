<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Mon but est de vous faire découvrir ce que je vois sous la surface des étangs et rivières et lutter pour la préservation des milieux aquatiques en dépolluant un maximum ces milieux.">
    <link rel="icon" type="image/png" href="<?= Conf::index ?>assets/image/imageAccueil/BGimage/favicon.ico" />
    <link rel="stylesheet" href="https://bootswatch.com/5/spacelab/bootstrap.min.css">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" defer></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" integrity="sha512-Fo3rlrZj/k7ujTnHg4CGR2D7kSs0v4LLanw2qksYuRlEzO+tcaEPQogQ0KaoGN26/zrn20ImR1DfuLWnOo7aBA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="<?= Conf::index ?>assets/css/style.css">
    <title>Page introuvable</title>
</head>
<body>
    <div class="container-fluid erreur" style="background-image:url(<?= Conf::index ?>assets/image/imageAccueil/BGimage/1024325.jpg);">
        <div class="row">
            <div class="col text-center" >
                <h3 style="font-family: 'Indie Flower', cursive;" class="text-warning">Page non trouvée</h3>
                <p style="font-family: 'Indie Flower', cursive;" class="text-danger">Il semblerait que la page que vous cherchez soit perdu dans les abysses </p>
                <div>
                    <button class="buttonError" onclick='window.location.href="<?= Conf::index ?>"'> Remonter à la surface</button>
                </div>
            </div>
        </div>
    </div>
</body>
</html>