<?php
declare(strict_types=1);
namespace Wasif\tripSorter\Test;
include '../vendor/autoload.php';

use PHPUnit\Framework\TestCase;
use Wasif\tripSorter\BoardingCards\BoardingcardTrain;

class BoardingcardTrainTest extends TestCase{
    public function test(){
        $trainBoardingCard = new BoardingcardTrain('Madrid', 'Casablanca', '45B', '78A');
        $this->assertEquals($trainBoardingCard->toString(),"Take train 78A from Madrid to Casablanca. Sit in seat 45B.");
    }
}

