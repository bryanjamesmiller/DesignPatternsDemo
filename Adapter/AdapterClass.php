<?php

require_once "BookInterface.php";

// The adapter needs to implement the interface that we're trying to
// adhere to.
class AdapterClass implements BookInterface{

    protected $kindle;
    function __construct (Kindle $kindle){
        $this->kindle = $kindle;
    }

    function open_book()
    {
        return $this->kindle->turn_on_ebook();
    }

    function turn_page()
    {
        return $this->kindle->click_next_page();
    }
}