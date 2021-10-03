<?php

namespace Derhansen\SfEventMgtPaymentDemo\Payment;

use DERHANSEN\SfEventMgt\Payment\AbstractPayment;

class DemoProvider extends AbstractPayment
{
    protected $enableRedirect = true;
    protected $enableSuccessLink = true;
    protected $enableFailureLink = true;
    protected $enableCancelLink = true;
    protected $enableNotifyLink = true;
}
