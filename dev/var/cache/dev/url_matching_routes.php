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
        '/commande' => [[['_route' => 'commande_index', '_controller' => 'App\\Controller\\CommandeController::index'], null, ['GET' => 0], null, true, false, null]],
        '/commande/new' => [[['_route' => 'commande_new', '_controller' => 'App\\Controller\\CommandeController::new'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/commerce' => [[['_route' => 'commerce_index', '_controller' => 'App\\Controller\\CommerceController::index'], null, ['GET' => 0], null, true, false, null]],
        '/commerce/new' => [[['_route' => 'commerce_new', '_controller' => 'App\\Controller\\CommerceController::new'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/' => [[['_route' => 'home', '_controller' => 'App\\Controller\\HomeController::index'], null, null, null, false, false, null]],
        '/panier/panier' => [[['_route' => 'panier_index', '_controller' => 'App\\Controller\\PanierController::index'], null, null, null, false, false, null]],
        '/produit' => [[['_route' => 'produit_index', '_controller' => 'App\\Controller\\ProduitController::index'], null, ['GET' => 0], null, true, false, null]],
        '/produit/new' => [[['_route' => 'produit_new', '_controller' => 'App\\Controller\\ProduitController::new'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/login' => [[['_route' => 'app_login', '_controller' => 'App\\Controller\\SecurityController::login'], null, null, null, false, false, null]],
        '/logout' => [[['_route' => 'app_logout', '_controller' => 'App\\Controller\\SecurityController::logout'], null, null, null, false, false, null]],
        '/specialite' => [[['_route' => 'specialite_index', '_controller' => 'App\\Controller\\SpecialiteController::index'], null, ['GET' => 0], null, true, false, null]],
        '/specialite/new' => [[['_route' => 'specialite_new', '_controller' => 'App\\Controller\\SpecialiteController::new'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/type/entreprise' => [[['_route' => 'type_entreprise_index', '_controller' => 'App\\Controller\\TypeEntrepriseController::index'], null, ['GET' => 0], null, true, false, null]],
        '/type/entreprise/new' => [[['_route' => 'type_entreprise_new', '_controller' => 'App\\Controller\\TypeEntrepriseController::new'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/user' => [[['_route' => 'user_index', '_controller' => 'App\\Controller\\UserController::index'], null, ['GET' => 0], null, true, false, null]],
        '/user/new' => [[['_route' => 'user_new', '_controller' => 'App\\Controller\\UserController::new'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/user/new/Partenaire' => [[['_route' => 'user_partenaire', '_controller' => 'App\\Controller\\UserController::partenaire'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
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
                .'|/comm(?'
                    .'|ande/([^/]++)(?'
                        .'|(*:193)'
                        .'|/edit(*:206)'
                        .'|(*:214)'
                    .')'
                    .'|erce/([^/]++)(?'
                        .'|(*:239)'
                        .'|/edit(*:252)'
                        .'|(*:260)'
                    .')'
                .')'
                .'|/lister/([^/]++)(*:286)'
                .'|/p(?'
                    .'|anier/panier/(?'
                        .'|add/([^/]++)(*:327)'
                        .'|remove/([^/]++)(*:350)'
                    .')'
                    .'|roduit/([^/]++)(?'
                        .'|(*:377)'
                        .'|/edit(*:390)'
                        .'|(*:398)'
                    .')'
                .')'
                .'|/specialite/([^/]++)(?'
                    .'|(*:431)'
                    .'|/edit(*:444)'
                    .'|(*:452)'
                .')'
                .'|/type/entreprise/([^/]++)(?'
                    .'|(*:489)'
                    .'|/edit(*:502)'
                    .'|(*:510)'
                .')'
                .'|/user/([^/]++)(?'
                    .'|(*:536)'
                    .'|/edit(*:549)'
                    .'|(*:557)'
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
        193 => [[['_route' => 'commande_show', '_controller' => 'App\\Controller\\CommandeController::show'], ['id'], ['GET' => 0], null, false, true, null]],
        206 => [[['_route' => 'commande_edit', '_controller' => 'App\\Controller\\CommandeController::edit'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        214 => [[['_route' => 'commande_delete', '_controller' => 'App\\Controller\\CommandeController::delete'], ['id'], ['DELETE' => 0], null, false, true, null]],
        239 => [[['_route' => 'commerce_show', '_controller' => 'App\\Controller\\CommerceController::show'], ['id'], ['GET' => 0], null, false, true, null]],
        252 => [[['_route' => 'commerce_edit', '_controller' => 'App\\Controller\\CommerceController::edit'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        260 => [[['_route' => 'commerce_delete', '_controller' => 'App\\Controller\\CommerceController::delete'], ['id'], ['DELETE' => 0], null, false, true, null]],
        286 => [[['_route' => 'affiche_commerce', '_controller' => 'App\\Controller\\HomeController::afficheCommerce'], ['id'], ['GET' => 0, 'POST' => 1], null, false, true, null]],
        327 => [[['_route' => 'panier_add', '_controller' => 'App\\Controller\\PanierController::add'], ['id'], null, null, false, true, null]],
        350 => [[['_route' => 'panier_remove', '_controller' => 'App\\Controller\\PanierController::remove'], ['id'], null, null, false, true, null]],
        377 => [[['_route' => 'produit_show', '_controller' => 'App\\Controller\\ProduitController::show'], ['id'], ['GET' => 0], null, false, true, null]],
        390 => [[['_route' => 'produit_edit', '_controller' => 'App\\Controller\\ProduitController::edit'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        398 => [[['_route' => 'produit_delete', '_controller' => 'App\\Controller\\ProduitController::delete'], ['id'], ['DELETE' => 0], null, false, true, null]],
        431 => [[['_route' => 'specialite_show', '_controller' => 'App\\Controller\\SpecialiteController::show'], ['id'], ['GET' => 0], null, false, true, null]],
        444 => [[['_route' => 'specialite_edit', '_controller' => 'App\\Controller\\SpecialiteController::edit'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        452 => [[['_route' => 'specialite_delete', '_controller' => 'App\\Controller\\SpecialiteController::delete'], ['id'], ['DELETE' => 0], null, false, true, null]],
        489 => [[['_route' => 'type_entreprise_show', '_controller' => 'App\\Controller\\TypeEntrepriseController::show'], ['id'], ['GET' => 0], null, false, true, null]],
        502 => [[['_route' => 'type_entreprise_edit', '_controller' => 'App\\Controller\\TypeEntrepriseController::edit'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        510 => [[['_route' => 'type_entreprise_delete', '_controller' => 'App\\Controller\\TypeEntrepriseController::delete'], ['id'], ['DELETE' => 0], null, false, true, null]],
        536 => [[['_route' => 'user_show', '_controller' => 'App\\Controller\\UserController::show'], ['id'], ['GET' => 0], null, false, true, null]],
        549 => [[['_route' => 'user_edit', '_controller' => 'App\\Controller\\UserController::edit'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        557 => [
            [['_route' => 'user_delete', '_controller' => 'App\\Controller\\UserController::delete'], ['id'], ['DELETE' => 0], null, false, true, null],
            [null, null, null, null, false, false, 0],
        ],
    ],
    null, // $checkCondition
];
