<?php

/**
 * This file has been auto-generated
 * by the Symfony Routing Component.
 */

return [
    false, // $matchHost
    [ // $staticRoutes
        '/_profiler' => [[['_route' => '_profiler_home', '_controller' => 'web_profiler.controller.profiler::homeAction'], null, null, null, true, false, null]],
        '/_profiler/search' => [[['_route' => '_profiler_search', '_controller' => 'web_profiler.controller.profiler::searchAction'], null, null, null, false, false, null]],
        '/_profiler/search_bar' => [[['_route' => '_profiler_search_bar', '_controller' => 'web_profiler.controller.profiler::searchBarAction'], null, null, null, false, false, null]],
        '/_profiler/phpinfo' => [[['_route' => '_profiler_phpinfo', '_controller' => 'web_profiler.controller.profiler::phpinfoAction'], null, null, null, false, false, null]],
        '/_profiler/open' => [[['_route' => '_profiler_open_file', '_controller' => 'web_profiler.controller.profiler::openAction'], null, null, null, false, false, null]],
        '/dashboard' => [[['_route' => 'admin_dashboard', '_controller' => 'App\\Controller\\AdminController::index'], null, null, null, false, false, null]],
        '/cars/add' => [[['_route' => 'addCar', '_controller' => 'App\\Controller\\AdminController::addCars'], null, null, null, false, false, null]],
        '/register' => [[['_route' => 'register', '_controller' => 'App\\Controller\\AuthenticationController::registration'], null, null, null, false, false, null]],
        '/login' => [
            [['_route' => 'loginPath', '_controller' => 'App\\Controller\\AuthenticationController::loginCheck'], null, null, null, false, false, null],
            [['_route' => 'login', '_controller' => 'App\\Controller\\LoginController::index'], null, null, null, false, false, null],
        ],
        '/logout' => [[['_route' => 'logout', '_controller' => 'App\\Controller\\AuthenticationController::logout'], null, null, null, false, false, null]],
        '/' => [[['_route' => 'home', '_controller' => 'App\\Controller\\HomeController::index'], null, null, null, false, false, null]],
        '/login/redirect' => [[['_route' => 'login_redirect', '_controller' => 'App\\Controller\\LoginController::loginRedirectAction'], null, null, null, false, false, null]],
        '/profile' => [[['_route' => 'profile', '_controller' => 'App\\Controller\\ProfileController::index'], null, null, null, false, false, null]],
        '/profile/contact' => [[['_route' => 'profile_contact_form', '_controller' => 'App\\Controller\\ProfileController::contactMail'], null, null, null, false, false, null]],
    ],
    [ // $regexpList
        0 => '{^(?'
                .'|/_(?'
                    .'|error/(\\d+)(?:\\.([^/]++))?(*:38)'
                    .'|wdt/([^/]++)(*:57)'
                    .'|profiler/([^/]++)(?'
                        .'|/(?'
                            .'|search/results(*:102)'
                            .'|router(*:116)'
                            .'|exception(?'
                                .'|(*:136)'
                                .'|\\.css(*:149)'
                            .')'
                        .')'
                        .'|(*:159)'
                    .')'
                .')'
                .'|/([^/]++)/(?'
                    .'|models(*:188)'
                    .'|car(?'
                        .'|/(?'
                            .'|update(*:212)'
                            .'|info(*:224)'
                            .'|delete(*:238)'
                        .')'
                        .'|Info(*:251)'
                    .')'
                    .'|reservation/cancel(*:278)'
                .')'
            .')/?$}sDu',
    ],
    [ // $dynamicRoutes
        38 => [[['_route' => '_preview_error', '_controller' => 'error_controller::preview', '_format' => 'html'], ['code', '_format'], null, null, false, true, null]],
        57 => [[['_route' => '_wdt', '_controller' => 'web_profiler.controller.profiler::toolbarAction'], ['token'], null, null, false, true, null]],
        102 => [[['_route' => '_profiler_search_results', '_controller' => 'web_profiler.controller.profiler::searchResultsAction'], ['token'], null, null, false, false, null]],
        116 => [[['_route' => '_profiler_router', '_controller' => 'web_profiler.controller.router::panelAction'], ['token'], null, null, false, false, null]],
        136 => [[['_route' => '_profiler_exception', '_controller' => 'web_profiler.controller.exception_panel::body'], ['token'], null, null, false, false, null]],
        149 => [[['_route' => '_profiler_exception_css', '_controller' => 'web_profiler.controller.exception_panel::stylesheet'], ['token'], null, null, false, false, null]],
        159 => [[['_route' => '_profiler', '_controller' => 'web_profiler.controller.profiler::panelAction'], ['token'], null, null, false, true, null]],
        188 => [[['_route' => 'carModels', '_controller' => 'App\\Controller\\AdminController::getModels'], ['id'], null, null, false, false, null]],
        212 => [[['_route' => 'updateCar', '_controller' => 'App\\Controller\\AdminController::updateCar'], ['id'], ['POST' => 0], null, false, false, null]],
        224 => [[['_route' => 'uCarInfo', '_controller' => 'App\\Controller\\AdminController::getCarByIDToUpdate'], ['id'], null, null, false, false, null]],
        238 => [[['_route' => 'deletCar', '_controller' => 'App\\Controller\\AdminController::deleteCarById'], ['id'], ['DELETE' => 0], null, false, false, null]],
        251 => [[['_route' => 'carInfo', '_controller' => 'App\\Controller\\AdminController::getCarByID'], ['id'], null, null, false, false, null]],
        278 => [
            [['_route' => 'cancelReservation', '_controller' => 'App\\Controller\\ProfileController::cancelReservation'], ['id'], ['DELETE' => 0], null, false, false, null],
            [null, null, null, null, false, false, 0],
        ],
    ],
    null, // $checkCondition
];
