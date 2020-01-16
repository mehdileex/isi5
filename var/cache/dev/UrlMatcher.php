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
        '/cart' => [[['_route' => 'cart_index', '_controller' => 'App\\Controller\\CartController::index'], null, ['GET' => 0], null, true, false, null]],
        '/cart/new' => [[['_route' => 'cart_new', '_controller' => 'App\\Controller\\CartController::new'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/category' => [[['_route' => 'category_index', '_controller' => 'App\\Controller\\CategoryController::index'], null, ['GET' => 0, 'POST' => 1], null, true, false, null]],
        '/category/new' => [[['_route' => 'category_new', '_controller' => 'App\\Controller\\CategoryController::new'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/image' => [[['_route' => 'image_index', '_controller' => 'App\\Controller\\ImageController::index'], null, ['GET' => 0], null, true, false, null]],
        '/image/new' => [[['_route' => 'image_new', '_controller' => 'App\\Controller\\ImageController::new'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/product' => [[['_route' => 'product_index', '_controller' => 'App\\Controller\\ProductController::index'], null, ['GET' => 0, 'POST' => 1], null, true, false, null]],
        '/product/new' => [[['_route' => 'product_new', '_controller' => 'App\\Controller\\ProductController::new'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/user' => [[['_route' => 'user_index', '_controller' => 'App\\Controller\\UserController::index'], null, ['GET' => 0], null, true, false, null]],
        '/user/new' => [[['_route' => 'user_new', '_controller' => 'App\\Controller\\UserController::new'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/whish/list' => [[['_route' => 'whish_list_index', '_controller' => 'App\\Controller\\WhishListController::index'], null, ['GET' => 0], null, true, false, null]],
        '/whish/list/new' => [[['_route' => 'whish_list_new', '_controller' => 'App\\Controller\\WhishListController::new'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/admin' => [[['_route' => 'easyadmin', '_controller' => 'EasyCorp\\Bundle\\EasyAdminBundle\\Controller\\EasyAdminController::indexAction'], null, null, null, true, false, null]],
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
                .'|/ca(?'
                    .'|rt/([^/]++)(?'
                        .'|(*:189)'
                        .'|/edit(*:202)'
                        .'|(*:210)'
                    .')'
                    .'|tegory/([^/]++)(?'
                        .'|(*:237)'
                        .'|/edit(*:250)'
                        .'|(*:258)'
                    .')'
                .')'
                .'|/image/([^/]++)(?'
                    .'|(*:286)'
                    .'|/edit(*:299)'
                    .'|(*:307)'
                .')'
                .'|/product/([^/]++)(?'
                    .'|(*:336)'
                    .'|/edit(*:349)'
                    .'|(*:357)'
                .')'
                .'|/user/([^/]++)(?'
                    .'|(*:383)'
                    .'|/edit(*:396)'
                    .'|(*:404)'
                .')'
                .'|/whish/list/([^/]++)(?'
                    .'|(*:436)'
                    .'|/edit(*:449)'
                    .'|(*:457)'
                .')'
                .'|/api(?'
                    .'|(?:/(index)(?:\\.([^/]++))?)?(*:501)'
                    .'|/(?'
                        .'|docs(?:\\.([^/]++))?(*:532)'
                        .'|c(?'
                            .'|ontexts/(.+)(?:\\.([^/]++))?(*:571)'
                            .'|a(?'
                                .'|rts(?'
                                    .'|(?:\\.([^/]++))?(?'
                                        .'|(*:607)'
                                    .')'
                                    .'|/([^/\\.]++)(?:\\.([^/]++))?(?'
                                        .'|(*:645)'
                                    .')'
                                .')'
                                .'|tegories(?'
                                    .'|(?:\\.([^/]++))?(?'
                                        .'|(*:684)'
                                    .')'
                                    .'|/([^/\\.]++)(?:\\.([^/]++))?(?'
                                        .'|(*:722)'
                                    .')'
                                .')'
                            .')'
                        .')'
                        .'|images(?'
                            .'|(?:\\.([^/]++))?(?'
                                .'|(*:761)'
                            .')'
                            .'|/([^/\\.]++)(?:\\.([^/]++))?(?'
                                .'|(*:799)'
                            .')'
                        .')'
                        .'|products(?'
                            .'|(?:\\.([^/]++))?(?'
                                .'|(*:838)'
                            .')'
                            .'|/([^/\\.]++)(?:\\.([^/]++))?(?'
                                .'|(*:876)'
                            .')'
                        .')'
                        .'|whish_lists(?'
                            .'|(?:\\.([^/]++))?(?'
                                .'|(*:918)'
                            .')'
                            .'|/([^/\\.]++)(?:\\.([^/]++))?(?'
                                .'|(*:956)'
                            .')'
                        .')'
                    .')'
                .')'
            .')/?$}sD',
    ],
    [ // $dynamicRoutes
        38 => [[['_route' => '_preview_error', '_controller' => 'error_controller::preview', '_format' => 'html'], ['code', '_format'], null, null, false, true, null]],
        57 => [[['_route' => '_wdt', '_controller' => 'web_profiler.controller.profiler::toolbarAction'], ['token'], null, null, false, true, null]],
        102 => [[['_route' => '_profiler_search_results', '_controller' => 'web_profiler.controller.profiler::searchResultsAction'], ['token'], null, null, false, false, null]],
        116 => [[['_route' => '_profiler_router', '_controller' => 'web_profiler.controller.router::panelAction'], ['token'], null, null, false, false, null]],
        136 => [[['_route' => '_profiler_exception', '_controller' => 'web_profiler.controller.exception_panel::body'], ['token'], null, null, false, false, null]],
        149 => [[['_route' => '_profiler_exception_css', '_controller' => 'web_profiler.controller.exception_panel::stylesheet'], ['token'], null, null, false, false, null]],
        159 => [[['_route' => '_profiler', '_controller' => 'web_profiler.controller.profiler::panelAction'], ['token'], null, null, false, true, null]],
        189 => [[['_route' => 'cart_show', '_controller' => 'App\\Controller\\CartController::show'], ['id'], ['GET' => 0], null, false, true, null]],
        202 => [[['_route' => 'cart_edit', '_controller' => 'App\\Controller\\CartController::edit'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        210 => [[['_route' => 'cart_delete', '_controller' => 'App\\Controller\\CartController::delete'], ['id'], ['DELETE' => 0], null, false, true, null]],
        237 => [[['_route' => 'category_show', '_controller' => 'App\\Controller\\CategoryController::show'], ['id'], ['GET' => 0], null, false, true, null]],
        250 => [[['_route' => 'category_edit', '_controller' => 'App\\Controller\\CategoryController::edit'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        258 => [[['_route' => 'category_delete', '_controller' => 'App\\Controller\\CategoryController::delete'], ['id'], ['DELETE' => 0], null, false, true, null]],
        286 => [[['_route' => 'image_show', '_controller' => 'App\\Controller\\ImageController::show'], ['id'], ['GET' => 0], null, false, true, null]],
        299 => [[['_route' => 'image_edit', '_controller' => 'App\\Controller\\ImageController::edit'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        307 => [[['_route' => 'image_delete', '_controller' => 'App\\Controller\\ImageController::delete'], ['id'], ['DELETE' => 0], null, false, true, null]],
        336 => [[['_route' => 'product_show', '_controller' => 'App\\Controller\\ProductController::show'], ['id'], ['GET' => 0], null, false, true, null]],
        349 => [[['_route' => 'product_edit', '_controller' => 'App\\Controller\\ProductController::edit'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        357 => [[['_route' => 'product_delete', '_controller' => 'App\\Controller\\ProductController::delete'], ['id'], ['DELETE' => 0], null, false, true, null]],
        383 => [[['_route' => 'user_show', '_controller' => 'App\\Controller\\UserController::show'], ['id'], ['GET' => 0], null, false, true, null]],
        396 => [[['_route' => 'user_edit', '_controller' => 'App\\Controller\\UserController::edit'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        404 => [[['_route' => 'user_delete', '_controller' => 'App\\Controller\\UserController::delete'], ['id'], ['DELETE' => 0], null, false, true, null]],
        436 => [[['_route' => 'whish_list_show', '_controller' => 'App\\Controller\\WhishListController::show'], ['id'], ['GET' => 0], null, false, true, null]],
        449 => [[['_route' => 'whish_list_edit', '_controller' => 'App\\Controller\\WhishListController::edit'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        457 => [[['_route' => 'whish_list_delete', '_controller' => 'App\\Controller\\WhishListController::delete'], ['id'], ['DELETE' => 0], null, false, true, null]],
        501 => [[['_route' => 'api_entrypoint', '_controller' => 'api_platform.action.entrypoint', '_format' => '', '_api_respond' => 'true', 'index' => 'index'], ['index', '_format'], null, null, false, true, null]],
        532 => [[['_route' => 'api_doc', '_controller' => 'api_platform.action.documentation', '_format' => '', '_api_respond' => 'true'], ['_format'], null, null, false, true, null]],
        571 => [[['_route' => 'api_jsonld_context', '_controller' => 'api_platform.jsonld.action.context', '_format' => 'jsonld', '_api_respond' => 'true'], ['shortName', '_format'], null, null, false, true, null]],
        607 => [
            [['_route' => 'api_carts_get_collection', '_controller' => 'api_platform.action.get_collection', '_format' => null, '_api_resource_class' => 'App\\Entity\\Cart', '_api_collection_operation_name' => 'get'], ['_format'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api_carts_post_collection', '_controller' => 'api_platform.action.post_collection', '_format' => null, '_api_resource_class' => 'App\\Entity\\Cart', '_api_collection_operation_name' => 'post'], ['_format'], ['POST' => 0], null, false, true, null],
        ],
        645 => [
            [['_route' => 'api_carts_get_item', '_controller' => 'api_platform.action.get_item', '_format' => null, '_api_resource_class' => 'App\\Entity\\Cart', '_api_item_operation_name' => 'get'], ['id', '_format'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api_carts_delete_item', '_controller' => 'api_platform.action.delete_item', '_format' => null, '_api_resource_class' => 'App\\Entity\\Cart', '_api_item_operation_name' => 'delete'], ['id', '_format'], ['DELETE' => 0], null, false, true, null],
            [['_route' => 'api_carts_put_item', '_controller' => 'api_platform.action.put_item', '_format' => null, '_api_resource_class' => 'App\\Entity\\Cart', '_api_item_operation_name' => 'put'], ['id', '_format'], ['PUT' => 0], null, false, true, null],
            [['_route' => 'api_carts_patch_item', '_controller' => 'api_platform.action.patch_item', '_format' => null, '_api_resource_class' => 'App\\Entity\\Cart', '_api_item_operation_name' => 'patch'], ['id', '_format'], ['PATCH' => 0], null, false, true, null],
        ],
        684 => [
            [['_route' => 'api_categories_get_collection', '_controller' => 'api_platform.action.get_collection', '_format' => null, '_api_resource_class' => 'App\\Entity\\Category', '_api_collection_operation_name' => 'get'], ['_format'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api_categories_post_collection', '_controller' => 'api_platform.action.post_collection', '_format' => null, '_api_resource_class' => 'App\\Entity\\Category', '_api_collection_operation_name' => 'post'], ['_format'], ['POST' => 0], null, false, true, null],
        ],
        722 => [
            [['_route' => 'api_categories_get_item', '_controller' => 'api_platform.action.get_item', '_format' => null, '_api_resource_class' => 'App\\Entity\\Category', '_api_item_operation_name' => 'get'], ['id', '_format'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api_categories_delete_item', '_controller' => 'api_platform.action.delete_item', '_format' => null, '_api_resource_class' => 'App\\Entity\\Category', '_api_item_operation_name' => 'delete'], ['id', '_format'], ['DELETE' => 0], null, false, true, null],
            [['_route' => 'api_categories_put_item', '_controller' => 'api_platform.action.put_item', '_format' => null, '_api_resource_class' => 'App\\Entity\\Category', '_api_item_operation_name' => 'put'], ['id', '_format'], ['PUT' => 0], null, false, true, null],
            [['_route' => 'api_categories_patch_item', '_controller' => 'api_platform.action.patch_item', '_format' => null, '_api_resource_class' => 'App\\Entity\\Category', '_api_item_operation_name' => 'patch'], ['id', '_format'], ['PATCH' => 0], null, false, true, null],
        ],
        761 => [
            [['_route' => 'api_images_get_collection', '_controller' => 'api_platform.action.get_collection', '_format' => null, '_api_resource_class' => 'App\\Entity\\Image', '_api_collection_operation_name' => 'get'], ['_format'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api_images_post_collection', '_controller' => 'api_platform.action.post_collection', '_format' => null, '_api_resource_class' => 'App\\Entity\\Image', '_api_collection_operation_name' => 'post'], ['_format'], ['POST' => 0], null, false, true, null],
        ],
        799 => [
            [['_route' => 'api_images_get_item', '_controller' => 'api_platform.action.get_item', '_format' => null, '_api_resource_class' => 'App\\Entity\\Image', '_api_item_operation_name' => 'get'], ['id', '_format'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api_images_delete_item', '_controller' => 'api_platform.action.delete_item', '_format' => null, '_api_resource_class' => 'App\\Entity\\Image', '_api_item_operation_name' => 'delete'], ['id', '_format'], ['DELETE' => 0], null, false, true, null],
            [['_route' => 'api_images_put_item', '_controller' => 'api_platform.action.put_item', '_format' => null, '_api_resource_class' => 'App\\Entity\\Image', '_api_item_operation_name' => 'put'], ['id', '_format'], ['PUT' => 0], null, false, true, null],
            [['_route' => 'api_images_patch_item', '_controller' => 'api_platform.action.patch_item', '_format' => null, '_api_resource_class' => 'App\\Entity\\Image', '_api_item_operation_name' => 'patch'], ['id', '_format'], ['PATCH' => 0], null, false, true, null],
        ],
        838 => [
            [['_route' => 'api_products_get_collection', '_controller' => 'api_platform.action.get_collection', '_format' => null, '_api_resource_class' => 'App\\Entity\\Product', '_api_collection_operation_name' => 'get'], ['_format'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api_products_post_collection', '_controller' => 'api_platform.action.post_collection', '_format' => null, '_api_resource_class' => 'App\\Entity\\Product', '_api_collection_operation_name' => 'post'], ['_format'], ['POST' => 0], null, false, true, null],
        ],
        876 => [
            [['_route' => 'api_products_get_item', '_controller' => 'api_platform.action.get_item', '_format' => null, '_api_resource_class' => 'App\\Entity\\Product', '_api_item_operation_name' => 'get'], ['id', '_format'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api_products_delete_item', '_controller' => 'api_platform.action.delete_item', '_format' => null, '_api_resource_class' => 'App\\Entity\\Product', '_api_item_operation_name' => 'delete'], ['id', '_format'], ['DELETE' => 0], null, false, true, null],
            [['_route' => 'api_products_put_item', '_controller' => 'api_platform.action.put_item', '_format' => null, '_api_resource_class' => 'App\\Entity\\Product', '_api_item_operation_name' => 'put'], ['id', '_format'], ['PUT' => 0], null, false, true, null],
            [['_route' => 'api_products_patch_item', '_controller' => 'api_platform.action.patch_item', '_format' => null, '_api_resource_class' => 'App\\Entity\\Product', '_api_item_operation_name' => 'patch'], ['id', '_format'], ['PATCH' => 0], null, false, true, null],
        ],
        918 => [
            [['_route' => 'api_whish_lists_get_collection', '_controller' => 'api_platform.action.get_collection', '_format' => null, '_api_resource_class' => 'App\\Entity\\WhishList', '_api_collection_operation_name' => 'get'], ['_format'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api_whish_lists_post_collection', '_controller' => 'api_platform.action.post_collection', '_format' => null, '_api_resource_class' => 'App\\Entity\\WhishList', '_api_collection_operation_name' => 'post'], ['_format'], ['POST' => 0], null, false, true, null],
        ],
        956 => [
            [['_route' => 'api_whish_lists_get_item', '_controller' => 'api_platform.action.get_item', '_format' => null, '_api_resource_class' => 'App\\Entity\\WhishList', '_api_item_operation_name' => 'get'], ['id', '_format'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api_whish_lists_delete_item', '_controller' => 'api_platform.action.delete_item', '_format' => null, '_api_resource_class' => 'App\\Entity\\WhishList', '_api_item_operation_name' => 'delete'], ['id', '_format'], ['DELETE' => 0], null, false, true, null],
            [['_route' => 'api_whish_lists_put_item', '_controller' => 'api_platform.action.put_item', '_format' => null, '_api_resource_class' => 'App\\Entity\\WhishList', '_api_item_operation_name' => 'put'], ['id', '_format'], ['PUT' => 0], null, false, true, null],
            [['_route' => 'api_whish_lists_patch_item', '_controller' => 'api_platform.action.patch_item', '_format' => null, '_api_resource_class' => 'App\\Entity\\WhishList', '_api_item_operation_name' => 'patch'], ['id', '_format'], ['PATCH' => 0], null, false, true, null],
            [null, null, null, null, false, false, 0],
        ],
    ],
    null, // $checkCondition
];
