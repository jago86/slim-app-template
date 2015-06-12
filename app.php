<?php
define('PRIVATE_DIR', 'private/');
require PRIVATE_DIR.'vendor/autoload.php';
require PRIVATE_DIR.'config/config.php';
require PRIVATE_DIR.'config/config.idiorm.php';

spl_autoload_register(function ($clase) {
	// echo $clase."-";
	$clase=str_replace("\\", "/", $clase);
    require_once PRIVATE_DIR . $clase . '.php';
});

// require 'Usuarios.model.php';
// require 'HojaVida.model.php';
// $a=new \Modelos\HojaVida();

use \Slim\Slim as Slim;
Slim::registerAutoloader();
$app = new Slim(array(
    // 'mode' => 'production'
    // 'debug' => false,
    'templates.path' => PRIVATE_DIR.'templates/',
     'view' => new \Slim\Views\Twig(),
));
// Incluir funciones de Slim en el VIEW Twig
$view = $app->view();
$view->parserExtensions = array(
    new \Slim\Views\TwigExtension(),
);

Model::$auto_prefix_models = '\\Modelos\\';

require PRIVATE_DIR.'routes/site.route.php';

$app->run();