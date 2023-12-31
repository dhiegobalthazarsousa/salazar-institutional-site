<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit78a0a83614e13b2a49fde5fad07a8b57
{
    public static $prefixLengthsPsr4 = array (
        'D' => 
        array (
            'Dhiego\\PaginaInstitucional\\' => 27,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Dhiego\\PaginaInstitucional\\' => 
        array (
            0 => __DIR__ . '/../..' . '/src',
        ),
    );

    public static $classMap = array (
        'Composer\\InstalledVersions' => __DIR__ . '/..' . '/composer/InstalledVersions.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit78a0a83614e13b2a49fde5fad07a8b57::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit78a0a83614e13b2a49fde5fad07a8b57::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInit78a0a83614e13b2a49fde5fad07a8b57::$classMap;

        }, null, ClassLoader::class);
    }
}
