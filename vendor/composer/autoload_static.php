<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInitf23ef68f8bacd924dfad9a0d9fd39ce9
{
    public static $files = array (
        '0e6d7bf4a5811bfa5cf40c5ccd6fae6a' => __DIR__ . '/..' . '/symfony/polyfill-mbstring/bootstrap.php',
    );

    public static $prefixLengthsPsr4 = array (
        'S' => 
        array (
            'Symfony\\Polyfill\\Mbstring\\' => 26,
            'Symfony\\Component\\Finder\\' => 25,
            'Symfony\\Component\\Filesystem\\' => 29,
            'Symfony\\Component\\DependencyInjection\\' => 38,
            'Symfony\\Component\\Debug\\' => 24,
            'Symfony\\Component\\Console\\' => 26,
            'Symfony\\Component\\Config\\' => 25,
        ),
        'P' => 
        array (
            'Psr\\Log\\' => 8,
            'Psr\\Container\\' => 14,
            'PDepend\\' => 8,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Symfony\\Polyfill\\Mbstring\\' => 
        array (
            0 => __DIR__ . '/..' . '/symfony/polyfill-mbstring',
        ),
        'Symfony\\Component\\Finder\\' => 
        array (
            0 => __DIR__ . '/..' . '/symfony/finder',
        ),
        'Symfony\\Component\\Filesystem\\' => 
        array (
            0 => __DIR__ . '/..' . '/symfony/filesystem',
        ),
        'Symfony\\Component\\DependencyInjection\\' => 
        array (
            0 => __DIR__ . '/..' . '/symfony/dependency-injection',
        ),
        'Symfony\\Component\\Debug\\' => 
        array (
            0 => __DIR__ . '/..' . '/symfony/debug',
        ),
        'Symfony\\Component\\Console\\' => 
        array (
            0 => __DIR__ . '/..' . '/symfony/console',
        ),
        'Symfony\\Component\\Config\\' => 
        array (
            0 => __DIR__ . '/..' . '/symfony/config',
        ),
        'Psr\\Log\\' => 
        array (
            0 => __DIR__ . '/..' . '/psr/log/Psr/Log',
        ),
        'Psr\\Container\\' => 
        array (
            0 => __DIR__ . '/..' . '/psr/container/src',
        ),
        'PDepend\\' => 
        array (
            0 => __DIR__ . '/..' . '/pdepend/pdepend/src/main/php/PDepend',
        ),
    );

    public static $prefixesPsr0 = array (
        'P' => 
        array (
            'PHPMD\\' => 
            array (
                0 => __DIR__ . '/..' . '/phpmd/phpmd/src/main/php',
            ),
        ),
    );

    public static $classMap = array (
        'SebastianBergmann\\FinderFacade\\Configuration' => __DIR__ . '/..' . '/sebastian/finder-facade/src/Configuration.php',
        'SebastianBergmann\\FinderFacade\\FinderFacade' => __DIR__ . '/..' . '/sebastian/finder-facade/src/FinderFacade.php',
        'SebastianBergmann\\PHPLOC\\Analyser' => __DIR__ . '/..' . '/phploc/phploc/src/Analyser.php',
        'SebastianBergmann\\PHPLOC\\CLI\\Application' => __DIR__ . '/..' . '/phploc/phploc/src/CLI/Application.php',
        'SebastianBergmann\\PHPLOC\\CLI\\Command' => __DIR__ . '/..' . '/phploc/phploc/src/CLI/Command.php',
        'SebastianBergmann\\PHPLOC\\Collector' => __DIR__ . '/..' . '/phploc/phploc/src/Collector.php',
        'SebastianBergmann\\PHPLOC\\Exception' => __DIR__ . '/..' . '/phploc/phploc/src/Exception/Exception.php',
        'SebastianBergmann\\PHPLOC\\Log\\Csv' => __DIR__ . '/..' . '/phploc/phploc/src/Log/Csv.php',
        'SebastianBergmann\\PHPLOC\\Log\\Text' => __DIR__ . '/..' . '/phploc/phploc/src/Log/Text.php',
        'SebastianBergmann\\PHPLOC\\Log\\Xml' => __DIR__ . '/..' . '/phploc/phploc/src/Log/Xml.php',
        'SebastianBergmann\\PHPLOC\\Publisher' => __DIR__ . '/..' . '/phploc/phploc/src/Publisher.php',
        'SebastianBergmann\\PHPLOC\\RuntimeException' => __DIR__ . '/..' . '/phploc/phploc/src/Exception/RuntimeException.php',
        'SebastianBergmann\\Version' => __DIR__ . '/..' . '/sebastian/version/src/Version.php',
        'TheSeer\\fDOM\\CSS\\DollarEqualRule' => __DIR__ . '/..' . '/theseer/fdomdocument/src/css/DollarEqualRule.php',
        'TheSeer\\fDOM\\CSS\\NotRule' => __DIR__ . '/..' . '/theseer/fdomdocument/src/css/NotRule.php',
        'TheSeer\\fDOM\\CSS\\NthChildRule' => __DIR__ . '/..' . '/theseer/fdomdocument/src/css/NthChildRule.php',
        'TheSeer\\fDOM\\CSS\\RegexRule' => __DIR__ . '/..' . '/theseer/fdomdocument/src/css/RegexRule.php',
        'TheSeer\\fDOM\\CSS\\RuleInterface' => __DIR__ . '/..' . '/theseer/fdomdocument/src/css/RuleInterface.php',
        'TheSeer\\fDOM\\CSS\\Translator' => __DIR__ . '/..' . '/theseer/fdomdocument/src/css/Translator.php',
        'TheSeer\\fDOM\\XPathQuery' => __DIR__ . '/..' . '/theseer/fdomdocument/src/XPathQuery.php',
        'TheSeer\\fDOM\\XPathQueryException' => __DIR__ . '/..' . '/theseer/fdomdocument/src/XPathQueryException.php',
        'TheSeer\\fDOM\\fDOMDocument' => __DIR__ . '/..' . '/theseer/fdomdocument/src/fDOMDocument.php',
        'TheSeer\\fDOM\\fDOMDocumentFragment' => __DIR__ . '/..' . '/theseer/fdomdocument/src/fDOMDocumentFragment.php',
        'TheSeer\\fDOM\\fDOMElement' => __DIR__ . '/..' . '/theseer/fdomdocument/src/fDOMElement.php',
        'TheSeer\\fDOM\\fDOMException' => __DIR__ . '/..' . '/theseer/fdomdocument/src/fDOMException.php',
        'TheSeer\\fDOM\\fDOMNode' => __DIR__ . '/..' . '/theseer/fdomdocument/src/fDOMNode.php',
        'TheSeer\\fDOM\\fDOMXPath' => __DIR__ . '/..' . '/theseer/fdomdocument/src/fDOMXPath.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInitf23ef68f8bacd924dfad9a0d9fd39ce9::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInitf23ef68f8bacd924dfad9a0d9fd39ce9::$prefixDirsPsr4;
            $loader->prefixesPsr0 = ComposerStaticInitf23ef68f8bacd924dfad9a0d9fd39ce9::$prefixesPsr0;
            $loader->classMap = ComposerStaticInitf23ef68f8bacd924dfad9a0d9fd39ce9::$classMap;

        }, null, ClassLoader::class);
    }
}
