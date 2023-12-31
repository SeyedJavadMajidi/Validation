<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit1a10106b6c8a8518e1497bd1b9685ceb
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
            0 => __DIR__ . '/../..' . '/App',
        ),
    );

    public static $classMap = array (
        'Composer\\InstalledVersions' => __DIR__ . '/..' . '/composer/InstalledVersions.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit1a10106b6c8a8518e1497bd1b9685ceb::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit1a10106b6c8a8518e1497bd1b9685ceb::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInit1a10106b6c8a8518e1497bd1b9685ceb::$classMap;

        }, null, ClassLoader::class);
    }
}
