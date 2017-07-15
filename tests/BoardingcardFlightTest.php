<?php
declare(strict_types=1);
namespace Wasif\tripSorter\Test;
include '../vendor/autoload.php';

use PHPUnit\Framework\TestCase;
use Wasif\tripSorter\BoardingCards\BoardingcardFlight;

class BoardingcardFlightTest extends TestCase{
    public function test(){
        $boardingcardFlight = new BoardingcardFlight('Stockholm', 'New York JFK', '7B', 'SK22', '22');
        $this->assertEquals($boardingcardFlight->toString(),"From Stockholm, take flight SK22 to New York JFK. Gate 22, seat 7B. Baggage will be automatically transferred from your last leg.");
    }

}
