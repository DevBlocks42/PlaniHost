<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInitbf075487308a7c8f01c6c1af68a4a14e
{
    public static $prefixLengthsPsr4 = array (
        'S' => 
        array (
            'Stripe\\' => 7,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Stripe\\' => 
        array (
            0 => __DIR__ . '/..' . '/stripe/stripe-php/lib',
        ),
    );

    public static $classMap = array (
        'Composer\\InstalledVersions' => __DIR__ . '/..' . '/composer/InstalledVersions.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInitbf075487308a7c8f01c6c1af68a4a14e::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInitbf075487308a7c8f01c6c1af68a4a14e::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInitbf075487308a7c8f01c6c1af68a4a14e::$classMap;

        }, null, ClassLoader::class);
    }
}
