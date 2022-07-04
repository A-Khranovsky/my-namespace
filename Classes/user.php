<?php

namespace App\Classes;

class User
{
    public $first_name, $last_name, $email, $password;

    public function __construct(
        $email,
        $password,
        $first_name = null,
        $last_name = null
    ) {
        $this->first_name = $first_name;
        $this->last_name = $last_name;
        $this->email = $email;
        $this->password = $password;
    }
}