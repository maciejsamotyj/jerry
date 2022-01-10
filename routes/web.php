<?php 

use Symfony\Component\Routing\Route;
use Symfony\Component\Routing\RouteCollection;

// Routes system
$routes = new RouteCollection();
$routes->add('homepage', new Route(constant('URL_SUBFOLDER') . '/', array('controller' => 'PageController', 'method'=>'indexAction'), array()));
$routes->add('task', new Route(constant('URL_SUBFOLDER') . '/task/{id}', array('controller' => 'TaskController', 'method'=>'showAction'), array('id' => '[0-9]+')));

$routes->add('list', new Route(constant('URL_SUBFOLDER') . '/list', array('controller' => 'PageController', 'method'=>'getList'), array()));