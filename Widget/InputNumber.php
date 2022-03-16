<?php

require_once "Widget.php";

class InputNumber extends Widget
{
    public function construireHTML(): string
    {
        // TODO: Implement construireHTML() method.
        return sprintf("<input type='number' value='%s' class='%s'>",$this->getValue(), $this->getClasseCSS());
    }

}

$monInputNumber = new InputNumber();
$monInputNumber->setValue("Hello");
$monInputNumber->setClasseCSS("LaClasse");
echo $monInputNumber->construireHTML();
