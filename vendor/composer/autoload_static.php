<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit648348c17a945a22b29ec9d07edae8bf
{
    public static $prefixLengthsPsr4 = array (
        'K' => 
        array (
            'Kl\\Hashid\\' => 10,
        ),
        'H' => 
        array (
            'Hashids\\' => 8,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Kl\\Hashid\\' => 
        array (
            0 => __DIR__ . '/../..' . '/src',
        ),
        'Hashids\\' => 
        array (
            0 => __DIR__ . '/..' . '/hashids/hashids/src',
        ),
    );

    public static $classMap = array (
        'Composer\\InstalledVersions' => __DIR__ . '/..' . '/composer/InstalledVersions.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit648348c17a945a22b29ec9d07edae8bf::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit648348c17a945a22b29ec9d07edae8bf::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInit648348c17a945a22b29ec9d07edae8bf::$classMap;

        }, null, ClassLoader::class);
    }
}