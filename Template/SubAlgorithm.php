<?php
/**
 * Created by PhpStorm.
 * User: B
 * Date: 12/24/2015
 * Time: 9:15 PM
 */

abstract class SubAlgorithm{
    public function make(){
        return $this->addBread()
            ->addCheese()
            ->addUniqueIngredient()
            ->addMayo();
    }

    // The purposes of an abstract method is that it must be implemented
    // by any class that extends this abstract class.  The strength
    // of the template design pattern is that this class can then
    // be defined in multiple ways in each subclass, while keeping the above algorithm
    // in the make() function intact.
    abstract protected function addUniqueIngredient();

    protected function addBread(){
        var_dump('add bread');
        return $this;
    }

    protected function addCheese(){
        var_dump('add cheese');
        return $this;
    }

    protected function addMayo(){
        var_dump('add mayo');
        return $this;
    }
}