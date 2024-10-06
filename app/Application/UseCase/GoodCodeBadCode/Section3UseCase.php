<?php

namespace App\Application\UseCase\GoodCodeBadCode;

use App\Domains\GoodCodeBadCode\Section3\Money;

class Section3UseCase
{
    public function execute()
    {
        $money = Money::create(500, '円');

        //dd($money);

        $otherMoney = Money::create(1000, '円');

        $addMoney = $money->add($otherMoney);

        dd($addMoney);
    }
}
