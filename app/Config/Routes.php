<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'Home::index');
$routes->get('/jasa-pembuatan-website', 'JasaWebsite::index');
$routes->get('/jasa-digital-sistem', 'JasaDigitalWeb::index');
$routes->get('/kontak-kami', 'KontakKami::index');
$routes->get('/ketentuan-order', 'TosAkira::index');
$routes->get('/privasi', 'Privacy::index');
$routes->get('/terms', 'TermsConditions::index');
$routes->get('/jasa-pembuatan-aplikasi', 'JasaApps::index');
$routes->get('/jasa-pembuatan-logo', 'JasaLogo::index');
$routes->get('/jasa-press-release', 'JasaPress::index');
$routes->get('/maintance', 'NotFound::index');
