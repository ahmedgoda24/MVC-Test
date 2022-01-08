<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit23f0b584777320756e93ae5339c5da62
{
    public static $prefixLengthsPsr4 = array (
        'G' => 
        array (
            'Goda\\Mvc\\' => 9,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Goda\\Mvc\\Src\\' => 
        array (
            0 => __DIR__ . '/../..' . '/src',
        ),
        'Goda\\Mvc\\App\\' => 
        array (
            0 => __DIR__ . '/../..' . '/app',
        ),
    );

    public static $classMap = array (
        'Composer\\InstalledVersions' => __DIR__ . '/..' . '/composer/InstalledVersions.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit23f0b584777320756e93ae5339c5da62::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit23f0b584777320756e93ae5339c5da62::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInit23f0b584777320756e93ae5339c5da62::$classMap;

        }, null, ClassLoader::class);
    }
}
