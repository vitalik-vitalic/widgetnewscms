<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInita039acb12b45216f86036163940811b7
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

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInita039acb12b45216f86036163940811b7::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInita039acb12b45216f86036163940811b7::$prefixDirsPsr4;

        }, null, ClassLoader::class);
    }
}
