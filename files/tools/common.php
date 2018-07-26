<?php

if ( ! is_file($root_dir . '/config/config.inc.php')) {
    echo 'You are not in a Prestashop root directory !', PHP_EOL, 'Bye!', PHP_EOL;
    exit(1);
}

require_once $root_dir . '/config/config.inc.php';
