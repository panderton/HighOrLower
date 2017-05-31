<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Game extends MY_Controller
{
    // Have the cards and values easily accessable
    private $Values = array('2', '3', '4', '5', '6', '7', '8', '9', '10', 'Jack', 'Queen', 'King', 'Ace');
    private $Suits  = array('Spades', 'Hearts', 'Diamonds', 'Clubs');
    private $Deck = array();
    
    public function index()
    {
        // Core
        parent::view();
        $this->_view();
        
        // Render the view
        $this->blade->render('Game');
    }
    
    private function _view()
    {
        // Build the card deck
        $Card_Array = $this->SetCards();
        $this->Deck = $this->ShuffleCards($Card_Array);
        
        // Set the Card deck in blade for use on view
        $this->blade->set('Deck',$this->Deck);
    }
    
    public function NextCard()
    {
        $Outcome = 0;
        // Cycle to the next card in the deck and compare its value with first
        foreach($this->Deck as $Key => $Card)
        {
            // Compare the last card with the next card
            if($Card)
            {
                $Outcome = 1;
            }
        }    
        
        // Return as JSON so JQuery can display the next card and outcome
        echo json_encode(array('Deck' => $this->Deck, 'NextCard' => $Card, 'Outcome' => $Outcome));
    }

    public function SetCards()
    {
        $Cards = array();
        // For each Suit assign a card value
        foreach ($this->Suits as $Suit) {
            foreach ($this->Values as $Value) {
                $Cards[] = $Value . ' of ' . $Suit;
            }
        }
        return $Cards;
    }

    public function ShuffleCards(array $Cards)
    {
        $Total = count($Cards);

        foreach ($Cards as $Key => $Card) {
            // Random another card.
            $Card2_Key = mt_rand(1, $Total) - 1;
            $Card2 = $Cards[$Card2_Key];

            // Change their positions.
            $Cards[$Key] = $Card2;
            $Cards[$Card2_Key] = $Card;
        }

        return $Cards;
    }
}
