<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInitb12b2ab43675b761f6fb725782762c72
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
            $loader->prefixLengthsPsr4 = ComposerStaticInitb12b2ab43675b761f6fb725782762c72::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInitb12b2ab43675b761f6fb725782762c72::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInitb12b2ab43675b761f6fb725782762c72::$classMap;

        }, null, ClassLoader::class);
    }
}
