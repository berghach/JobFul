<?php declare(strict_types=1);

namespace App\Enums;

use BenSampo\Enum\Enum;

/**
 * @method static static OptionOne()
 * @method static static OptionTwo()
 * @method static static OptionThree()
 */
final class JobType extends Enum
{
    const PartTime = 'part time';
    const FullTime = 'full time';
    const OnSite = 'on site';
    const Hybrid = 'hybrid';
    const Remote = 'remote';
    const Freelance = 'freelance';
}
