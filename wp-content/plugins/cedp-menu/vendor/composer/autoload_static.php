<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInitde0f6810352fac948e04b4e3e168dc45
{
    public static $prefixLengthsPsr4 = array (
        'C' => 
        array (
            'Cedp\\Menu\\' => 10,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Cedp\\Menu\\' => 
        array (
            0 => __DIR__ . '/../..' . '/app',
        ),
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInitde0f6810352fac948e04b4e3e168dc45::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInitde0f6810352fac948e04b4e3e168dc45::$prefixDirsPsr4;

        }, null, ClassLoader::class);
    }
}
