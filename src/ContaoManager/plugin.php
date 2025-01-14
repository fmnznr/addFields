<?php

namespace Mhe\AddFields\ContaoManager;

use Contao\CoreBundle\ContaoCoreBundle;
use Contao\ManagerPlugin\Bundle\BundlePluginInterface;
use Contao\ManagerPlugin\Bundle\Config\BundleConfig;
// ggf. weitere Interfaces wie BundleDependenciesInterface

class Plugin implements BundlePluginInterface
{
    public function getBundles(BundleConfig $config)
    {
        // Beispiel:
        return [
            BundleConfig::create(\Mhe\AddFields\MheAddFieldsBundle::class)
                ->setLoadAfter([ContaoCoreBundle::class]),
        ];
    }
}