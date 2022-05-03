<?php

include("./_include/arrayTeams.php");
$teamProfil = htmlspecialchars($_GET["id"]);
$teams = $premierLeagueTeams['teams'];
$info = $teams[$teamProfil];

// var_dump($info['strTeamBadge']);

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
                <a class="navbar-brand" href="#">
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

    
    <div class="main">

    </div>


    <footer>
        <div class="colorfooter">
            <img class="img-fluid" src="https://www.premierleague.com/resources/prod/v6.92.0-3875/i/bg-elements/pl-footer.svg" alt="">
        </div>
    </footer>
</body>

</html>