<?php

use Contao\ManagerPlugin\Bundle\Config\BundleConfig;
use Contao\ManagerPlugin\Bundle\BundlePluginInterface;
use Contao\ManagerPlugin\Bundle\Parser\ParserInterface;

class ContaoManagerPlugin implements BundlePluginInterface
{
    /**
     * {@inheritdoc}
     */
    public function getBundles(ParserInterface $parser)
    {
        return [
            BundleConfig::create('RackRuether\MailchimpBundle\RackRuetherMailchimpBundle')
                ->setLoadAfter([
                    'Contao\CoreBundle\ContaoCoreBundle',
                    'Oneup\Contao\MailChimpBundle'
                ]),
            BundleConfig::create('RackRuether\ProductBundle\RackRuetherProductBundle')
                ->setLoadAfter([
                    'Contao\CoreBundle\ContaoCoreBundle'
                ]),
        ];
    }
}
