<?php 

if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class MY_Controller extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
    }
    
    public function index()
    {
        
    }
    
    public function view()
    {
        $this->load->library('Core/Blade');
        
    }
}
