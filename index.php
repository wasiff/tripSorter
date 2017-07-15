<?php
namespace Wasif\tripSorter;
error_reporting(E_ALL);
ini_set('display_errors', 'On');
require_once __DIR__ . '/vendor/autoload.php';

use Wasif\tripSorter\BoardingCards\BoardingcardAirportbus;
use Wasif\tripSorter\BoardingCards\BoardingcardFlight;
use Wasif\tripSorter\BoardingCards\BoardingcardTrain;

    // Creating trip object
    $journey = new  Trip();

    // adding trips
    $journey->addCard(new BoardingcardFlight('Stockholm', 'New York JFK', '7B', 'SK22', '22'));
    $journey->addCard(new BoardingcardFlight('Gerona Airport', 'Stockholm', '3A', 'SK455', '45B', '344'));
    $journey->addCard(new BoardingcardTrain('Madrid', 'Barcelona', '45B', '78A'));
    $journey->addCard(new BoardingcardAirportbus('Barcelona', 'Gerona Airport'));

    // sort boarding cards
    $journey->sortCard();
    
    // pring string representation
    echo ($journey->toHtml());
?>

