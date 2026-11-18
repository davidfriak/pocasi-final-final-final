<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */

$routes->get('/', 'Main::bundesland');
$routes->get('bundesland', 'Main::bundesland');
$routes->get('stanice', 'Main::stanice');
$routes->get("bundesland/(:num)", "Main::bundesland/$1");
$routes->get("station/(:num)", "Main::station/$1");
$routes->get("mereni/(:num)", "Main::mereni/$1");
$routes->get("informace/(:num)", "Main::informace/$1");
$routes->get("smazat", "Main::smazat");
$routes->post("smazat/smazat", "Main::smazatData");
$routes->get("mapa", "Main::mapa");