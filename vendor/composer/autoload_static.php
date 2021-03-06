<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInitdb169a5bf41e234f880a09132adbf656
{
    public static $prefixLengthsPsr4 = array (
        'A' => 
        array (
            'App\\' => 4,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'App\\' => 
        array (
            0 => __DIR__ . '/../..' . '/src',
        ),
    );

    public static $classMap = array (
        'App\\Models\\BasicPlan' => __DIR__ . '/../..' . '/src/Models/BasicPlan.php',
        'App\\Models\\Plan' => __DIR__ . '/../..' . '/src/Models/Plan.php',
        'App\\Models\\ProPlan' => __DIR__ . '/../..' . '/src/Models/ProPlan.php',
        'App\\Models\\Server' => __DIR__ . '/../..' . '/src/Models/Server.php',
        'App\\Models\\User' => __DIR__ . '/../..' . '/src/Models/User.php',
        'Composer\\InstalledVersions' => __DIR__ . '/..' . '/composer/InstalledVersions.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInitdb169a5bf41e234f880a09132adbf656::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInitdb169a5bf41e234f880a09132adbf656::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInitdb169a5bf41e234f880a09132adbf656::$classMap;

        }, null, ClassLoader::class);
    }
}
