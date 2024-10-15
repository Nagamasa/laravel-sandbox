<?php

namespace App\Domains\GoodCodeBadCode\Section4;

use Exception;

class Member
{
    public HitPoint $hitPoint;
    public Status $status;

    private function __construct(
        HitPoint $hitPoint,
        Status $status
    )
    {
        $this->hitPoint = $hitPoint;
        $this->status = $status;
    }

    public static function create(HitPoint $hitPoint, Status $status)
    {
        return new self($hitPoint, $status);
    }

    public function damage(int $damageAmount)
    {
        $this->hitPoint->damage($damageAmount);
    }
}