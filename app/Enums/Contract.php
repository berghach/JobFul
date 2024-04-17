<?php declare(strict_types=1);

namespace App\Enums;

use BenSampo\Enum\Enum;

/**
 * @method static static OptionOne()
 * @method static static OptionTwo()
 * @method static static OptionThree()
 */
final class Contract extends Enum
{
    const Internship = 'internship';
    const CDD = 'CDD';
    const CDI = 'CDI';
}
