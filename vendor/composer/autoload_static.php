<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInitd1da70f6a5160140de39b01c49e9f211
{
    public static $prefixLengthsPsr4 = array (
        'L' => 
        array (
            'Laminas\\Ldap\\' => 13,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Laminas\\Ldap\\' => 
        array (
            0 => __DIR__ . '/..' . '/laminas/laminas-ldap/src',
        ),
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInitd1da70f6a5160140de39b01c49e9f211::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInitd1da70f6a5160140de39b01c49e9f211::$prefixDirsPsr4;

        }, null, ClassLoader::class);
    }
}
