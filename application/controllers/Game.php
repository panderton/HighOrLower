<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Game extends MY_Controller
{
    public function index()
    {
        //Core
        parent::view();
        $this->_view();
        
        $this->blade->render('Game');
    }
    
    private function _view()
    {
        $Card_Array = $this->SetCards();
        $Shuffled_Cards = $this->ShuffleCards($Card_Array);
        $this->blade->set('Cards',$Shuffled_Cards);
    }
    
    public function SetCards()
    {
            $Values = array('2', '3', '4', '5', '6', '7', '8', '9', '10', 'Jack', 'Queen', 'King', 'Ace');
            $Suits  = array('Spades', 'Hearts', 'Diamonds', 'Clubs');

            $Cards = array();
            foreach ($Suits as $Suit) {
                foreach ($Values as $Value) {
                    $Cards[] = $Value . ' of ' . $Suit;
                }
            }
            return $Cards;
    }

    public function ShuffleCards(array $Cards)
    {
            $Total = count($Cards);

            foreach ($Cards as $Key => $Card) {
                    // Pick a random second card.
                    $Card2_Key = mt_rand(1, $Total) - 1;
                    $Card2 = $Cards[$Card2_Key];

                    // Swap the positions of the two cards.
                    $Cards[$Key] = $Card2;
                    $Cards[$Card2_Key] = $Card;
            }

            return $Cards;
    }
}
