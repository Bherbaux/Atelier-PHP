<?php

abstract class Widget
{
    private $value;
    private $classeCSS;

    /**
     * @return mixed
     */
    public function getValue()
    {
        return $this->value;
    }

    /**
     * @param mixed $value
     */
    public function setValue($value): void
    {
        $this->value = $value;
    }

    /**
     * @return mixed
     */
    public function getClasseCSS()
    {
        return $this->classeCSS;
    }

    /**
     * @param mixed $classeCSS
     */
    public function setClasseCSS($classeCSS): void
    {
        $this->classeCSS = $classeCSS;
    }

    public abstract function construireHTML():string;

}