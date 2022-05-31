<?php

namespace App\Enums;

use BenSampo\Enum\Enum;
use BenSampo\Enum\Contracts\LocalizedEnum;

/**
 * @method static static Pending()
 * @method static static Available()
 * @method static static Unavaliable()
 */
final class TableStatus extends Enum implements LocalizedEnum
{
    const Available   = 'available';
    const Pending     = 'pending';
    const Unavailable = 'unavailable';
}
