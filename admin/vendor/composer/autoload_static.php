<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInitdf317f8290cc3a09727ba7a12e4797c3
{
    public static $prefixLengthsPsr4 = array (
        'G' => 
        array (
            'Google\\' => 7,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Google\\' => 
        array (
            0 => __DIR__ . '/..' . '/asimlqt/php-google-spreadsheet-client/src/Google',
        ),
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInitdf317f8290cc3a09727ba7a12e4797c3::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInitdf317f8290cc3a09727ba7a12e4797c3::$prefixDirsPsr4;

        }, null, ClassLoader::class);
    }
}
