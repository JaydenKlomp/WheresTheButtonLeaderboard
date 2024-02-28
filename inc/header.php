<?php include("backend/functions.php")?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Leaderboard</title>
    <link rel="stylesheet" href="style/style.css">
    <link rel="icon" href="img/pngegg.png">
</head>
<header class="header">
        <nav>
            <img src="img/pngegg.png" alt="nee" onclick="location.href='index.php'">
            <a href="LevelOne.php">Level One</a>
            <a href="LevelTwo.php">Level Two</a>
            <a href="LevelThree.php">Level Three</a>

        </nav>
        <div class="sideButtons">
            <svg onclick="searchBar()" class="magSvg" xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-search" viewBox="0 0 16 16">
                <path fill="#fff" d="M11.742 10.344a6.5 6.5 0 1 0-1.397 1.398h-.001c.03.04.062.078.098.115l3.85 3.85a1 1 0 0 0 1.415-1.414l-3.85-3.85a1.007 1.007 0 0 0-.115-.1zM12 6.5a5.5 5.5 0 1 1-11 0 5.5 5.5 0 0 1 11 0z"/>
            </svg>
        </div>
    </header>
    <div class="searchBar">
        <form class="searchForm" action="?q=">
            <input type="text" name="q" placeholder="What are you looking for?">
            <button type="submit">Go</button>
        </form>
    </div>
