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

        
    }
}
