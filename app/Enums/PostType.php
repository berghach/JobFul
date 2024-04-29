<?php declare(strict_types=1);

namespace App\Enums;

use BenSampo\Enum\Enum;

/**
 * @method static static OptionOne()
 * @method static static OptionTwo()
 * @method static static OptionThree()
 */
final class PostType extends Enum
{
    const JobRequest = 'job request';
    const JobOffer = 'job offer';
    const ServiceRequest = 'service request';
    const ServiceOffer = 'service offer';
}
