<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit396efd8382c7a823aade9daa3785a0c7
{
    public static $fallbackDirsPsr4 = array (
        0 => __DIR__ . '/../..' . '/lib',
    );

    public static $classMap = array (
        'Composer\\InstalledVersions' => __DIR__ . '/..' . '/composer/InstalledVersions.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->fallbackDirsPsr4 = ComposerStaticInit396efd8382c7a823aade9daa3785a0c7::$fallbackDirsPsr4;
            $loader->classMap = ComposerStaticInit396efd8382c7a823aade9daa3785a0c7::$classMap;

        }, null, ClassLoader::class);
    }
}
