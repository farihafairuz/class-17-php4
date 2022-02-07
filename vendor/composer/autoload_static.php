<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit2f6c73761c82e7d05630d6cbf66e941c
{
    public static $prefixLengthsPsr4 = array (
        'A' => 
        array (
            'App\\' => 4,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'App\\' => 
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
            $loader->prefixLengthsPsr4 = ComposerStaticInit2f6c73761c82e7d05630d6cbf66e941c::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit2f6c73761c82e7d05630d6cbf66e941c::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInit2f6c73761c82e7d05630d6cbf66e941c::$classMap;

        }, null, ClassLoader::class);
    }
}
