<?php

namespace Derhansen\SfEventMgtPaymentDemo\EventListener;

use DERHANSEN\SfEventMgt\Event\ProcessPaymentInitializeEvent;
use TYPO3\CMS\Core\Utility\GeneralUtility;
use TYPO3\CMS\Fluid\View\StandaloneView;

class PaymentInitialize
{
    public function __invoke(ProcessPaymentInitializeEvent $processPaymentInitializeEvent): void
    {
        $view = GeneralUtility::makeInstance(StandaloneView::class);
        $view->setTemplatePathAndFilename('EXT:sf_event_mgt_payment_demo/Resources/Private/Templates/Redirect.html');
        $view->assign('data', $processPaymentInitializeEvent->getVariables());

        // Implement custom logic to initialize payment (e.g. initial API request to payment provider, ...)

        $variables = $processPaymentInitializeEvent->getVariables();
        $variables['html'] = $view->render();

        $processPaymentInitializeEvent->setVariables($variables);
    }
}
