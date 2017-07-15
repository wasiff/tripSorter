<?php
declare(strict_types=1);
namespace Wasif\TripSorter\Test;
include '../vendor/autoload.php';

use PHPUnit\Framework\TestCase;
use Wasif\tripSorter\BoardingCards\BoardingcardAirportbus;
use Wasif\tripSorter\BoardingCards\BoardingcardFlight;
use Wasif\tripSorter\BoardingCards\BoardingcardTrain;
use Wasif\tripSorter\Trip;

class TripTest extends TestCase{
    public function test(){
        $journey = new Trip();

        $journey->addCard(new BoardingcardFlight('Stockholm', 'New York JFK', '7B', 'SK22', '22'));
        $journey->addCard(new BoardingcardFlight('Gerona Airport', 'Stockholm', '3A', 'SK455', '45B', '344'));
        $journey->addCard(new BoardingcardTrain('Madrid', 'Casablanca', '45B', '78A'));
        $journey->addCard(new BoardingcardAirportbus('Casablanca', 'Gerona Airport'));


        $journey->sortCard();

        $output = "<ol>".
                     "<li>Take train 78A from Madrid to Casablanca. Sit in seat 45B.</li>".
                     "<li>Take the airport bus from Casablanca to Gerona Airport. No seat assignment.</li>".
                     "<li>From Gerona Airport, take flight SK455 to Stockholm. Gate 45B, seat 3A. Baggage drop at ticket counter 344.</li>".
                     "<li>From Stockholm, take flight SK22 to New York JFK. Gate 22, seat 7B. Baggage will be automatically transferred from your last leg.</li><li>You have arrived at your final destination.</li>".
                  "</ol>";
        $this->assertEquals($journey->toHtml(), $output);
    }
}

