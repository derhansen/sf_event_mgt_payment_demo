<?php

namespace Derhansen\SfEventMgtPaymentDemo\Payment;

use DERHANSEN\SfEventMgt\Payment\AbstractPayment;

class DemoProvider extends AbstractPayment
{
    protected bool $enableRedirect = true;
    protected bool $enableSuccessLink = true;
    protected bool $enableFailureLink = true;
    protected bool $enableCancelLink = true;
    protected bool $enableNotifyLink = true;
}
