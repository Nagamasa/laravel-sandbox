<?php

namespace App\Domains\GoodCodeBadCode\Section4;

use Exception;

class HitPoint
{
    const MIN = 0;
    /** 可変の場合は必ず正しい状態変更のみ発生するようにする */
    public int $amount;

    private function __construct(int $amount)
    {
        $this->amount = $amount;
    }

    public static function create(int $amount): self
    {
        if ($amount < self::MIN) {
            throw new Exception('値エラー');
        }
        
        return new self($amount);
    }

    public function damage(int $damageAmount)
    {
        $nextAmount = $this->amount - $damageAmount;

        if ($nextAmount < self::MIN) {
            $this->amount = self::MIN;
        } else {
            $this->amount = $nextAmount;
        }
    }

    public function isZero(): bool
    {
        return $this->amount === self::MIN;
    }
}