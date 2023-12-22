<?php 


enum SortType{
    case up;
    case down;
}

class UserService{
    public static function sortByUsername(array $usersList, SortType $sortType){
        if ($sortType == SortType::up){
            usort($usersList, "self::sort_by_username");
            return $usersList;
        } else if ($sortType == SortType::down) {
            usort($usersList, "self::sort_by_username_down");
            return $usersList;
        } else return null;
    }

    public static function sortByBirthday(array $usersList, SortType $sortType){
        if ($sortType == SortType::up) {
            usort($usersList, "self::sort_by_birthday");
            return $usersList;
        } else if ($sortType == SortType::down) {
            usort($usersList, "self::sort_by_birthday_down");
            return $usersList;
        } else return null;
    }



    public static function sort_by_username($arg1, $arg2)
    {
        return strcmp($arg1->username, $arg2->username);
    }
    public static function sort_by_username_down($arg1, $arg2)
    {
        return strcmp($arg2->username, $arg1->username);
    }
    public static function sort_by_birthday($arg1, $arg2)
    {
        if ($arg1->birthday == $arg2->birthday) {
            return 0;
        }
        return ($arg1->birthday < $arg2->birthday) ? -1 : 1;
    }
    public static function sort_by_birthday_down($arg1, $arg2)
    {
        if ($arg2->birthday == $arg1->birthday) {
            return 0;
        }
        return ($arg2->birthday == $arg1->birthday) ? -1 : 1;
    }
}