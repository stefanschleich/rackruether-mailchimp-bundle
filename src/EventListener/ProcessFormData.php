<?php

namespace RackRuether\MailchimpBundle\EventListener;

use Oneup\MailChimp\Client;
use Oneup\MailChimp\Exception\ApiException;

class ProcessFormData
{
    public function onProcessFormData($arrPost, $arrForm, $arrFiles)
    {
        //$formID = $objForm->getFormId();

        if($GLOBALS['TL_CONFIG']['rrMailchimpApiKey'] && $arrPost['MailchimpListID'] && $arrPost['Newsletter'] == 1 && $arrPost['Datenschutz'] == 1) {

            $mc = new Client($GLOBALS['TL_CONFIG']['rrMailchimpApiKey']);

            try {
                $subscribed = $mc->subscribeToList(
                    $arrPost['MailchimpListID'],           // List ID
                    $arrPost['Email'],          // E-Mail address
                    array_filter([                       // Array with first/lastname (MailChimp merge tags)
                        'FNAME' => $arrPost['Vorname'],
                        'LNAME' => $arrPost['Nachname'],
                        'DSGVO' => 1
                    ]),
                    true                    // Double opt-in true
                );
                if ($subscribed) {
                    // throw new \Exception('SUBSCRIBED: ' . $subscribed);
                } else {
                    // throw new \Exception('NOT SUBSCRIBED: ' . $arrPost['Vorname']);
                }
            } catch (ApiException $e) {

            }
        }
    }
}