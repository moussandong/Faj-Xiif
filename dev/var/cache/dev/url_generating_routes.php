<?php

// This file has been auto-generated by the Symfony Routing Component.

return [
    '_preview_error' => [['code', '_format'], ['_controller' => 'error_controller::preview', '_format' => 'html'], ['code' => '\\d+'], [['variable', '.', '[^/]++', '_format', true], ['variable', '/', '\\d+', 'code', true], ['text', '/_error']], [], []],
    '_wdt' => [['token'], ['_controller' => 'web_profiler.controller.profiler::toolbarAction'], [], [['variable', '/', '[^/]++', 'token', true], ['text', '/_wdt']], [], []],
    '_profiler_home' => [[], ['_controller' => 'web_profiler.controller.profiler::homeAction'], [], [['text', '/_profiler/']], [], []],
    '_profiler_search' => [[], ['_controller' => 'web_profiler.controller.profiler::searchAction'], [], [['text', '/_profiler/search']], [], []],
    '_profiler_search_bar' => [[], ['_controller' => 'web_profiler.controller.profiler::searchBarAction'], [], [['text', '/_profiler/search_bar']], [], []],
    '_profiler_phpinfo' => [[], ['_controller' => 'web_profiler.controller.profiler::phpinfoAction'], [], [['text', '/_profiler/phpinfo']], [], []],
    '_profiler_search_results' => [['token'], ['_controller' => 'web_profiler.controller.profiler::searchResultsAction'], [], [['text', '/search/results'], ['variable', '/', '[^/]++', 'token', true], ['text', '/_profiler']], [], []],
    '_profiler_open_file' => [[], ['_controller' => 'web_profiler.controller.profiler::openAction'], [], [['text', '/_profiler/open']], [], []],
    '_profiler' => [['token'], ['_controller' => 'web_profiler.controller.profiler::panelAction'], [], [['variable', '/', '[^/]++', 'token', true], ['text', '/_profiler']], [], []],
    '_profiler_router' => [['token'], ['_controller' => 'web_profiler.controller.router::panelAction'], [], [['text', '/router'], ['variable', '/', '[^/]++', 'token', true], ['text', '/_profiler']], [], []],
    '_profiler_exception' => [['token'], ['_controller' => 'web_profiler.controller.exception_panel::body'], [], [['text', '/exception'], ['variable', '/', '[^/]++', 'token', true], ['text', '/_profiler']], [], []],
    '_profiler_exception_css' => [['token'], ['_controller' => 'web_profiler.controller.exception_panel::stylesheet'], [], [['text', '/exception.css'], ['variable', '/', '[^/]++', 'token', true], ['text', '/_profiler']], [], []],
    'commande_index' => [[], ['_controller' => 'App\\Controller\\CommandeController::index'], [], [['text', '/commande/']], [], []],
    'commande_new' => [[], ['_controller' => 'App\\Controller\\CommandeController::new'], [], [['text', '/commande/new']], [], []],
    'commande_show' => [['id'], ['_controller' => 'App\\Controller\\CommandeController::show'], [], [['variable', '/', '[^/]++', 'id', true], ['text', '/commande']], [], []],
    'commande_edit' => [['id'], ['_controller' => 'App\\Controller\\CommandeController::edit'], [], [['text', '/edit'], ['variable', '/', '[^/]++', 'id', true], ['text', '/commande']], [], []],
    'commande_delete' => [['id'], ['_controller' => 'App\\Controller\\CommandeController::delete'], [], [['variable', '/', '[^/]++', 'id', true], ['text', '/commande']], [], []],
    'commerce_index' => [[], ['_controller' => 'App\\Controller\\CommerceController::index'], [], [['text', '/commerce/']], [], []],
    'commerce_new' => [[], ['_controller' => 'App\\Controller\\CommerceController::new'], [], [['text', '/commerce/new']], [], []],
    'commerce_show' => [['id'], ['_controller' => 'App\\Controller\\CommerceController::show'], [], [['variable', '/', '[^/]++', 'id', true], ['text', '/commerce']], [], []],
    'commerce_edit' => [['id'], ['_controller' => 'App\\Controller\\CommerceController::edit'], [], [['text', '/edit'], ['variable', '/', '[^/]++', 'id', true], ['text', '/commerce']], [], []],
    'commerce_delete' => [['id'], ['_controller' => 'App\\Controller\\CommerceController::delete'], [], [['variable', '/', '[^/]++', 'id', true], ['text', '/commerce']], [], []],
    'home' => [[], ['_controller' => 'App\\Controller\\HomeController::index'], [], [['text', '/']], [], []],
    'affiche_commerce' => [['id'], ['_controller' => 'App\\Controller\\HomeController::afficheCommerce'], [], [['variable', '/', '[^/]++', 'id', true], ['text', '/lister']], [], []],
    'panier_index' => [[], ['_controller' => 'App\\Controller\\PanierController::index'], [], [['text', '/panier/panier']], [], []],
    'panier_add' => [['id'], ['_controller' => 'App\\Controller\\PanierController::add'], [], [['variable', '/', '[^/]++', 'id', true], ['text', '/panier/panier/add']], [], []],
    'panier_remove' => [['id'], ['_controller' => 'App\\Controller\\PanierController::remove'], [], [['variable', '/', '[^/]++', 'id', true], ['text', '/panier/panier/remove']], [], []],
    'produit_index' => [[], ['_controller' => 'App\\Controller\\ProduitController::index'], [], [['text', '/produit/']], [], []],
    'produit_new' => [[], ['_controller' => 'App\\Controller\\ProduitController::new'], [], [['text', '/produit/new']], [], []],
    'produit_show' => [['id'], ['_controller' => 'App\\Controller\\ProduitController::show'], [], [['variable', '/', '[^/]++', 'id', true], ['text', '/produit']], [], []],
    'produit_edit' => [['id'], ['_controller' => 'App\\Controller\\ProduitController::edit'], [], [['text', '/edit'], ['variable', '/', '[^/]++', 'id', true], ['text', '/produit']], [], []],
    'produit_delete' => [['id'], ['_controller' => 'App\\Controller\\ProduitController::delete'], [], [['variable', '/', '[^/]++', 'id', true], ['text', '/produit']], [], []],
    'app_login' => [[], ['_controller' => 'App\\Controller\\SecurityController::login'], [], [['text', '/login']], [], []],
    'app_logout' => [[], ['_controller' => 'App\\Controller\\SecurityController::logout'], [], [['text', '/logout']], [], []],
    'specialite_index' => [[], ['_controller' => 'App\\Controller\\SpecialiteController::index'], [], [['text', '/specialite/']], [], []],
    'specialite_new' => [[], ['_controller' => 'App\\Controller\\SpecialiteController::new'], [], [['text', '/specialite/new']], [], []],
    'specialite_show' => [['id'], ['_controller' => 'App\\Controller\\SpecialiteController::show'], [], [['variable', '/', '[^/]++', 'id', true], ['text', '/specialite']], [], []],
    'specialite_edit' => [['id'], ['_controller' => 'App\\Controller\\SpecialiteController::edit'], [], [['text', '/edit'], ['variable', '/', '[^/]++', 'id', true], ['text', '/specialite']], [], []],
    'specialite_delete' => [['id'], ['_controller' => 'App\\Controller\\SpecialiteController::delete'], [], [['variable', '/', '[^/]++', 'id', true], ['text', '/specialite']], [], []],
    'type_entreprise_index' => [[], ['_controller' => 'App\\Controller\\TypeEntrepriseController::index'], [], [['text', '/type/entreprise/']], [], []],
    'type_entreprise_new' => [[], ['_controller' => 'App\\Controller\\TypeEntrepriseController::new'], [], [['text', '/type/entreprise/new']], [], []],
    'type_entreprise_show' => [['id'], ['_controller' => 'App\\Controller\\TypeEntrepriseController::show'], [], [['variable', '/', '[^/]++', 'id', true], ['text', '/type/entreprise']], [], []],
    'type_entreprise_edit' => [['id'], ['_controller' => 'App\\Controller\\TypeEntrepriseController::edit'], [], [['text', '/edit'], ['variable', '/', '[^/]++', 'id', true], ['text', '/type/entreprise']], [], []],
    'type_entreprise_delete' => [['id'], ['_controller' => 'App\\Controller\\TypeEntrepriseController::delete'], [], [['variable', '/', '[^/]++', 'id', true], ['text', '/type/entreprise']], [], []],
    'user_index' => [[], ['_controller' => 'App\\Controller\\UserController::index'], [], [['text', '/user/']], [], []],
    'user_new' => [[], ['_controller' => 'App\\Controller\\UserController::new'], [], [['text', '/user/new']], [], []],
    'user_partenaire' => [[], ['_controller' => 'App\\Controller\\UserController::partenaire'], [], [['text', '/user/new/Partenaire']], [], []],
    'user_show' => [['id'], ['_controller' => 'App\\Controller\\UserController::show'], [], [['variable', '/', '[^/]++', 'id', true], ['text', '/user']], [], []],
    'user_edit' => [['id'], ['_controller' => 'App\\Controller\\UserController::edit'], [], [['text', '/edit'], ['variable', '/', '[^/]++', 'id', true], ['text', '/user']], [], []],
    'user_delete' => [['id'], ['_controller' => 'App\\Controller\\UserController::delete'], [], [['variable', '/', '[^/]++', 'id', true], ['text', '/user']], [], []],
];
