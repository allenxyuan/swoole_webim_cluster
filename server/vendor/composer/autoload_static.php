<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit13e5ab1fb4f6f4cdee6e187b4a8d43ce
{
    public static $files = array (
        'f82abe313a3e08e2bdc0185fc9c8f135' => __DIR__ . '/../..' . '/helpers.php',
    );

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

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit13e5ab1fb4f6f4cdee6e187b4a8d43ce::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit13e5ab1fb4f6f4cdee6e187b4a8d43ce::$prefixDirsPsr4;

        }, null, ClassLoader::class);
    }
}
