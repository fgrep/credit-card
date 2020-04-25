<?php

namespace LVR\CreditCard\Cards;

use LVR\CreditCard\Contracts\CreditCard;

class Hipercard extends Card implements CreditCard
{
    /**
     * Regular expression for card number recognition.
     *
     * @var string
     */
    public static $pattern = '/^(384100|384140|384160|606282|637095|637568|60(?!11))/';

    /**
     * Credit card type.
     *
     * @var string
     */
    protected $type = 'credit';

    /**
     * Credit card name.
     *
     * @var string
     */
    protected $name = 'hipercard';

    /**
     * Brand name.
     *
     * @var string
     */
    protected $brand = 'Hipercard';

    /**
     * Card number length's.
     *
     * @var array
     */
    protected $number_length = [14, 15, 16, 17, 18, 19];

    /**
     * CVC code length's.
     *
     * @var array
     */
    protected $cvc_length = [3];

    /**
     * Test cvc code checksum against Luhn algorithm.
     *
     * @var bool
     */
    protected $checksum_test = true;
}
