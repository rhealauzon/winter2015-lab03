<?php

class Bingo extends Application {

    function __construct() 
    {
        parent::__construct();
        
        // this is the view we want shown
        $this->data['pagebody'] = 'justone';

    }

    //-------------------------------------------------------------
    //  The normal pages
    //-------------------------------------------------------------

    function index() 
    {
        $record = $this->quotes->get(5);
        $this->data['mug'] = $record['mug'];
        $this->data['who'] = $record['who'];
        $this->data['what'] = $record['what'];
        
        $this->render();
    }
    
    function wisdom() 
    {
        
        $record = $this->quotes->get(6);
        $this->data['mug'] = $record['mug'];
        $this->data['who'] = $record['who'];
        $this->data['what'] = $record['what'];
        
        $this->render();
    }

}

