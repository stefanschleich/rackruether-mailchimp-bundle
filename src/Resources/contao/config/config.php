<?php

$GLOBALS['TL_HOOKS']['prepareFormData'][] = array('RackRuether\MailchimpBundle\EventListener\ProcessFormData', 'onProcessFormData');
