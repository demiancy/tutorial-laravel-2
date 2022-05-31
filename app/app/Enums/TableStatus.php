<?php

namespace App\Enums;

use BenSampo\Enum\Enum;
use BenSampo\Enum\Contracts\LocalizedEnum;

/**
 * @method static static Available()
 * @method static static Pending()
 * @method static static Unavailable()
 */
final class TableStatus extends Enum implements LocalizedEnum
{
    public const Available   = 'available';
    public const Pending     = 'pending';
    public const Unavailable = 'unavailable';
}
