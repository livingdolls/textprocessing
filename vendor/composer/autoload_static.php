<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInitc3de25fd2fa94040c11806f22900f82d
{
    public static $prefixesPsr0 = array (
        'S' => 
        array (
            'Sastrawi\\' => 
            array (
                0 => __DIR__ . '/..' . '/sastrawi/sastrawi/src',
            ),
        ),
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixesPsr0 = ComposerStaticInitc3de25fd2fa94040c11806f22900f82d::$prefixesPsr0;

        }, null, ClassLoader::class);
    }
}