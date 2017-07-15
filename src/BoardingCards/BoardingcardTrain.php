<?php
/**
 * Class BoardingcardTrain
 */

namespace Wasif\tripSorter\BoardingCards;
use Wasif\tripSorter\BoardingCards\BoardingcardAbstract;


/**
 * Class BoardingcardTrain
 * Flight boarding that inherits BoardingcardAbstract
 *
 * @package Wasif\TripSorter\BoardingCards
 * @author Wasif Khalil <wk@wasiff.com>
 */
class BoardingcardTrain extends BoardingcardAbstract{
    /**
     * @var string
	 * passenger train
     */
    private $train;

    /**
     * Constructor for BoardingcardTrain
     *
     * @param string $departureLoc Departing point for a boarding pass. Origin of the traveller
     * @param string $arrivalLoc Arrival Location for a boarding pass. This is the destination point for one leg of trip, for a traveller
     * @param string $seatNo Seat # for a boarding pass, common to all kinds of boarding passes
     * @param string $train This denotes train # for a train boarding pass
     */
    function __construct($departureLoc, $arrivalLoc, $seatNo, $train){
        /*
         *  This is the step that creates the inheritance chain,
         *  so BoardingcardTrain inherits from BoardingCards.
         */

        parent::__construct($departureLoc, $arrivalLoc, $seatNo);

        $this->train = $train;
    }

    /**
     * String representation of the class object
     *
     */
    public function toString(){
        /** @var $this BoardingcardTrain */
        return 'Take train ' . $this->train . ' from ' . $this->get('departureLoc') . ' to ' . $this->get('arrivalLoc') . '. Sit in seat ' . $this->get('seatNo') . '.';
    }

}

