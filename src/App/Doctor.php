<?php

namespace App;

class Doctor extends AbstractPerson{

    /**
     * @inheritDoc
     */
    protected function getTitle()
    {
        return 'Dr.';
    }
}