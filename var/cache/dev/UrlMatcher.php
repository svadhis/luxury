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
        '/admin' => [[['_route' => 'admin', '_controller' => 'App\\Controller\\AdminController::index'], null, null, null, true, false, null]],
        '/candidate/admin' => [[['_route' => 'candidate_index', '_controller' => 'App\\Controller\\CandidateController::index'], null, ['GET' => 0], null, false, false, null]],
        '/candidate/admin/new' => [[['_route' => 'candidate_new', '_controller' => 'App\\Controller\\CandidateController::new'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/candidate/new' => [[['_route' => 'candidate_public_profile_new', '_controller' => 'App\\Controller\\CandidateController::publicProfileNew'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/candidate/profile' => [[['_route' => 'candidate_public_profile_edit', '_controller' => 'App\\Controller\\CandidateController::publicProfileEdit'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/category/admin' => [[['_route' => 'category_index', '_controller' => 'App\\Controller\\CategoryController::index'], null, ['GET' => 0], null, false, false, null]],
        '/category/admin/new' => [[['_route' => 'category_new', '_controller' => 'App\\Controller\\CategoryController::new'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/client/admin' => [[['_route' => 'client_index', '_controller' => 'App\\Controller\\ClientController::index'], null, ['GET' => 0], null, false, false, null]],
        '/client/admin/new' => [[['_route' => 'client_new', '_controller' => 'App\\Controller\\ClientController::new'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/contact/admin' => [[['_route' => 'contact_index', '_controller' => 'App\\Controller\\ContactController::index'], null, ['GET' => 0], null, false, false, null]],
        '/contact/admin/new' => [[['_route' => 'contact_new', '_controller' => 'App\\Controller\\ContactController::new'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/' => [[['_route' => 'home', '_controller' => 'App\\Controller\\HomeController::index'], null, null, null, false, false, null]],
        '/company' => [[['_route' => 'about_us', '_controller' => 'App\\Controller\\HomeController::company'], null, null, null, false, false, null]],
        '/contact' => [[['_route' => 'contact_us', '_controller' => 'App\\Controller\\HomeController::contact'], null, null, null, false, false, null]],
        '/job/application/admin' => [[['_route' => 'job_application_index', '_controller' => 'App\\Controller\\JobApplicationController::index'], null, ['GET' => 0], null, false, false, null]],
        '/job/application/new' => [[['_route' => 'job_application_new', '_controller' => 'App\\Controller\\JobApplicationController::new'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/offer/admin' => [[['_route' => 'offer_index', '_controller' => 'App\\Controller\\OfferController::index'], null, ['GET' => 0], null, false, false, null]],
        '/offer' => [[['_route' => 'offer_public_index', '_controller' => 'App\\Controller\\OfferController::publicIndex'], null, ['GET' => 0], null, true, false, null]],
        '/offer/admin/new' => [[['_route' => 'offer_new', '_controller' => 'App\\Controller\\OfferController::new'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/register' => [[['_route' => 'security_registration', '_controller' => 'App\\Controller\\SecurityController::registration'], null, null, null, false, false, null]],
        '/login' => [[['_route' => 'security_authentication', '_controller' => 'App\\Controller\\SecurityController::authentication'], null, null, null, false, false, null]],
        '/logout' => [[['_route' => 'security_logout', '_controller' => 'App\\Controller\\SecurityController::logout'], null, null, null, false, false, null]],
        '/user/admin' => [[['_route' => 'user_index', '_controller' => 'App\\Controller\\UserController::index'], null, ['GET' => 0], null, false, false, null]],
        '/user/admin/new' => [[['_route' => 'user_new', '_controller' => 'App\\Controller\\UserController::new'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
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
                .'|/c(?'
                    .'|a(?'
                        .'|ndidate/admin(?'
                            .'|/([^/]++)(?'
                                .'|(*:206)'
                                .'|/edit(*:219)'
                            .')'
                            .'|([^/]++)(*:236)'
                        .')'
                        .'|tegory/admin/([^/]++)(?'
                            .'|(*:269)'
                            .'|/edit(*:282)'
                            .'|(*:290)'
                        .')'
                    .')'
                    .'|lient/admin/([^/]++)(?'
                        .'|(*:323)'
                        .'|/edit(*:336)'
                        .'|(*:344)'
                    .')'
                    .'|ontact/admin/([^/]++)(?'
                        .'|(*:377)'
                        .'|/edit(*:390)'
                        .'|(*:398)'
                    .')'
                .')'
                .'|/job/application/(?'
                    .'|admin/([^/]++)(?'
                        .'|(*:445)'
                        .'|/edit(*:458)'
                    .')'
                    .'|([^/]++)(*:475)'
                .')'
                .'|/offer/(?'
                    .'|admin/([^/]++)(*:508)'
                    .'|([^/]++)(*:524)'
                    .'|admin/([^/]++)(?'
                        .'|/edit(*:554)'
                        .'|(*:562)'
                    .')'
                .')'
                .'|/user/admin/([^/]++)(?'
                    .'|(*:595)'
                    .'|/edit(*:608)'
                    .'|(*:616)'
                .')'
            .')/?$}sDu',
    ],
    [ // $dynamicRoutes
        38 => [[['_route' => '_twig_error_test', '_controller' => 'twig.controller.preview_error::previewErrorPageAction', '_format' => 'html'], ['code', '_format'], null, null, false, true, null]],
        57 => [[['_route' => '_wdt', '_controller' => 'web_profiler.controller.profiler::toolbarAction'], ['token'], null, null, false, true, null]],
        102 => [[['_route' => '_profiler_search_results', '_controller' => 'web_profiler.controller.profiler::searchResultsAction'], ['token'], null, null, false, false, null]],
        116 => [[['_route' => '_profiler_router', '_controller' => 'web_profiler.controller.router::panelAction'], ['token'], null, null, false, false, null]],
        136 => [[['_route' => '_profiler_exception', '_controller' => 'web_profiler.controller.exception::showAction'], ['token'], null, null, false, false, null]],
        149 => [[['_route' => '_profiler_exception_css', '_controller' => 'web_profiler.controller.exception::cssAction'], ['token'], null, null, false, false, null]],
        159 => [[['_route' => '_profiler', '_controller' => 'web_profiler.controller.profiler::panelAction'], ['token'], null, null, false, true, null]],
        206 => [[['_route' => 'candidate_show', '_controller' => 'App\\Controller\\CandidateController::show'], ['id'], ['GET' => 0], null, false, true, null]],
        219 => [[['_route' => 'candidate_edit', '_controller' => 'App\\Controller\\CandidateController::edit'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        236 => [[['_route' => 'candidate_delete', '_controller' => 'App\\Controller\\CandidateController::delete'], ['id'], ['DELETE' => 0], null, false, true, null]],
        269 => [[['_route' => 'category_show', '_controller' => 'App\\Controller\\CategoryController::show'], ['id'], ['GET' => 0], null, false, true, null]],
        282 => [[['_route' => 'category_edit', '_controller' => 'App\\Controller\\CategoryController::edit'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        290 => [[['_route' => 'category_delete', '_controller' => 'App\\Controller\\CategoryController::delete'], ['id'], ['DELETE' => 0], null, false, true, null]],
        323 => [[['_route' => 'client_show', '_controller' => 'App\\Controller\\ClientController::show'], ['id'], ['GET' => 0], null, false, true, null]],
        336 => [[['_route' => 'client_edit', '_controller' => 'App\\Controller\\ClientController::edit'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        344 => [[['_route' => 'client_delete', '_controller' => 'App\\Controller\\ClientController::delete'], ['id'], ['DELETE' => 0], null, false, true, null]],
        377 => [[['_route' => 'contact_show', '_controller' => 'App\\Controller\\ContactController::show'], ['id'], ['GET' => 0], null, false, true, null]],
        390 => [[['_route' => 'contact_edit', '_controller' => 'App\\Controller\\ContactController::edit'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        398 => [[['_route' => 'contact_delete', '_controller' => 'App\\Controller\\ContactController::delete'], ['id'], ['DELETE' => 0], null, false, true, null]],
        445 => [[['_route' => 'job_application_show', '_controller' => 'App\\Controller\\JobApplicationController::show'], ['id'], ['GET' => 0], null, false, true, null]],
        458 => [[['_route' => 'job_application_edit', '_controller' => 'App\\Controller\\JobApplicationController::edit'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        475 => [[['_route' => 'job_application_delete', '_controller' => 'App\\Controller\\JobApplicationController::delete'], ['id'], ['DELETE' => 0], null, false, true, null]],
        508 => [[['_route' => 'offer_show', '_controller' => 'App\\Controller\\OfferController::show'], ['id'], ['GET' => 0], null, false, true, null]],
        524 => [[['_route' => 'public_offer_show', '_controller' => 'App\\Controller\\OfferController::publicShow'], ['id'], ['GET' => 0], null, false, true, null]],
        554 => [[['_route' => 'offer_edit', '_controller' => 'App\\Controller\\OfferController::edit'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        562 => [[['_route' => 'offer_delete', '_controller' => 'App\\Controller\\OfferController::delete'], ['id'], ['DELETE' => 0], null, false, true, null]],
        595 => [[['_route' => 'user_show', '_controller' => 'App\\Controller\\UserController::show'], ['id'], ['GET' => 0], null, false, true, null]],
        608 => [[['_route' => 'user_edit', '_controller' => 'App\\Controller\\UserController::edit'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        616 => [
            [['_route' => 'user_delete', '_controller' => 'App\\Controller\\UserController::delete'], ['id'], ['DELETE' => 0], null, false, true, null],
            [null, null, null, null, false, false, 0],
        ],
    ],
    null, // $checkCondition
];
