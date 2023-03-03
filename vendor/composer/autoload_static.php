<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInitbff00424f1505f9e8b5901080fdeb384
{
    public static $prefixLengthsPsr4 = array (
        'P' => 
        array (
            'PHPMailer\\PHPMailer\\' => 20,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'PHPMailer\\PHPMailer\\' => 
        array (
            0 => __DIR__ . '/..' . '/phpmailer/phpmailer/src',
        ),
    );

    public static $classMap = array (
        'Composer\\InstalledVersions' => __DIR__ . '/..' . '/composer/InstalledVersions.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInitbff00424f1505f9e8b5901080fdeb384::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInitbff00424f1505f9e8b5901080fdeb384::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInitbff00424f1505f9e8b5901080fdeb384::$classMap;

        }, null, ClassLoader::class);
    }
}