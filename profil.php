<?php

include("./_include/arrayTeams.php");
$teamProfil = htmlspecialchars($_GET["id"]);
$teams = $premierLeagueTeams['teams'];
$info = $teams[$teamProfil];

var_dump($info['strCountry']);

?>


<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="./style.css">
    <title>Profil Foot2PremierLeague</title>
</head>

<body>
    <nav class="navbar fixed-top navbar-light bg-light">
        <div class="container navColor">
            <div class="row-cols-2 d-inline p-2">
                <a class="navbar-brand" href="index.php">
                    <img src="https://www.premierleague.com/resources/prod/v6.92.0-3875/i/elements/premier-league-logo.svg" alt="" width="120" height="92">
                </a>
            </div>
            <div id="big-logo-nav" class="row-cols-12 d-none d-xl-flex navColor ">
                <?php foreach ($teams as $key => $team) : ?>
                    <a class="navbar-brand" href="./profil.php?id=<?= $key ?>">
                        <img class="" src="<?= $team["strTeamBadge"] ?> " alt="" width="40" height="40">
                    </a>
                <?php endforeach; ?>
            </div>
        </div>
    </nav>

    <main id="fixittop" class="d-flex p-2 justify-content-center topFix ">
        <div class=" d-flex flex-column">
            <div class="container">

                <h2 class="border-bottom">Présentation de l'équipe </h2>
                <img src="<?= $info["strTeamBanner"] ?> " alt="" class="col-12 pd-2 img-fluid">
                <p class="p-2 mr-3"><?= $info["strDescriptionEN"] ?></p>
                <h2 class="border-bottom">Information</h2>

                <div class="col-12 d-flex p-2">
                    <span class="d-inline-flex p-2 col-6 m-2">
                        <ul class="list-group">
                            <li class="card list-group-item text-center"><span> Website :<a href="<?= $info["strWebsite"] ?> " target="_blank"> <?= $info["strWebsite"] ?></a></span></li>
                            <li class="card list-group-item text-center"><span> Facebook :<a href="<?= $info["strFacebook"] ?> " target="_blank"> <?= $info["strFacebook"] ?></a></span></li>
                            <li class="card list-group-item text-center"><span> Twitter :<a href="<?= $info["strTwitter"] ?> " target="_blank"> <?= $info["strTwitter"] ?></a></span></li>
                            <li class="card list-group-item text-center"><span> Instagram :<a href="<?= $info["strInstagram"] ?> " target="_blank"> <?= $info["strInstagram"] ?></a></span></li>
                        </ul>
                    </span>
                    <span class="d-inline-flex p-2 col-6 m-2">
                        <ul class="list-group text-align">
                            <li class="card list-group-item text-center"><span><a href=" <?= $info["strGender"] ?> "></a></span> <?= $info["strGender"] ?> </li>
                            <li class="card list-group-item text-center"><span><a href=" <?= $info["strAlternate"] ?> "></a></span><img src="<?= $info["strTeamLogo"] ?>" alt="nogender" width="200px" height="50px"></li>
                            <li class="card list-group-item text-center"><span><a href=" <?= $info["strCountry"] ?> "></a></span> <?= $info["strCountry"] ?> </li>
                            <li class="card list-group-item text-center"><span><a href=" <?= $info["strStadiumLocation"] ?> "></a></span> <?= $info["strStadiumLocation"] ?> </li>
                        </ul>
                    </span>

                </div>

                <h2 class="border-bottom">Galery</h2>
                <div class="d-flex p-2">
                    <div class="card d-inline-flex p-2" style="width: 18rem;">
                        <img class="card-img-top" src=" <?= $info["strTeamFanart1"] ?> " alt="Card image cap">
                    </div>
                    <div class="card d-inline-flex p-2" style="width: 18rem;">
                        <img class="card-img-top" src=" <?= $info["strTeamFanart2"] ?> " alt="Card image cap">
                    </div>
                    <div class="card d-inline-flex p-2" style="width: 18rem;">
                        <img class="card-img-top" src=" <?= $info["strTeamFanart3"] ?> " alt="Card image cap">
                    </div>
                    <div class="card d-inline-flex p-2" style="width: 18rem;">
                        <img class="card-img-top" src=" <?= $info["strTeamFanart4"] ?> " alt="Card image cap">
                    </div>
                </div>
            </div>
        </div>
        </div>
    </main>

    <footer>
        <div class="colorfooter">
            <img class="img-fluid" src="https://www.premierleague.com/resources/prod/v6.92.0-3875/i/bg-elements/pl-footer.svg" alt="">
        </div>
    </footer>
</body>

</html>