<?php

/**********************************************************
 * Simple class for massaging the output of the quotes.
 * - Bolds capital words in a quote.
 ********************************************************/
class Masseuse extends Application {

    function __construct() {
        parent::__construct();
    }

    //-------------------------------------------------------------
    //  Function to bold capital letters
    //-------------------------------------------------------------
    function  capitalBold() 
    {
        //get page's information
        $CI = & get_instance();
        
        //output of that object into a buffer
        $page = $CI->output->get_output();
        
        //get dom object
        $dom = new DOMDocument();
        $dom->loadHTML($page);
        
        $paragraphList = $dom->getElementsByTagName('p');
        
        //search for these things (pattern)
        $search = array ( '/([A-Z]+[A-Za-z]*)/');
        
        //character to replace the things we want to replace
        $replace = array ( '<strong>$1</strong>');
        
        
        foreach($paragraphList as $p)
        {
            //if the paragraph tag is a lead then bold it
            if  ( $p->getAttribute( 'class' ) === 'lead' )
            {
               $string = $p->nodeValue;
               
               //replace with bold
               $string = preg_replace( $search, $replace, $string );
               
               //Create a new tag object
               $frag = $dom->createDocumentFragment();
               $frag->appendXML($string);
               
               //Add the object to the element
               $p->nodeValue = '';
               $p->appendChild($frag);
            }
        }
        //output the changes back to the screen
        echo $dom->saveHTML();
    }
    
}