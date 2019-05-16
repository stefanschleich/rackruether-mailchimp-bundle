<?php

declare(strict_types=1);

namespace RackRuether\MailChimpBundle\ContaoManager;

use Contao\CoreBundle\ContaoCoreBundle;
use Contao\ManagerPlugin\Bundle\Config\BundleConfig;
use Contao\ManagerPlugin\Bundle\BundlePluginInterface;
use Contao\ManagerPlugin\Bundle\Parser\ParserInterface;
use RackRuether\MailChimpBundle\RackRuetherMailChimpBundle;

class Plugin implements BundlePluginInterface
{
    /**
     * {@inheritdoc}
     */
    public function getBundles(ParserInterface $parser): array
    {
        return [
            BundleConfig::create(RackRuetherMailChimpBundle::class)->setLoadAfter([ContaoCoreBundle::class]),
        ];
    }
}
