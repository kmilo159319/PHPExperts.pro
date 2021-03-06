<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInita5d1cf6c618053c57848e61234167539
{
    public static $prefixLengthsPsr4 = array (
        'R' => 
        array (
            'ReallySimpleJWT\\' => 16,
        ),
        'F' => 
        array (
            'Firebase\\JWT\\' => 13,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'ReallySimpleJWT\\' => 
        array (
            0 => __DIR__ . '/..' . '/rbdwllr/reallysimplejwt/src',
        ),
        'Firebase\\JWT\\' => 
        array (
            0 => __DIR__ . '/..' . '/firebase/php-jwt/src',
        ),
    );

    public static $classMap = array (
        'Composer\\InstalledVersions' => __DIR__ . '/..' . '/composer/InstalledVersions.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInita5d1cf6c618053c57848e61234167539::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInita5d1cf6c618053c57848e61234167539::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInita5d1cf6c618053c57848e61234167539::$classMap;

        }, null, ClassLoader::class);
    }
}
