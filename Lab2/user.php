<?php

class User
{
    public readonly string $userName;
    public readonly string $password;
    public readonly \DateTime $birthday;

    public function __construct(string $username, string $password, \DateTime $birthday)
    {
        $this->username = $username;
        $this->password = $password;
        $this->birthday = $birthday;
    }
}