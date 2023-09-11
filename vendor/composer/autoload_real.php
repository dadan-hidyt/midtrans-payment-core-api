<?php

// autoload_real.php @generated by Composer

class ComposerAutoloaderInit9f72e5576b7b54b414f3a55c1042f3f0
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

        spl_autoload_register(array('ComposerAutoloaderInit9f72e5576b7b54b414f3a55c1042f3f0', 'loadClassLoader'), true, true);
        self::$loader = $loader = new \Composer\Autoload\ClassLoader(\dirname(__DIR__));
        spl_autoload_unregister(array('ComposerAutoloaderInit9f72e5576b7b54b414f3a55c1042f3f0', 'loadClassLoader'));

        require __DIR__ . '/autoload_static.php';
        call_user_func(\Composer\Autoload\ComposerStaticInit9f72e5576b7b54b414f3a55c1042f3f0::getInitializer($loader));

        $loader->register(true);

        return $loader;
    }
}
