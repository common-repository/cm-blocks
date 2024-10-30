<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInite005cc03aa096a19b1059bddf46eae77
{
    public static $prefixLengthsPsr4 = array (
        'C' => 
        array (
            'Codemanas\\CmBlocks\\' => 19,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Codemanas\\CmBlocks\\' => 
        array (
            0 => __DIR__ . '/../..' . '/includes',
        ),
    );

    public static $classMap = array (
        'Codemanas\\CmBlocks\\Admin' => __DIR__ . '/../..' . '/includes/Admin.php',
        'Codemanas\\CmBlocks\\BlockRender' => __DIR__ . '/../..' . '/includes/BlockRender.php',
        'Codemanas\\CmBlocks\\Bootstrap' => __DIR__ . '/../..' . '/includes/Bootstrap.php',
        'Codemanas\\CmBlocks\\Database\\FavoritesDB' => __DIR__ . '/../..' . '/includes/Database/FavoritesDB.php',
        'Codemanas\\CmBlocks\\Editor' => __DIR__ . '/../..' . '/includes/Editor.php',
        'Codemanas\\CmBlocks\\Enhancement\\BlockVisibility\\BlockVisibility' => __DIR__ . '/../..' . '/includes/Enhancement/BlockVisibility/BlockVisibility.php',
        'Codemanas\\CmBlocks\\Enhancement\\BlockVisibility\\MediaQuery' => __DIR__ . '/../..' . '/includes/Enhancement/BlockVisibility/MediaQuery.php',
        'Codemanas\\CmBlocks\\Enhancement\\BlockVisibility\\UserRoles' => __DIR__ . '/../..' . '/includes/Enhancement/BlockVisibility/UserRoles.php',
        'Codemanas\\CmBlocks\\Enhancement\\Main' => __DIR__ . '/../..' . '/includes/Enhancement/Main.php',
        'Codemanas\\CmBlocks\\Enhancement\\MaintenanceMode' => __DIR__ . '/../..' . '/includes/Enhancement/MaintenanceMode.php',
        'Codemanas\\CmBlocks\\Enhancement\\ScrollToTop' => __DIR__ . '/../..' . '/includes/Enhancement/ScrollToTop.php',
        'Codemanas\\CmBlocks\\Helper' => __DIR__ . '/../..' . '/includes/Helper.php',
        'Codemanas\\CmBlocks\\Importer\\Favorites' => __DIR__ . '/../..' . '/includes/Importer/Favorites.php',
        'Codemanas\\CmBlocks\\Importer\\ImageImporter' => __DIR__ . '/../..' . '/includes/Importer/ImageImporter.php',
        'Codemanas\\CmBlocks\\Importer\\Importer' => __DIR__ . '/../..' . '/includes/Importer/Importer.php',
        'Codemanas\\CmBlocks\\License' => __DIR__ . '/../..' . '/includes/License.php',
        'Codemanas\\CmBlocks\\Patterns' => __DIR__ . '/../..' . '/includes/Patterns.php',
        'Codemanas\\CmBlocks\\Rest\\Details' => __DIR__ . '/../..' . '/includes/Rest/Details.php',
        'Codemanas\\CmBlocks\\Rest\\Header' => __DIR__ . '/../..' . '/includes/Rest/Header.php',
        'Codemanas\\CmBlocks\\Rest\\RestModules' => __DIR__ . '/../..' . '/includes/Rest/RestModules.php',
        'Codemanas\\CmBlocks\\Rest\\ScrollToTop' => __DIR__ . '/../..' . '/includes/Rest/ScrollToTop.php',
        'Codemanas\\CmBlocks\\Rest\\SiteSettings' => __DIR__ . '/../..' . '/includes/Rest/SiteSettings.php',
        'Codemanas\\CmBlocks\\Rest\\UserRoles' => __DIR__ . '/../..' . '/includes/Rest/UserRoles.php',
        'Codemanas\\CmBlocks\\Rest\\Visibility' => __DIR__ . '/../..' . '/includes/Rest/Visibility.php',
        'Composer\\InstalledVersions' => __DIR__ . '/..' . '/composer/InstalledVersions.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInite005cc03aa096a19b1059bddf46eae77::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInite005cc03aa096a19b1059bddf46eae77::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInite005cc03aa096a19b1059bddf46eae77::$classMap;

        }, null, ClassLoader::class);
    }
}
