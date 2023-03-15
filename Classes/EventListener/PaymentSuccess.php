<?php

namespace Derhansen\SfEventMgtPaymentDemo\EventListener;

use DERHANSEN\SfEventMgt\Event\ProcessPaymentSuccessEvent;
use TYPO3\CMS\Core\Utility\GeneralUtility;
use TYPO3\CMS\Fluid\View\StandaloneView;

class PaymentSuccess
{
    public function __invoke(ProcessPaymentSuccessEvent $processPaymentSuccessEvent): void
    {
        $view = GeneralUtility::makeInstance(StandaloneView::class);
        $view->setTemplatePathAndFilename('EXT:sf_event_mgt_payment_demo/Resources/Private/Templates/Success.html');
        $view->assignMultiple([
            'registration' => $processPaymentSuccessEvent->getRegistration()
        ]);

        $variables = [];
        $variables['html'] = $view->render();

        // Implement custom logic here (e.g. save transaction ID, ...)

        $processPaymentSuccessEvent->getRegistration()->setPaid(true);
        $processPaymentSuccessEvent->setUpdateRegistration(true);

        $processPaymentSuccessEvent->setVariables($variables);
    }
}
