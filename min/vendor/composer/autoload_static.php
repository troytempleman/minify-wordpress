<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit5b8081e2e05576dbb73133046bc682f8
{
    public static $prefixLengthsPsr4 = array (
        't' => 
        array (
            'tubalmartin\\CssMin\\' => 19,
        ),
        'P' => 
        array (
            'Psr\\Log\\' => 8,
            'Psr\\Container\\' => 14,
        ),
        'M' => 
        array (
            'Monolog\\' => 8,
        ),
        'I' => 
        array (
            'Intervention\\Httpauth\\' => 22,
            'Interop\\Container\\' => 18,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'tubalmartin\\CssMin\\' => 
        array (
            0 => __DIR__ . '/..' . '/tubalmartin/cssmin/src',
        ),
        'Psr\\Log\\' => 
        array (
            0 => __DIR__ . '/..' . '/psr/log/Psr/Log',
        ),
        'Psr\\Container\\' => 
        array (
            0 => __DIR__ . '/..' . '/psr/container/src',
        ),
        'Monolog\\' => 
        array (
            0 => __DIR__ . '/..' . '/monolog/monolog/src/Monolog',
        ),
        'Intervention\\Httpauth\\' => 
        array (
            0 => __DIR__ . '/..' . '/intervention/httpauth/src/Intervention/Httpauth',
        ),
        'Interop\\Container\\' => 
        array (
            0 => __DIR__ . '/..' . '/container-interop/container-interop/src/Interop/Container',
        ),
    );

    public static $prefixesPsr0 = array (
        'P' => 
        array (
            'Props\\' => 
            array (
                0 => __DIR__ . '/..' . '/mrclay/props-dic/src',
                1 => __DIR__ . '/..' . '/mrclay/props-dic/test',
            ),
            'Pimple' => 
            array (
                0 => __DIR__ . '/..' . '/pimple/pimple/src',
            ),
        ),
        'J' => 
        array (
            'JSMin\\' => 
            array (
                0 => __DIR__ . '/..' . '/mrclay/jsmin-php/src',
            ),
        ),
    );

    public static $classMap = array (
        'HTTP_ConditionalGet' => __DIR__ . '/../..' . '/lib/HTTP/ConditionalGet.php',
        'HTTP_Encoder' => __DIR__ . '/../..' . '/lib/HTTP/Encoder.php',
        'Minify' => __DIR__ . '/../..' . '/lib/Minify.php',
        'Minify\\App' => __DIR__ . '/../..' . '/lib/Minify/App.php',
        'Minify\\Config' => __DIR__ . '/../..' . '/lib/Minify/Config.php',
        'Minify\\JS\\JShrink' => __DIR__ . '/../..' . '/lib/Minify/JS/JShrink.php',
        'Minify\\Logger\\LegacyHandler' => __DIR__ . '/../..' . '/lib/Minify/Logger/LegacyHandler.php',
        'Minify_Build' => __DIR__ . '/../..' . '/lib/Minify/Build.php',
        'Minify_CSS' => __DIR__ . '/../..' . '/lib/Minify/CSS.php',
        'Minify_CSS_Compressor' => __DIR__ . '/../..' . '/lib/Minify/CSS/Compressor.php',
        'Minify_CSS_UriRewriter' => __DIR__ . '/../..' . '/lib/Minify/CSS/UriRewriter.php',
        'Minify_CSSmin' => __DIR__ . '/../..' . '/lib/Minify/CSSmin.php',
        'Minify_CacheInterface' => __DIR__ . '/../..' . '/lib/Minify/CacheInterface.php',
        'Minify_Cache_APC' => __DIR__ . '/../..' . '/lib/Minify/Cache/APC.php',
        'Minify_Cache_File' => __DIR__ . '/../..' . '/lib/Minify/Cache/File.php',
        'Minify_Cache_Memcache' => __DIR__ . '/../..' . '/lib/Minify/Cache/Memcache.php',
        'Minify_Cache_Null' => __DIR__ . '/../..' . '/lib/Minify/Cache/Null.php',
        'Minify_Cache_WinCache' => __DIR__ . '/../..' . '/lib/Minify/Cache/WinCache.php',
        'Minify_Cache_XCache' => __DIR__ . '/../..' . '/lib/Minify/Cache/XCache.php',
        'Minify_Cache_ZendPlatform' => __DIR__ . '/../..' . '/lib/Minify/Cache/ZendPlatform.php',
        'Minify_ClosureCompiler' => __DIR__ . '/../..' . '/lib/Minify/ClosureCompiler.php',
        'Minify_ClosureCompiler_Exception' => __DIR__ . '/../..' . '/lib/Minify/ClosureCompiler.php',
        'Minify_CommentPreserver' => __DIR__ . '/../..' . '/lib/Minify/CommentPreserver.php',
        'Minify_ControllerInterface' => __DIR__ . '/../..' . '/lib/Minify/ControllerInterface.php',
        'Minify_Controller_Base' => __DIR__ . '/../..' . '/lib/Minify/Controller/Base.php',
        'Minify_Controller_Files' => __DIR__ . '/../..' . '/lib/Minify/Controller/Files.php',
        'Minify_Controller_Groups' => __DIR__ . '/../..' . '/lib/Minify/Controller/Groups.php',
        'Minify_Controller_MinApp' => __DIR__ . '/../..' . '/lib/Minify/Controller/MinApp.php',
        'Minify_Controller_Page' => __DIR__ . '/../..' . '/lib/Minify/Controller/Page.php',
        'Minify_DebugDetector' => __DIR__ . '/../..' . '/lib/Minify/DebugDetector.php',
        'Minify_Env' => __DIR__ . '/../..' . '/lib/Minify/Env.php',
        'Minify_HTML' => __DIR__ . '/../..' . '/lib/Minify/HTML.php',
        'Minify_HTML_Helper' => __DIR__ . '/../..' . '/lib/Minify/HTML/Helper.php',
        'Minify_ImportProcessor' => __DIR__ . '/../..' . '/lib/Minify/ImportProcessor.php',
        'Minify_JS_ClosureCompiler' => __DIR__ . '/../..' . '/lib/Minify/JS/ClosureCompiler.php',
        'Minify_JS_ClosureCompiler_Exception' => __DIR__ . '/../..' . '/lib/Minify/JS/ClosureCompiler.php',
        'Minify_LessCssSource' => __DIR__ . '/../..' . '/lib/Minify/LessCssSource.php',
        'Minify_Lines' => __DIR__ . '/../..' . '/lib/Minify/Lines.php',
        'Minify_NailgunClosureCompiler' => __DIR__ . '/../..' . '/lib/Minify/NailgunClosureCompiler.php',
        'Minify_Packer' => __DIR__ . '/../..' . '/lib/Minify/Packer.php',
        'Minify_ScssCssSource' => __DIR__ . '/../..' . '/lib/Minify/ScssCssSource.php',
        'Minify_ServeConfiguration' => __DIR__ . '/../..' . '/lib/Minify/ServeConfiguration.php',
        'Minify_Source' => __DIR__ . '/../..' . '/lib/Minify/Source.php',
        'Minify_SourceInterface' => __DIR__ . '/../..' . '/lib/Minify/SourceInterface.php',
        'Minify_SourceSet' => __DIR__ . '/../..' . '/lib/Minify/SourceSet.php',
        'Minify_Source_Factory' => __DIR__ . '/../..' . '/lib/Minify/Source/Factory.php',
        'Minify_Source_FactoryException' => __DIR__ . '/../..' . '/lib/Minify/Source/FactoryException.php',
        'Minify_YUICompressor' => __DIR__ . '/../..' . '/lib/Minify/YUICompressor.php',
        'MrClay\\Cli' => __DIR__ . '/../..' . '/lib/MrClay/Cli.php',
        'MrClay\\Cli\\Arg' => __DIR__ . '/../..' . '/lib/MrClay/Cli/Arg.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit5b8081e2e05576dbb73133046bc682f8::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit5b8081e2e05576dbb73133046bc682f8::$prefixDirsPsr4;
            $loader->prefixesPsr0 = ComposerStaticInit5b8081e2e05576dbb73133046bc682f8::$prefixesPsr0;
            $loader->classMap = ComposerStaticInit5b8081e2e05576dbb73133046bc682f8::$classMap;

        }, null, ClassLoader::class);
    }
}
