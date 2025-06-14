<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit0393830ad13082bb726d7f225d4a3f36
{
    public static $prefixLengthsPsr4 = array (
        'P' => 
        array (
            'PhpHelp\\' => 8,
        ),
        'M' => 
        array (
            'MercadoPago\\' => 12,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'PhpHelp\\' => 
        array (
            0 => __DIR__ . '/../..' . '/src',
        ),
        'MercadoPago\\' => 
        array (
            0 => __DIR__ . '/..' . '/mercadopago/dx-php/src/MercadoPago',
        ),
    );

    public static $classMap = array (
        'Composer\\InstalledVersions' => __DIR__ . '/..' . '/composer/InstalledVersions.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit0393830ad13082bb726d7f225d4a3f36::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit0393830ad13082bb726d7f225d4a3f36::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInit0393830ad13082bb726d7f225d4a3f36::$classMap;

        }, null, ClassLoader::class);
    }
}
