<?php

namespace App\Enums;

enum KondisiPerawatan: string
{
    case GoodNormal = 'good_normal';
    case CautionPoor = 'caution_poor';

    public function label(): string
    {
        return match ($this) {
            self::GoodNormal => 'Good / Normal',
            self::CautionPoor => 'Caution / Poor',
        };
    }
}
