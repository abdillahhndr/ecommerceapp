<?php

// autoload_real.php @generated by Composer

class ComposerAutoloaderInita54f62bb8687a830bd7f7e3dad7b7bda
{
    private static $loader;

    public static function loadClassLoader($class)
    {
        if ('Composer\Autoload\ClassLoader' === $class) {
            require __DIR__ . '/ClassLoader.php';
        }
    }

    /**
     * @return \Composer\Autoload\ClassLoader
     */
    public static function getLoader()
    {
        if (null !== self::$loader) {
            return self::$loader;
        }

        require __DIR__ . '/platform_check.php';

        spl_autoload_register(array('ComposerAutoloaderInita54f62bb8687a830bd7f7e3dad7b7bda', 'loadClassLoader'), true, true);
        self::$loader = $loader = new \Composer\Autoload\ClassLoader(\dirname(__DIR__));
        spl_autoload_unregister(array('ComposerAutoloaderInita54f62bb8687a830bd7f7e3dad7b7bda', 'loadClassLoader'));

        require __DIR__ . '/autoload_static.php';
        call_user_func(\Composer\Autoload\ComposerStaticInita54f62bb8687a830bd7f7e3dad7b7bda::getInitializer($loader));

        $loader->register(true);

        return $loader;
    }
}
