<?php
/**
 * Class Trip
 */

namespace Wasif\tripSorter;

use Wasif\tripSorter\BoardingCards\BoardingcardAbstract;
use Wasif\tripSorter\libs\Sorter;


/**
 * Class Trip
 *
 * Managing and Saving all boarding card with this class
 *
 * @package Wasif\TripSorter
 * @author Wasif Khalil <wk@wasiff.com>
 */
class Trip{

    /**
     * @var
	 * passenger boarding card
     */
    private $boardingCard;
	
    /**
     * @var
	  * passenger sorted boarding card
     */
    private $sortedBaseBoardingCard;

    /**
     * Constructor
     */
    public function __construct(){}

    /**
	 * get boarding card of passenger
     * @return mixed
     */
    public function getBoardingCards(){
        return $this->boardingCard;
    }

    /**
     * run sorting algorigthm from sorter class
     */
    public function sortCard(){
        $this->sortedBaseBoardingCard = Sorter::sort($this->boardingCard);
    }


    /**
	 * add card to boarding card list
     * @param BoardingcardAbstract $boardingCard
     */
    public function addCard(BoardingcardAbstract $boardingCard){
        $this->boardingCard[] = $boardingCard;
    }
    /**
     * Generating the string representation of the trip of the object Trip class that is provided
     *
     * @return string $str String representation of the class
     */

    public function toHtml()
    {
        /**
         * Putting string in the list
         */
         $str = '<ol>';

        foreach( $this->sortedBaseBoardingCard as $boarding){

            $str .= '<li>' . $boarding->toString() . '</li>' ;
        }
        /*
         *  Final Arrival Message.
         */

        $str .= '<li>You have arrived at your final destination.</li>';
        $str .= '</ol>';

        return $str;
    }
}

