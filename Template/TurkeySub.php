<?php
/**
 * Created by PhpStorm.
 * User: B
 * Date: 12/24/2015
 * Time: 9:13 PM
 */

include_once 'SubAlgorithm.php';

class TurkeySub extends SubAlgorithm {

    protected function addUniqueIngredient()
    {
        var_dump("Adding the turkey");
        return $this;
    }
}