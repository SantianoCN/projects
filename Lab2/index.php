<?php
//phpinfo();

//php version = 8.1

require 'user.php';
require 'UserService.php';

$user1 = new User("Никита", "pass", new DateTime("22-10-2004"));
$user2 = new User("Иван","pass", new DateTime("12-12-1999"));
$user3 = new User("Павел","pass", new DateTime("10-10-2010"));
$user4 = new User("Мария","pass", new DateTime("19-10-1985"));

$usersArray = array($user1, $user2, $user3, $user4);

$usersArray = UserService::sortByUsername($usersArray, SortType::up);
for ($i = 0; $i < count($usersArray); $i++){
    print('('.$usersArray[$i]->username . "\t");
    print($usersArray[$i]->birthday->format("Y/m/d") . ')'."\n");
}

$usersArray = UserService::sortByUsername($usersArray, SortType::down);
for ($i = 0; $i < count($usersArray); $i++){
    print('('.$usersArray[$i]->username . "\t");
    print($usersArray[$i]->birthday->format("Y/m/d"). ')' . "\n");
}

$usersArray = UserService::sortByBirthday($usersArray, SortType::up);
for ($i = 0; $i < count($usersArray); $i++){
    print('('.$usersArray[$i]->username . "\t");
    print($usersArray[$i]->birthday->format("Y/m/d"). ')' . "\n");
}

$usersArray = UserService::sortByBirthday($usersArray, SortType::down);
for ($i = 0; $i < count($usersArray); $i++){
    print('('.$usersArray[$i]->username . "\t");
    print($usersArray[$i]->birthday->format("Y/m/d"). ')' . "\n");
}