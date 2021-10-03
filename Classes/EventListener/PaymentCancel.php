<?php

namespace Derhansen\SfEventMgtPaymentDemo\EventListener;

use DERHANSEN\SfEventMgt\Event\ProcessPaymentCancelEvent;
use TYPO3\CMS\Core\Utility\GeneralUtility;
use TYPO3\CMS\Fluid\View\StandaloneView;

class PaymentCancel
{
    public function __invoke(ProcessPaymentCancelEvent $processPaymentCancelEvent): void
    {
        $view = GeneralUtility::makeInstance(StandaloneView::class);
        $view->setTemplatePathAndFilename('EXT:sf_event_mgt_payment_demo/Resources/Private/Templates/Cancel.html');
        $view->assignMultiple([
            'registration' => $processPaymentCancelEvent->getRegistration()
        ]);

        // Implement custom logic (e.g. flag registration for removal, send email, ...)

        $variables = [];
        $variables['html'] = $view->render();

        $processPaymentCancelEvent->setVariables($variables);
    }
}
