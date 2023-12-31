<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit214b7f503748bd08a48f70b0df85aa42
{
    public static $prefixLengthsPsr4 = array (
        'S' => 
        array (
            'STZCPW\\' => 7,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'STZCPW\\' => 
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
            $loader->prefixLengthsPsr4 = ComposerStaticInit214b7f503748bd08a48f70b0df85aa42::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit214b7f503748bd08a48f70b0df85aa42::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInit214b7f503748bd08a48f70b0df85aa42::$classMap;

        }, null, ClassLoader::class);
    }
}
