<?php

/**
 * Our homepage. Show a table of all the author pictures. Clicking on one should show their quote.
 * Our quotes model has been autoloaded, because we use it everywhere.
 * 
 * controllers/Welcome.php
 *
 * ------------------------------------------------------------------------
 */
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
        $this->render();
    }

}

/* End of file Welcome.php */
/* Location: application/controllers/Welcome.php */