<?php

namespace App\Domains\GoodCodeBadCode\Section4;

use Exception;

class Status
{
    const STATUS_TYPE = [
        0 => 'dead',
        1 => 'live'
    ];
    const LIVE_STATUS = 1;
    const DEAD_STATUS = 0;
    public int $status;

    private function __construct(int $status)
    {
        $this->status = $status;
    }

    public static function create(int $status): self
    {
        if (!array_key_exists($status, self::STATUS_TYPE)) {
            throw new Exception('値エラー');
        }
        
        return new self($status);
    }

    public function dead()
    {
        $this->status = self::DEAD_STATUS;
    }
}