<?php

namespace App\Functions;

function debug($obj)
{
	echo '<pre>', var_dump($obj), '</pre>';
}
