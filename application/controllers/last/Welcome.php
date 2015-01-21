<?php

class Welcome extends Application {

    function __construct() {
        parent::__construct();
        
    }

    //-------------------------------------------------------------
    //  The normal pages
    //-------------------------------------------------------------

    function index() 
    {
        // this is the view we want shown
        $this->data['pagebody'] = 'justone';
        $record = $this->quotes->last();
        $this->data['mug'] = $record['mug'];
        $this->data['who'] = $record['who'];
        $this->data['what'] = $record['what'];
        $this->render();
    }
    
}