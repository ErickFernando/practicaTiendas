<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit47baf8617d36abffbd3bdcb355f19640
{
    public static $files = array (
        '800196073909aa5a35e71b8a8265de59' => __DIR__ . '/..' . '/jaxon-php/jaxon-core/src/start.php',
    );

    public static $prefixLengthsPsr4 = array (
        'M' => 
        array (
            'MatthiasMullie\\PathConverter\\' => 29,
            'MatthiasMullie\\Minify\\' => 22,
        ),
        'L' => 
        array (
            'Lemon\\Event\\' => 12,
        ),
        'J' => 
        array (
            'Jaxon\\' => 6,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'MatthiasMullie\\PathConverter\\' => 
        array (
            0 => __DIR__ . '/..' . '/matthiasmullie/path-converter/src',
        ),
        'MatthiasMullie\\Minify\\' => 
        array (
            0 => __DIR__ . '/..' . '/matthiasmullie/minify/src',
        ),
        'Lemon\\Event\\' => 
        array (
            0 => __DIR__ . '/..' . '/lemonphp/event/src',
        ),
        'Jaxon\\' => 
        array (
            0 => __DIR__ . '/..' . '/jaxon-php/jaxon-core/src',
        ),
    );

    public static $prefixesPsr0 = array (
        'P' => 
        array (
            'Pimple' => 
            array (
                0 => __DIR__ . '/..' . '/pimple/pimple/src',
            ),
        ),
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit47baf8617d36abffbd3bdcb355f19640::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit47baf8617d36abffbd3bdcb355f19640::$prefixDirsPsr4;
            $loader->prefixesPsr0 = ComposerStaticInit47baf8617d36abffbd3bdcb355f19640::$prefixesPsr0;

        }, null, ClassLoader::class);
    }
}