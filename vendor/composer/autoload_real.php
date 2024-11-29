<?php

// autoload_real.php @generated by Composer

class ComposerAutoloaderInitfd701725d67e03d4bf98ebcfcd3e1c19
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

        spl_autoload_register(array('ComposerAutoloaderInitfd701725d67e03d4bf98ebcfcd3e1c19', 'loadClassLoader'), true, true);
        self::$loader = $loader = new \Composer\Autoload\ClassLoader(\dirname(__DIR__));
        spl_autoload_unregister(array('ComposerAutoloaderInitfd701725d67e03d4bf98ebcfcd3e1c19', 'loadClassLoader'));

        require __DIR__ . '/autoload_static.php';
        call_user_func(\Composer\Autoload\ComposerStaticInitfd701725d67e03d4bf98ebcfcd3e1c19::getInitializer($loader));

        $loader->register(true);

        return $loader;
    }
}
