<?php

namespace fmnznr\AddFields\ContaoManager;

use Contao\CoreBundle\ContaoCoreBundle;
use Contao\ManagerPlugin\Bundle\BundlePluginInterface;
use Contao\ManagerPlugin\Bundle\Config\BundleConfig;
use Contao\ManagerPlugin\Bundle\Parser\ParserInterface;
use fmnznr\AddFields\FmnznrAddFieldsBundle;

class Plugin implements BundlePluginInterface
{
    public function getBundles(ParserInterface $parser)
    {
        return [
            BundleConfig::create(FmnznrAddFieldsBundle::class)
                // Lade das eigene Bundle nach dem ContaoCoreBundle
                ->setLoadAfter([ContaoCoreBundle::class]),
        ];
    }
}