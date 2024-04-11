<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit6102d84494dd19de737317980e9e1410
{
    public static $prefixLengthsPsr4 = array (
        'P' => 
        array (
            'Pishehgostar\\Product\\' => 21,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Pishehgostar\\Product\\' => 
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
            $loader->prefixLengthsPsr4 = ComposerStaticInit6102d84494dd19de737317980e9e1410::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit6102d84494dd19de737317980e9e1410::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInit6102d84494dd19de737317980e9e1410::$classMap;

        }, null, ClassLoader::class);
    }
}
