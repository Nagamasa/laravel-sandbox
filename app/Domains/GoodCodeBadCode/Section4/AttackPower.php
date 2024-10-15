<?php

namespace App\Domains\GoodCodeBadCode\Section4;

use Exception;

class AttackPower
{
    const MIN = 0; 
    /**
     * 基本的に不変
     * パフォーマンスに影響が生じる場合以外
     */
    private readonly int $value;

    private function __construct(int $value)
    {
        $this->value = $value;
    }

    public static function create(int $value)
    {
        if ($value < self::MIN) {
            throw new Exception('値エラー');
        }
        
        return new self($value);
    }

    public function getValue()
    {
        return $this->value;
    }

    public function reinForce(AttackPower $increment)
    {
        return new self($this->value + $increment->getValue());
    }

    public function disable()
    {
        return new self(self::MIN);
    }


}