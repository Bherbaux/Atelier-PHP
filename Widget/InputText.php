<?php
require_once "Widget.php";

class InputText extends Widget
{
    public function construireHTML(): string
    {
        // TODO: Implement construireHTML() method.
        return sprintf("<input type='text' value='%s' class='%s'>",$this->getValue(), $this->getClasseCSS());
    }

}

$monInputText = new InputText();
$monInputText->setValue("Hello");
$monInputText->setClasseCSS("LaClasse");
echo $monInputText->construireHTML();