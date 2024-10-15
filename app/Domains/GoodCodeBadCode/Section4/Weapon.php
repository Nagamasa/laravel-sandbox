<?php

namespace App\Domains\GoodCodeBadCode\Section4;

use Exception;

class Weapon
{
    private readonly AttackPower $attackPower;

    public function __construct(AttackPower $attackPower)
    {
        $this->attackPower = $attackPower;
    }

    public function create(AttackPower $attackPower)
    {
        $this->attackPower = $attackPower;

        return new self($attackPower);
    }

    public function getAttackPower()
    {
        return $this->attackPower;
    }
}