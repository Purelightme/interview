<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit8d3672185a3c1c0f69bfeaa2d68b247e
{
    public static $prefixLengthsPsr4 = array (
        'P' => 
        array (
            'Predis\\' => 7,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Predis\\' => 
        array (
            0 => __DIR__ . '/..' . '/predis/predis/src',
        ),
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit8d3672185a3c1c0f69bfeaa2d68b247e::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit8d3672185a3c1c0f69bfeaa2d68b247e::$prefixDirsPsr4;

        }, null, ClassLoader::class);
    }
}