<?php

namespace App\Domains\GoodCodeBadCode\Section3;

use Exception;

class Money
{
    // 金額
    private readonly int $amount;
    // 通貨単位
    private readonly string $currency;

    private function __construct(
        int $amount,
        string $currency
    )
    {
        $this->amount = $amount;
        $this->currency = $currency;
    }

    /**
     * 作成処理
     */
    public static function create(
        int $amount,
        string $currency
    ): self
    {
        if ($amount < 0) {
            throw new Exception('金額には0以上を指定してください。');
        }

        if (is_null($currency)) {
            throw new Exception('通貨単位を指定してください。');
        }
        
        return new self(
            $amount,
            $currency
        ); 
    }

    public function add(Money $money): self
    {
        if ($this->currency !== $money->getCurrency()) {
            throw new Exception('通貨単位が違います。');
        }
        
        $added = $this->amount + $money->getAmount();
        return new self($added, $this->currency);
    }

    public function getAmount(): int
    {
        return $this->amount;
    }

    public function getCurrency(): string
    {
        return $this->currency;
    }
}