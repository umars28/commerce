<?php

namespace App\Enums;

use BenSampo\Enum\Enum;

/**
 * @method static static ADMIN()
 * @method static static PENJUAL()
 * @method static static PEMBELI()
 */
final class LevelType extends Enum
{
    const ADMIN = 'ADMIN';
    const PENJUAL = 'PENJUAL';
    const PEMBELI = 'PEMBELI';
}
