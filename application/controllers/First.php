<?php

/**
 * Our homepage. Show a table of all the author pictures. Clicking on one should show their quote.
 * Our quotes model has been autoloaded, because we use it everywhere.
 * 
 * controllers/Welcome.php
 *
 * ------------------------------------------------------------------------
 */
class First extends Application {

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
        $record = $this->quotes->first();
        $this->data['mug'] = $record['mug'];
        $this->data['who'] = $record['who'];
        $this->data['what'] = $record['what'];
        $this->render();
    }
    
    
    // Sleep link 
    function zzz() 
    {
        //get second record 
        $record = $this->quotes->get(1);
        
        //Update information
        $this->data['mug'] = $record['mug'];
        $this->data['who'] = $record['who'];
        $this->data['what'] = $record['what'];
        $this->render();           
    }
    
    //show/3
    function gimme($id) 
    {
        //get second record 
        $record = $this->quotes->get($id);
        
        //Update information
        $this->data['mug'] = $record['mug'];
        $this->data['who'] = $record['who'];
        $this->data['what'] = $record['what'];
        $this->render();           
    }
    
}
