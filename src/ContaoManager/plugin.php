<?php

namespace fmnznr\AddFields\ContaoManager;

use Contao\CoreBundle\ContaoCoreBundle;
use Contao\ManagerPlugin\Bundle\Config\BundleConfig;
use Contao\ManagerPlugin\Bundle\BundlePluginInterface;
use Contao\ManagerPlugin\Bundle\Parser\ParserInterface;
use Vendor\SomeBundle\SomeBundle;

class Plugin implements BundlePluginInterface
{
    public function getBundles(ParserInterface $parser)
    {
        return [
            BundleConfig::create(SomeBundle::class)
                // This loads the bundle after the ContaoCorebundle
                // and after the legacy module called "notification_center".
                ->setLoadAfter([
                    ContaoCoreBundle::class,
                    'notification_center'
                ]),
                // This will replace the legacy module called "old_module_name"
                // with SomeBundle in the plugin loader.
                ->setReplace(['old_module_name']),
        ];
    }
}