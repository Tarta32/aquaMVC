<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Mon but est de vous faire découvrir ce que je vois sous la surface des étangs et rivières et lutter pour la préservation des milieux aquatiques en dépolluant un maximum ces milieux.">
    <meta prefix="og: http://ogp.me/ns#" property="og:title" content="Aquavision-shooting photos sub-aquatiques" />
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
    <link rel="stylesheet" href="<?= Conf::index ?>assets/css/style.css">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" defer></script>
    <title>Admin - Aquavision, photos videos et referencement sub-aquatique</title>
</head>

<body>
    <div class="container adminCenter">
        <form method='POST' action="">
            <div class="row justify-content-center">
                <div class="col-6 text-center">
                    <p class="text-danger"><?php if (isset($_SESSION['message'])) {
                                                echo $_SESSION['message'];
                                                unset($_SESSION['message']);
                                            } ?></p>
                    <div class="form-group ">
                        <input name="password" type="password" pattern="^[^ ].+[^ ]$" class="form-control mb-5" id="password" aria-describedby="password passwordCheck" placeholder="Entre votre nouveau Mot de passe">
                        <input name="confirmPassword" type="password" pattern="^[^ ].+[^ ]$" class="form-control" id="confirmPassword" aria-describedby="confirmPassword passwordCheck" placeholder="Confirmer le nouveau Mot de passe">
                    </div>
                    <div class="row">
                        <div class="col">
                            <input name="valider" class="btn cssbuttons-io-button mt-5" type="submit" value="Reinitialiser Password">
                        </div>
                    </div>
                </div>
            </div>
        </form>
    </div>

    <script>
        window.onload = function() {

            let passwordField = document.querySelectorAll(".passwordCheck");

            passwordField.forEach((input) => {

                input.addEventListener("keydown", function(event) {

                    if (event.keyCode == 32) {

                        event.preventDefault();

                    }

                })
            })

        }
    </script>
</body>

</html>