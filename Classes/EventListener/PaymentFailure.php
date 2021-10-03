<?php

namespace Derhansen\SfEventMgtPaymentDemo\EventListener;

use DERHANSEN\SfEventMgt\Event\ProcessPaymentFailureEvent;
use TYPO3\CMS\Core\Utility\GeneralUtility;
use TYPO3\CMS\Fluid\View\StandaloneView;

class PaymentFailure
{
    public function __invoke(ProcessPaymentFailureEvent $processPaymentFailureEvent): void
    {
        $view = GeneralUtility::makeInstance(StandaloneView::class);
        $view->setTemplatePathAndFilename('EXT:sf_event_mgt_payment_demo/Resources/Private/Templates/Failure.html');
        $view->assignMultiple([
            'registration' => $processPaymentFailureEvent->getRegistration()
        ]);

        // Implement custom logic (e.g. flag registration for removal, send email, ...)

        $variables = [];
        $variables['html'] = $view->render();

        $processPaymentFailureEvent->setVariables($variables);
    }
}
