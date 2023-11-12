<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit9c4cbb2f568bdd9c11928e05cf5c0c38
{
    public static $prefixLengthsPsr4 = array (
        'R' => 
        array (
            'Routes\\' => 7,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Routes\\' => 
        array (
            0 => __DIR__ . '/..' . '/Squirell/Component/Routing',
        ),
    );

    public static $classMap = array (
        'Composer\\InstalledVersions' => __DIR__ . '/..' . '/composer/InstalledVersions.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit9c4cbb2f568bdd9c11928e05cf5c0c38::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit9c4cbb2f568bdd9c11928e05cf5c0c38::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInit9c4cbb2f568bdd9c11928e05cf5c0c38::$classMap;

        }, null, ClassLoader::class);
    }
}