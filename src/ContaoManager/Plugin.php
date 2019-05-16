<?php

declare(strict_types=1);

namespace RackRuether\MailchimpBundle\ContaoManager;

use Contao\CoreBundle\ContaoCoreBundle;
use Contao\ManagerPlugin\Bundle\Config\BundleConfig;
use Contao\ManagerPlugin\Bundle\BundlePluginInterface;
use Contao\ManagerPlugin\Bundle\Parser\ParserInterface;
use RackRuether\MailchimpBundle\RackRuetherMailchimpBundle;

class Plugin implements BundlePluginInterface
{
    /**
     * {@inheritdoc}
     */
    public function getBundles(ParserInterface $parser): array
    {
        return [
            BundleConfig::create(RackRuetherMailchimpBundle::class)->setLoadAfter([ContaoCoreBundle::class]),
        ];
    }
}
