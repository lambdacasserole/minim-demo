<?php

require_once 'init.php';

use Minim\Authenticator;
use Minim\Configuration;

// This page is only accessible if logged in.
$auth = new Authenticator(new Configuration(__DIR__ . '/../security.yml'));
if (!$auth->isAuthenticated()) {
    header('Location: index.php');
    die();
}

?>