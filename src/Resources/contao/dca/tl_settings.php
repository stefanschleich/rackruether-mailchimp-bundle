<?php

/**
 * Add to palette
 */

$GLOBALS['TL_DCA']['tl_settings']['palettes']['default'] .= ";{rr_mailchimp_legend},rrMailchimpApiKey";

/**
 * Add fields
 */
$GLOBALS['TL_DCA']['tl_settings']['fields']['rrMailchimpApiKey'] = array
(
    'label'             => &$GLOBALS['TL_LANG']['tl_settings']['rrMailchimpApiKey'],
    'inputType'         => 'text',
    'eval'              => array('maxlength'=>255, 'tl_class'=>'w50'),
    'sql'               => "varchar(255) NOT NULL default ''"
);