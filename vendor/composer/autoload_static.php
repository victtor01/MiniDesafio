<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit0655b120803860fec4048c23ccf77fe5
{
    public static $files = array (
        '975e37f564023e0e698b8ae87654ec46' => __DIR__ . '/../..' . '/app/helpers/security.php',
        '4af6245d70528626294ee4457329e65c' => __DIR__ . '/../..' . '/app/helpers/constants.php',
        '6936a0cc18bd999282752773dda7efac' => __DIR__ . '/../..' . '/app/router/router.php',
        'd4258014c476d8a96b0fd10b45525466' => __DIR__ . '/../..' . '/app/core/controller.php',
        'dbdf8f0f7e1afece4baedc863f1404a8' => __DIR__ . '/../..' . '/app/database/connect.php',
        'd21d0a960d66cd5e6ac58b47f5a3c76d' => __DIR__ . '/../..' . '/app/database/fetch.php',
        '482cd17c9f76403205bf64c2bc169a1c' => __DIR__ . '/../..' . '/app/helpers/redirect.php',
        '043215f7b01e13a2a27750d900870014' => __DIR__ . '/../..' . '/app/helpers/validate.php',
    );

    public static $prefixLengthsPsr4 = array (
        'a' => 
        array (
            'app\\' => 4,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'app\\' => 
        array (
            0 => __DIR__ . '/../..' . '/app',
        ),
    );

    public static $classMap = array (
        'Composer\\InstalledVersions' => __DIR__ . '/..' . '/composer/InstalledVersions.php',
        'app\\controllers\\Home' => __DIR__ . '/../..' . '/app/controllers/Home.php',
        'app\\controllers\\Login' => __DIR__ . '/../..' . '/app/controllers/Login.php',
        'app\\controllers\\Register' => __DIR__ . '/../..' . '/app/controllers/Register.php',
        'app\\controllers\\User' => __DIR__ . '/../..' . '/app/controllers/User.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit0655b120803860fec4048c23ccf77fe5::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit0655b120803860fec4048c23ccf77fe5::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInit0655b120803860fec4048c23ccf77fe5::$classMap;

        }, null, ClassLoader::class);
    }
}
