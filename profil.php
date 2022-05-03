<?php include_once("./_include/arrayTeams.php") ?>
<?php 
    $teamProfil = htmlspecialchars($_GET["id"]);
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php foreach ($premierLeagueTeams as $teams) : ?>
        <h1>
            profile de <?=  $team ?>
        </h1>
<?php endforeach; ?>
</body>
</html>