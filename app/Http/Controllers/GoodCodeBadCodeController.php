<?php

namespace App\Http\Controllers;

use App\Application\UseCase\GoodCodeBadCode\Section3UseCase;

class GoodCodeBadCodeController extends Controller
{
    
    public function section3(Section3UseCase $useCase)
    {
        return $useCase->execute();
    }
}
