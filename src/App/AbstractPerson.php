<?php


namespace App;


abstract class AbstractPerson
{

    /**
     * Surname
     * @var string
     */
    protected $surname;

    /**
     * AbstractPerson constructor.
     * @param string $surname
     */
    public function __construct(string $surname)
    {
        $this->surname = $surname;
    }

    /**
     * Get The person's title
     * @return string
     */
    abstract protected function getTitle();

    /**
     * Get the person's name
     *
     * @return string
     */
    public function getNameAndTitle(){
        return $this->getTitle() . ' ' .$this->surname;
    }
}