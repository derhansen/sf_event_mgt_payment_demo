<?php

namespace Derhansen\SfEventMgtPaymentDemo\EventListener;

use DERHANSEN\SfEventMgt\Event\ProcessPaymentNotifyEvent;
use TYPO3\CMS\Core\Utility\GeneralUtility;
use TYPO3\CMS\Fluid\View\StandaloneView;

class PaymentNotify
{
    public function __invoke(ProcessPaymentNotifyEvent $processPaymentNotifyEvent): void
    {
        $view = GeneralUtility::makeInstance(StandaloneView::class);
        $view->setTemplatePathAndFilename('EXT:sf_event_mgt_payment_demo/Resources/Private/Templates/Notify.html');
        $view->assignMultiple([
            'registration' => $processPaymentNotifyEvent->getRegistration()
        ]);

        // Implement custom logic (e.g. flag registration for removal, send email, ...)

        $variables = [];
        $variables['html'] = $view->render();

        $processPaymentNotifyEvent->setVariables($variables);
    }
}
