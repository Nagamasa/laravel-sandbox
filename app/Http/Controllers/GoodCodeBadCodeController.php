<?php

namespace App\Http\Controllers;

use App\Application\UseCase\GoodCodeBadCode\Section3UseCase;
use App\Application\UseCase\GoodCodeBadCode\Section4UseCase;

class GoodCodeBadCodeController extends Controller
{
    
    public function section3(Section3UseCase $useCase)
    {
        return $useCase->execute();
    }

    public function section4(Section4UseCase $useCase)
    {
        return $useCase->execute();
    }
}
