<?php
/**
 * Created by PhpStorm.
 * User: Leonardo
 * Date: 20/10/2016
 * Time: 14:42
 */
use Doctrine\ORM\Tools\Console\ConsoleRunner;

// replace with file to your own project bootstrap
require_once '../bootstrap.php';

return ConsoleRunner::createHelperSet($em);
