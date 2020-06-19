<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit2a49053a959e39c3b834c03f7dc3521f
{
    public static $files = array (
        '5ec26a44593cffc3089bdca7ce7a56c3' => __DIR__ . '/../..' . '/core/helpers.php',
    );

    public static $classMap = array (
        'App\\Controllers\\CategoriasController' => __DIR__ . '/../..' . '/app/controllers/CategoriasController.php',
        'App\\Controllers\\LoginController' => __DIR__ . '/../..' . '/app/controllers/LoginController.php',
        'App\\Controllers\\PagesController' => __DIR__ . '/../..' . '/app/controllers/PagesController.php',
        'App\\Controllers\\ProductsController' => __DIR__ . '/../..' . '/app/controllers/ProductsController.php',
        'App\\Controllers\\UsersController' => __DIR__ . '/../..' . '/crudusuario/app/controllers/UsersController.php',
        'App\\Core\\App' => __DIR__ . '/../..' . '/core/App.php',
        'App\\Core\\Database\\Connection' => __DIR__ . '/../..' . '/core/database/Connection.php',
        'App\\Core\\Database\\QueryBuilder' => __DIR__ . '/../..' . '/core/database/QueryBuilder.php',
        'App\\Core\\Request' => __DIR__ . '/../..' . '/core/Request.php',
        'App\\Core\\Router' => __DIR__ . '/../..' . '/core/Router.php',
        'ComposerAutoloaderInit2a49053a959e39c3b834c03f7dc3521f' => __DIR__ . '/..' . '/composer/autoload_real.php',
        'ComposerAutoloaderInitdc847c494bd926f7652783e4f97fa4e0' => __DIR__ . '/../..' . '/crudusuario/vendor/composer/autoload_real.php',
        'Composer\\Autoload\\ClassLoader' => __DIR__ . '/../..' . '/crudusuario/vendor/composer/ClassLoader.php',
        'Composer\\Autoload\\ComposerStaticInit2a49053a959e39c3b834c03f7dc3521f' => __DIR__ . '/..' . '/composer/autoload_static.php',
        'Composer\\Autoload\\ComposerStaticInitdc847c494bd926f7652783e4f97fa4e0' => __DIR__ . '/../..' . '/crudusuario/vendor/composer/autoload_static.php',
        'ErrorHandler' => __DIR__ . '/../..' . '/composer-setup.php',
        'HttpClient' => __DIR__ . '/../..' . '/composer-setup.php',
        'Installer' => __DIR__ . '/../..' . '/composer-setup.php',
        'NoProxyPattern' => __DIR__ . '/../..' . '/composer-setup.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->classMap = ComposerStaticInit2a49053a959e39c3b834c03f7dc3521f::$classMap;

        }, null, ClassLoader::class);
    }
}
