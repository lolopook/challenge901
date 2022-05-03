<?php include("./_include/arrayTeams.php"); ?>

<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="./style.css">
    <title>Foot2Premierligue</title>
</head>

<body>

    <nav class="navbar fixed-top navbar-light bg-light">
        <div class="container navColor">
            <div class="row-cols-2 d-inline p-2">
                <a class="navbar-brand" href="#">
                    <img src="https://www.premierleague.com/resources/prod/v6.92.0-3875/i/elements/premier-league-logo.svg" alt="" width="120" height="92">
                </a>
            </div>
            <div id="big-logo-nav" class="row-cols-12 d-none d-xl-flex navColor ">
                <?php foreach ($premierLeagueTeams as $teams) : ?>
                    <?php foreach ($teams as $team) : ?>
                        <a class="navbar-brand" href="#">
                            <img class="" src="<?= $team["strTeamBadge"] ?> " alt="" width="40" height="35">
                        </a>
                    <?php endforeach; ?>
                <?php endforeach; ?>
            </div>


        </div>
    </nav>

    <div class="title">
        <h1 class="text-center">Premier League</h1>
    </div>

    <div class="container">
        <div class="row">
            <?php foreach ($premierLeagueTeams as $teams) : ?>
                <?php foreach ($teams as $team) : ?>
                    <div class="col-12 col-md-6 col-lg-4 col-xl-3 g-2 ">
                        <div class="card borderCard">
                            <h3 class="card-title text-center"> <?= $team["strAlternate"] ?> </h3>
                            <img src="<?= $team["strTeamBadge"] ?>" class="img-fluid rounded mx-auto d-block logo" alt="<?= $team["strAlternate"] ?>">
                            <div class="card-body">
                                <p class="card-text"> <?= $team["strDescriptionEN"] ?></p>
                                <h5 class="card-text"> Date de création : <?= $team["intFormedYear"] ?> </h5>
                                <h5 class="card-text">Maillot de l'équipe:</h5>
                                <img src="<?= $team["strTeamJersey"] ?>" class="img-fluid rounded mx-auto d-block logo" alt="<?= $team["strAlternate"] ?>">
                                <h5 class="card-text"> Stade : <?= $team["strStadium"] ?> </h5>
                                <img src="<?= $team["strStadiumThumb"] ?>" class="img-fluid rounded mx-auto d-block stadium" alt="<?= $team["strAlternate"] ?>">
                            </div>
                        </div>
                    </div>
                <?php endforeach; ?>
            <?php endforeach; ?>
        </div>
    </div>

    <footer>
        <div class="colorfooter">
            <img src="https://www.premierleague.com/resources/prod/v6.92.0-3875/i/bg-elements/pl-footer.svg" alt="">
        </div>
    </footer>

</body>

</html>