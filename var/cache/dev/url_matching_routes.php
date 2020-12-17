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
        '/admin' => [[['_route' => 'admin_index', '_controller' => 'App\\Controller\\AdminController::index'], null, null, null, false, false, null]],
        '/admin/users' => [[['_route' => 'admin_users', '_controller' => 'App\\Controller\\AdminController::listUsersAdmin'], null, null, null, false, false, null]],
        '/admin/brasseurs' => [[['_route' => 'admin_brasseurs', '_controller' => 'App\\Controller\\AdminController::listBrasseursAdmin'], null, null, null, false, false, null]],
        '/form' => [[['_route' => 'form', '_controller' => 'App\\Controller\\FormController::index'], null, null, null, false, false, null]],
        '/formulaire/biere' => [[['_route' => 'form_biere', '_controller' => 'App\\Controller\\FormController::addBiere'], null, null, null, false, false, null]],
        '/formulaire/brasserie' => [[['_route' => 'form_brasserie', '_controller' => 'App\\Controller\\FormController::addBrasserie'], null, null, null, false, false, null]],
        '/' => [[['_route' => 'home_index', '_controller' => 'App\\Controller\\HomeController::index'], null, null, null, false, false, null]],
        '/inscription' => [[['_route' => 'inscription_index', '_controller' => 'App\\Controller\\InscriptionController::index'], null, null, null, false, false, null]],
        '/mentionsLegales' => [[['_route' => 'mentions_legales', '_controller' => 'App\\Controller\\MentionsLegalesController::index'], null, null, null, false, false, null]],
        '/orm' => [[['_route' => 'orm_index', '_controller' => 'App\\Controller\\ORMController::index'], null, null, null, false, false, null]],
        '/orm/bieres' => [[['_route' => 'orm_bieres', '_controller' => 'App\\Controller\\ORMController::listBieres'], null, null, null, false, false, null]],
        '/orm/brasseries' => [[['_route' => 'orm_brasseries', '_controller' => 'App\\Controller\\ORMController::listBrasseries'], null, null, null, false, false, null]],
        '/register' => [[['_route' => 'app_register', '_controller' => 'App\\Controller\\RegistrationController::register'], null, null, null, false, false, null]],
        '/verify/email' => [[['_route' => 'app_verify_email', '_controller' => 'App\\Controller\\RegistrationController::verifyUserEmail'], null, null, null, false, false, null]],
        '/oubli-pass' => [[['_route' => 'app_forgotten_password', '_controller' => 'App\\Controller\\RegistrationController::oubliPass'], null, null, null, false, false, null]],
        '/login' => [[['_route' => 'app_login', '_controller' => 'App\\Controller\\UserController::login'], null, null, null, false, false, null]],
        '/logout' => [[['_route' => 'app_logout', '_controller' => 'App\\Controller\\UserController::logout'], null, null, null, false, false, null]],
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
                .'|/admin/(?'
                    .'|edit/(?'
                        .'|user/([^/]++)(*:200)'
                        .'|brasseur/([^/]++)(*:225)'
                    .')'
                    .'|delete/user/([^/]++)(*:254)'
                .')'
                .'|/orm/b(?'
                    .'|ieres/([^/]++)(*:286)'
                    .'|rasseries/(?'
                        .'|detail/([^/]++)(*:322)'
                        .'|([^/]++)/biere(*:344)'
                    .')'
                .')'
                .'|/profil/([^/]++)(?'
                    .'|(*:373)'
                    .'|/settings(*:390)'
                .')'
                .'|/reset_pass/([^/]++)(*:419)'
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
        200 => [[['_route' => 'admin_edit_users', '_controller' => 'App\\Controller\\AdminController::adminEditUsers'], ['id'], null, null, false, true, null]],
        225 => [[['_route' => 'admin_edit_brasseurs', '_controller' => 'App\\Controller\\AdminController::adminEditBrasseurs'], ['id'], null, null, false, true, null]],
        254 => [[['_route' => 'admin_delete_users', '_controller' => 'App\\Controller\\AdminController::adminDeleteUsers'], ['id'], null, null, false, true, null]],
        286 => [[['_route' => 'orm_bieres_details', '_controller' => 'App\\Controller\\ORMController::listBieresDetails'], ['id'], null, null, false, true, null]],
        322 => [[['_route' => 'orm_detailBrasserie', '_controller' => 'App\\Controller\\ORMController::detailBrasseries'], ['id'], null, null, false, true, null]],
        344 => [[['_route' => 'orm_list_brasserie_biere', '_controller' => 'App\\Controller\\ORMController::listBrasserieBieres'], ['id'], null, null, false, false, null]],
        373 => [[['_route' => 'profil_index', '_controller' => 'App\\Controller\\ProfilController::index'], ['id'], null, null, false, true, null]],
        390 => [[['_route' => 'profil_settings', '_controller' => 'App\\Controller\\ProfilController::settings'], ['id'], null, null, false, false, null]],
        419 => [
            [['_route' => 'app_reset_password', '_controller' => 'App\\Controller\\RegistrationController::resetPassword'], ['token'], null, null, false, true, null],
            [null, null, null, null, false, false, 0],
        ],
    ],
    null, // $checkCondition
];
