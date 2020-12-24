<?php

/** Autoloading de classes com Namespace
 * @author Gustavo Barros
 * @link https://github.com/gustavo3g/php_autoloading_namespaces
 */

use Helper\ExemploHelper;
use Service\ExemploService;
use Validator\ExemploValidator;

define(DS, DIRECTORY_SEPARATOR); // = "/"
define(DIR_APP, __DIR__); // = "/var/www/html/autoloading"


/** Criando autoload de Classes */
require 'autoload.php';

$exemploService = new ExemploService();
$exemploHelper = new ExemploHelper();
$exemploValidator = new ExemploValidator();


