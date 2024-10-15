<?php

namespace App\Application\UseCase\GoodCodeBadCode;

use App\Domains\GoodCodeBadCode\Section4\Weapon;
use App\Domains\GoodCodeBadCode\Section4\AttackPower;
use App\Domains\GoodCodeBadCode\Section4\HitPoint;
use App\Domains\GoodCodeBadCode\Section4\Member;
use App\Domains\GoodCodeBadCode\Section4\Status;

class Section4UseCase
{
    public function execute()
    {
        
        $attackPower1 = AttackPower::create(20);
        $attackPower2 = AttackPower::create(25);

        $attackPower1 = $attackPower1->reinForce(AttackPower::create(20));
        $attackPower2 = $attackPower2->disable();
        
        $weapon1 = new Weapon($attackPower1);
        $weapon2 = new Weapon($attackPower2);

        //dd($weapon1->getAttackPower()->getValue() . ' : ' . $weapon2->getAttackPower()->getValue());

        $member = Member::create(
            HitPoint::create(10),
            Status::create(Status::LIVE_STATUS)
        );

        $member->hitPoint->damage(10);

        if ($member->hitPoint->isZero()) {
            $member->status->dead();
        }

        dd($member);
    }
}
