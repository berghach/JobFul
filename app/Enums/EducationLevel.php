<?php declare(strict_types=1);

namespace App\Enums;

use BenSampo\Enum\Enum;

/**
 * @method static static OptionOne()
 * @method static static OptionTwo()
 * @method static static OptionThree()
 */
final class EducationLevel extends Enum
{
    const NOT_IMPORTANT = 'Not important';
    const BACCALAURATE = 'Baccalaurate';
    const BAC_PLUS_2 = "Bac plus 2";
    const BAC_PLUS_3 = "Bac plus 3";
    const BAC_PLUS_4 = "Bac plus 4";
    const BAC_PLUS_5 = 'Bac plus 5';
}
