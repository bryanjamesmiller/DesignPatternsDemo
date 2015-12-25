<?php

require_once "EbookInterface.php";

class Kindle implements EbookInterface
{
    function turn_on_ebook()
    {
        return "powered on";
    }

    function click_next_page()
    {
        return "clicked next page";
    }
}