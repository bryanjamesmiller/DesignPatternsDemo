<?php

interface BusinessInterface
{
    // Notice this must be specified as a "public" function.
    // Otherwise the classes won't be able to reference it.
    public function buy();
}