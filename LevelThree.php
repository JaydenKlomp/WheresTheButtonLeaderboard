<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Leaderboard</title>
    <link rel="stylesheet" href="style/style.css">
    <link rel="icon" href="img/pngegg.png">
    <meta http-equiv="refresh" content="5">
</head>
<body class="LevelThreePage">
    <?php include("inc/header.php")?>

    <h1 class="pageTitle">Level Three</h1>

    <div class="mainContainer">
    <div class="categorySelector">
            <form action="POST">
                <label for="">Overall Performance</label>
                <input type="radio" name="category" id="Overall" onclick="location.href ='LevelThree.php'"<?php if(!isset($_GET['sort'])){echo 'checked';}?>>
                <label for="">Fastest Finish Time</label>
                <input type="radio" name="category" id="Fastest" onclick="location.href ='?sort=finish_time'"<?php if(isset($_GET['sort']) && $_GET['sort'] == 'finish_time'){echo 'checked';}?>>
                <label for="">Highest Score</label>
                <input type="radio" name="category" id="Highest" data-catId="2" onclick="location.href ='?sort=score'"<?php if(isset($_GET['sort']) && $_GET['sort'] == 'score'){echo 'checked';}?>>
            </form>
        </div>
        <div class="LBContainer">
        <?php displayPlayersLevelThreeSort(); ?>
        </div>
    </div>

</body>
</html>
<?php include("inc/footer.php")?>