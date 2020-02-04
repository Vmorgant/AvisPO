<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
<?php

$imagesDir = 'Image/';
$images = glob($imagesDir . '*.{jpg,jpeg,png,gif}', GLOB_BRACE);
$randomImage = $images[array_rand($images)];
$name=$randomImage;
echo ('
<div class="container h-100">
    <div class="row h-100 justify-content-center align-items-center">
        <div class="col-12">
            <div class="card bg-dark">
              <img class="card-img-top" src="'.$randomImage.'" alt="Votre Ensipouic">
              <div class="card-body">
                <h5 class="card-title text-light">'.$name.' vous remercie</h5>
                <p class="card-text text-light">Nous espérons que vous avez appréciés ces portes ouvertes et espérons vous revoir l\'année prochaine.</p>
                <a href="https://sondage.univ-lemans.fr/limesurvey/index.php/599327?lang=fr" class="card-link">Nouveau questionnaire</a>
                <a href="http://ensim.univ-lemans.fr/fr/index.html" class="card-link">Le site de l\'ENSIM</a>
              </div>
            </div>
        </div>
    </div>
</div>
');