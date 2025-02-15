<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit8c62b1f5e81f13f848c85488aae00a10
{
    public static $prefixLengthsPsr4 = array (
        'd' => 
        array (
            'daandelange\\SimpleStats\\' => 24,
        ),
        'W' => 
        array (
            'WhichBrowser\\' => 13,
        ),
        'P' => 
        array (
            'Psr\\Cache\\' => 10,
        ),
        'K' => 
        array (
            'Kirby\\' => 6,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'daandelange\\SimpleStats\\' => 
        array (
            0 => __DIR__ . '/../..' . '/src/models',
        ),
        'WhichBrowser\\' => 
        array (
            0 => __DIR__ . '/..' . '/buzz/which-browser-parser/src',
            1 => __DIR__ . '/..' . '/buzz/which-browser-parser/tests/src',
        ),
        'Psr\\Cache\\' => 
        array (
            0 => __DIR__ . '/..' . '/psr/cache/src',
        ),
        'Kirby\\' => 
        array (
            0 => __DIR__ . '/..' . '/getkirby/composer-installer/src',
        ),
    );

    public static $prefixesPsr0 = array (
        'S' => 
        array (
            'Snowplow\\RefererParser' => 
            array (
                0 => __DIR__ . '/..' . '/snowplow/referer-parser/php/src',
            ),
        ),
    );

    public static $classMap = array (
        'Composer\\InstalledVersions' => __DIR__ . '/..' . '/composer/InstalledVersions.php',
        'Kirby\\ComposerInstaller\\CmsInstaller' => __DIR__ . '/..' . '/getkirby/composer-installer/src/ComposerInstaller/CmsInstaller.php',
        'Kirby\\ComposerInstaller\\Installer' => __DIR__ . '/..' . '/getkirby/composer-installer/src/ComposerInstaller/Installer.php',
        'Kirby\\ComposerInstaller\\Plugin' => __DIR__ . '/..' . '/getkirby/composer-installer/src/ComposerInstaller/Plugin.php',
        'Kirby\\ComposerInstaller\\PluginInstaller' => __DIR__ . '/..' . '/getkirby/composer-installer/src/ComposerInstaller/PluginInstaller.php',
        'Psr\\Cache\\CacheException' => __DIR__ . '/..' . '/psr/cache/src/CacheException.php',
        'Psr\\Cache\\CacheItemInterface' => __DIR__ . '/..' . '/psr/cache/src/CacheItemInterface.php',
        'Psr\\Cache\\CacheItemPoolInterface' => __DIR__ . '/..' . '/psr/cache/src/CacheItemPoolInterface.php',
        'Psr\\Cache\\InvalidArgumentException' => __DIR__ . '/..' . '/psr/cache/src/InvalidArgumentException.php',
        'Snowplow\\RefererParser\\Config\\ConfigFileReaderTrait' => __DIR__ . '/..' . '/snowplow/referer-parser/php/src/Snowplow/RefererParser/Config/ConfigFileReaderTrait.php',
        'Snowplow\\RefererParser\\Config\\ConfigReaderInterface' => __DIR__ . '/..' . '/snowplow/referer-parser/php/src/Snowplow/RefererParser/Config/ConfigReaderInterface.php',
        'Snowplow\\RefererParser\\Config\\JsonConfigReader' => __DIR__ . '/..' . '/snowplow/referer-parser/php/src/Snowplow/RefererParser/Config/JsonConfigReader.php',
        'Snowplow\\RefererParser\\Config\\YamlConfigReader' => __DIR__ . '/..' . '/snowplow/referer-parser/php/src/Snowplow/RefererParser/Config/YamlConfigReader.php',
        'Snowplow\\RefererParser\\Exception\\InvalidArgumentException' => __DIR__ . '/..' . '/snowplow/referer-parser/php/src/Snowplow/RefererParser/Exception/InvalidArgumentException.php',
        'Snowplow\\RefererParser\\Medium' => __DIR__ . '/..' . '/snowplow/referer-parser/php/src/Snowplow/RefererParser/Medium.php',
        'Snowplow\\RefererParser\\Parser' => __DIR__ . '/..' . '/snowplow/referer-parser/php/src/Snowplow/RefererParser/Parser.php',
        'Snowplow\\RefererParser\\Referer' => __DIR__ . '/..' . '/snowplow/referer-parser/php/src/Snowplow/RefererParser/Referer.php',
        'WhichBrowser\\Analyser' => __DIR__ . '/..' . '/buzz/which-browser-parser/src/Analyser.php',
        'WhichBrowser\\Analyser\\Camouflage' => __DIR__ . '/..' . '/buzz/which-browser-parser/src/Analyser/Camouflage.php',
        'WhichBrowser\\Analyser\\Corrections' => __DIR__ . '/..' . '/buzz/which-browser-parser/src/Analyser/Corrections.php',
        'WhichBrowser\\Analyser\\Derive' => __DIR__ . '/..' . '/buzz/which-browser-parser/src/Analyser/Derive.php',
        'WhichBrowser\\Analyser\\Header' => __DIR__ . '/..' . '/buzz/which-browser-parser/src/Analyser/Header.php',
        'WhichBrowser\\Analyser\\Header\\Baidu' => __DIR__ . '/..' . '/buzz/which-browser-parser/src/Analyser/Header/Baidu.php',
        'WhichBrowser\\Analyser\\Header\\BrowserId' => __DIR__ . '/..' . '/buzz/which-browser-parser/src/Analyser/Header/BrowserId.php',
        'WhichBrowser\\Analyser\\Header\\OperaMini' => __DIR__ . '/..' . '/buzz/which-browser-parser/src/Analyser/Header/OperaMini.php',
        'WhichBrowser\\Analyser\\Header\\Puffin' => __DIR__ . '/..' . '/buzz/which-browser-parser/src/Analyser/Header/Puffin.php',
        'WhichBrowser\\Analyser\\Header\\UCBrowserNew' => __DIR__ . '/..' . '/buzz/which-browser-parser/src/Analyser/Header/UCBrowserNew.php',
        'WhichBrowser\\Analyser\\Header\\UCBrowserOld' => __DIR__ . '/..' . '/buzz/which-browser-parser/src/Analyser/Header/UCBrowserOld.php',
        'WhichBrowser\\Analyser\\Header\\Useragent' => __DIR__ . '/..' . '/buzz/which-browser-parser/src/Analyser/Header/Useragent.php',
        'WhichBrowser\\Analyser\\Header\\Useragent\\Application' => __DIR__ . '/..' . '/buzz/which-browser-parser/src/Analyser/Header/Useragent/Application.php',
        'WhichBrowser\\Analyser\\Header\\Useragent\\Bot' => __DIR__ . '/..' . '/buzz/which-browser-parser/src/Analyser/Header/Useragent/Bot.php',
        'WhichBrowser\\Analyser\\Header\\Useragent\\Browser' => __DIR__ . '/..' . '/buzz/which-browser-parser/src/Analyser/Header/Useragent/Browser.php',
        'WhichBrowser\\Analyser\\Header\\Useragent\\Device' => __DIR__ . '/..' . '/buzz/which-browser-parser/src/Analyser/Header/Useragent/Device.php',
        'WhichBrowser\\Analyser\\Header\\Useragent\\Device\\Appliance' => __DIR__ . '/..' . '/buzz/which-browser-parser/src/Analyser/Header/Useragent/Device/Appliance.php',
        'WhichBrowser\\Analyser\\Header\\Useragent\\Device\\Cars' => __DIR__ . '/..' . '/buzz/which-browser-parser/src/Analyser/Header/Useragent/Device/Cars.php',
        'WhichBrowser\\Analyser\\Header\\Useragent\\Device\\Ereader' => __DIR__ . '/..' . '/buzz/which-browser-parser/src/Analyser/Header/Useragent/Device/Ereader.php',
        'WhichBrowser\\Analyser\\Header\\Useragent\\Device\\Gaming' => __DIR__ . '/..' . '/buzz/which-browser-parser/src/Analyser/Header/Useragent/Device/Gaming.php',
        'WhichBrowser\\Analyser\\Header\\Useragent\\Device\\Gps' => __DIR__ . '/..' . '/buzz/which-browser-parser/src/Analyser/Header/Useragent/Device/Gps.php',
        'WhichBrowser\\Analyser\\Header\\Useragent\\Device\\Media' => __DIR__ . '/..' . '/buzz/which-browser-parser/src/Analyser/Header/Useragent/Device/Media.php',
        'WhichBrowser\\Analyser\\Header\\Useragent\\Device\\Mobile' => __DIR__ . '/..' . '/buzz/which-browser-parser/src/Analyser/Header/Useragent/Device/Mobile.php',
        'WhichBrowser\\Analyser\\Header\\Useragent\\Device\\Pda' => __DIR__ . '/..' . '/buzz/which-browser-parser/src/Analyser/Header/Useragent/Device/Pda.php',
        'WhichBrowser\\Analyser\\Header\\Useragent\\Device\\Phone' => __DIR__ . '/..' . '/buzz/which-browser-parser/src/Analyser/Header/Useragent/Device/Phone.php',
        'WhichBrowser\\Analyser\\Header\\Useragent\\Device\\Printer' => __DIR__ . '/..' . '/buzz/which-browser-parser/src/Analyser/Header/Useragent/Device/Printer.php',
        'WhichBrowser\\Analyser\\Header\\Useragent\\Device\\Signage' => __DIR__ . '/..' . '/buzz/which-browser-parser/src/Analyser/Header/Useragent/Device/Signage.php',
        'WhichBrowser\\Analyser\\Header\\Useragent\\Device\\Tablet' => __DIR__ . '/..' . '/buzz/which-browser-parser/src/Analyser/Header/Useragent/Device/Tablet.php',
        'WhichBrowser\\Analyser\\Header\\Useragent\\Device\\Television' => __DIR__ . '/..' . '/buzz/which-browser-parser/src/Analyser/Header/Useragent/Device/Television.php',
        'WhichBrowser\\Analyser\\Header\\Useragent\\Engine' => __DIR__ . '/..' . '/buzz/which-browser-parser/src/Analyser/Header/Useragent/Engine.php',
        'WhichBrowser\\Analyser\\Header\\Useragent\\Os' => __DIR__ . '/..' . '/buzz/which-browser-parser/src/Analyser/Header/Useragent/Os.php',
        'WhichBrowser\\Analyser\\Header\\Useragent\\Using' => __DIR__ . '/..' . '/buzz/which-browser-parser/src/Analyser/Header/Useragent/Using.php',
        'WhichBrowser\\Analyser\\Header\\Wap' => __DIR__ . '/..' . '/buzz/which-browser-parser/src/Analyser/Header/Wap.php',
        'WhichBrowser\\Cache' => __DIR__ . '/..' . '/buzz/which-browser-parser/src/Cache.php',
        'WhichBrowser\\Constants\\BrowserType' => __DIR__ . '/..' . '/buzz/which-browser-parser/src/Constants/BrowserType.php',
        'WhichBrowser\\Constants\\DeviceSubType' => __DIR__ . '/..' . '/buzz/which-browser-parser/src/Constants/DeviceSubType.php',
        'WhichBrowser\\Constants\\DeviceType' => __DIR__ . '/..' . '/buzz/which-browser-parser/src/Constants/DeviceType.php',
        'WhichBrowser\\Constants\\EngineType' => __DIR__ . '/..' . '/buzz/which-browser-parser/src/Constants/EngineType.php',
        'WhichBrowser\\Constants\\Feature' => __DIR__ . '/..' . '/buzz/which-browser-parser/src/Constants/Feature.php',
        'WhichBrowser\\Constants\\Flag' => __DIR__ . '/..' . '/buzz/which-browser-parser/src/Constants/Flag.php',
        'WhichBrowser\\Constants\\Id' => __DIR__ . '/..' . '/buzz/which-browser-parser/src/Constants/Id.php',
        'WhichBrowser\\Data\\Applications' => __DIR__ . '/..' . '/buzz/which-browser-parser/src/Data/Applications.php',
        'WhichBrowser\\Data\\BrowserIds' => __DIR__ . '/..' . '/buzz/which-browser-parser/src/Data/BrowserIds.php',
        'WhichBrowser\\Data\\BuildIds' => __DIR__ . '/..' . '/buzz/which-browser-parser/src/Data/BuildIds.php',
        'WhichBrowser\\Data\\CFNetwork' => __DIR__ . '/..' . '/buzz/which-browser-parser/src/Data/CFNetwork.php',
        'WhichBrowser\\Data\\Chrome' => __DIR__ . '/..' . '/buzz/which-browser-parser/src/Data/Chrome.php',
        'WhichBrowser\\Data\\Darwin' => __DIR__ . '/..' . '/buzz/which-browser-parser/src/Data/Darwin.php',
        'WhichBrowser\\Data\\DeviceModels' => __DIR__ . '/..' . '/buzz/which-browser-parser/src/Data/DeviceModels.php',
        'WhichBrowser\\Data\\DeviceProfiles' => __DIR__ . '/..' . '/buzz/which-browser-parser/src/Data/DeviceProfiles.php',
        'WhichBrowser\\Data\\Manufacturers' => __DIR__ . '/..' . '/buzz/which-browser-parser/src/Data/Manufacturers.php',
        'WhichBrowser\\Model\\Browser' => __DIR__ . '/..' . '/buzz/which-browser-parser/src/Model/Browser.php',
        'WhichBrowser\\Model\\Device' => __DIR__ . '/..' . '/buzz/which-browser-parser/src/Model/Device.php',
        'WhichBrowser\\Model\\Engine' => __DIR__ . '/..' . '/buzz/which-browser-parser/src/Model/Engine.php',
        'WhichBrowser\\Model\\Family' => __DIR__ . '/..' . '/buzz/which-browser-parser/src/Model/Family.php',
        'WhichBrowser\\Model\\Main' => __DIR__ . '/..' . '/buzz/which-browser-parser/src/Model/Main.php',
        'WhichBrowser\\Model\\Os' => __DIR__ . '/..' . '/buzz/which-browser-parser/src/Model/Os.php',
        'WhichBrowser\\Model\\Primitive\\Base' => __DIR__ . '/..' . '/buzz/which-browser-parser/src/Model/Primitive/Base.php',
        'WhichBrowser\\Model\\Primitive\\NameVersion' => __DIR__ . '/..' . '/buzz/which-browser-parser/src/Model/Primitive/NameVersion.php',
        'WhichBrowser\\Model\\Using' => __DIR__ . '/..' . '/buzz/which-browser-parser/src/Model/Using.php',
        'WhichBrowser\\Model\\Version' => __DIR__ . '/..' . '/buzz/which-browser-parser/src/Model/Version.php',
        'WhichBrowser\\Parser' => __DIR__ . '/..' . '/buzz/which-browser-parser/src/Parser.php',
        'daandelange\\SimpleStats\\Logger' => __DIR__ . '/../..' . '/src/models/Logger.php',
        'daandelange\\SimpleStats\\SimpleStats' => __DIR__ . '/../..' . '/src/models/SimpleStats.php',
        'daandelange\\SimpleStats\\SimpleStatsDb' => __DIR__ . '/../..' . '/src/models/SimpleStatsDb.php',
        'daandelange\\SimpleStats\\SimpleStatsTimeFrameUtility' => __DIR__ . '/../..' . '/src/models/SimpleStatsTimeFrameUtility.php',
        'daandelange\\SimpleStats\\SimpleStatsTrackingMode' => __DIR__ . '/../..' . '/src/models/SimpleStatsTrackingMode.php',
        'daandelange\\SimpleStats\\Stats' => __DIR__ . '/../..' . '/src/models/Stats.php',
        'daandelange\\SimpleStats\\StatsGenerator' => __DIR__ . '/../..' . '/src/models/StatsGenerator.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit8c62b1f5e81f13f848c85488aae00a10::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit8c62b1f5e81f13f848c85488aae00a10::$prefixDirsPsr4;
            $loader->prefixesPsr0 = ComposerStaticInit8c62b1f5e81f13f848c85488aae00a10::$prefixesPsr0;
            $loader->classMap = ComposerStaticInit8c62b1f5e81f13f848c85488aae00a10::$classMap;

        }, null, ClassLoader::class);
    }
}
