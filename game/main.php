<?php

include('game.php');

$playerName = readline("Введите свое имя: ");
$botName = readline("Введите имя ПК: ");

$playerUser = new Player($playerName);
$playerBot = new Player($botName);
$game = new Game($playerUser, $playerBot);

$game->start();