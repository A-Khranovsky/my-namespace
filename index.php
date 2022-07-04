<?php 

require_once(__DIR__ . '\Classes\user.php');
require_once(__DIR__ . '\Constants\constant.php');
require_once(__DIR__ . '\Functions\function.php');

$user = new \App\Classes\User(
        'alex@ukr.net',
        'qwerty',
        'Alex',
        'Alex'
    );
    echo $user->first_name, '<br />';
    echo 'Version: ', \App\Constants\VERSION, '<br />';
    echo 'dump: ', \App\Functions\debug($user);
