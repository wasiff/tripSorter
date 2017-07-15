<?php
declare(strict_types=1);
namespace Wasif\tripSorter\Test;
include '../vendor/autoload.php';

use PHPUnit\Framework\TestCase;
use Wasif\tripSorter\BoardingCards\BoardingcardAirportbus;

class BoardingCardAirportbusTest extends TestCase{
    public function test(){
        $boardingcardAirportbus = new BoardingcardAirportbus('Casablanca', 'Gerona Airport');
        $this->assertEquals($boardingcardAirportbus->toString(),"Take the airport bus from Casablanca to Gerona Airport. No seat assignment.");
    }
}

