<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit7b73ba5566fd3c4dd9a75aabdbfc5d5c
{
    public static $prefixLengthsPsr4 = array (
        'E' => 
        array (
            'Emsifa\\' => 7,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Emsifa\\' => 
        array (
            0 => __DIR__ . '/..' . '/emsifa/block/src',
        ),
    );

    public static $classMap = array (
        'Composer\\InstalledVersions' => __DIR__ . '/..' . '/composer/InstalledVersions.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit7b73ba5566fd3c4dd9a75aabdbfc5d5c::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit7b73ba5566fd3c4dd9a75aabdbfc5d5c::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInit7b73ba5566fd3c4dd9a75aabdbfc5d5c::$classMap;

        }, null, ClassLoader::class);
    }
}
