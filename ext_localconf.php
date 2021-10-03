<?php

defined('TYPO3') or die();

// Register payment provider
$GLOBALS['TYPO3_CONF_VARS']['EXTCONF']['sf_event_mgt']['paymentMethods']['payment_demo'] = [
    'class' => \Derhansen\SfEventMgtPaymentDemo\Payment\DemoProvider::class,
    'extkey' => 'sf_event_mgt_payment_demo'
];
