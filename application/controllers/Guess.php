<?php

class Guess extends Application {

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
        
        //fetch the data about the first quote
        $record = $this->quotes->get(4);
        $this->data['mug'] = $record['mug'];
        $this->data['who'] = $record['who'];
        $this->data['what'] = $record['what'];
        
        $this->render();
    }

}
