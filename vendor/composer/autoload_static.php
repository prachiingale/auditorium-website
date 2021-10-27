<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit97292023b829ca989b99f51027f6ec20
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
            $loader->prefixLengthsPsr4 = ComposerStaticInit97292023b829ca989b99f51027f6ec20::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit97292023b829ca989b99f51027f6ec20::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInit97292023b829ca989b99f51027f6ec20::$classMap;

        }, null, ClassLoader::class);
    }
}
