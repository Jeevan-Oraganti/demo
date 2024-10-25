<?php

use Core\Container;

$container = new Container();

$container->bind('config', require base_path('config.php'));