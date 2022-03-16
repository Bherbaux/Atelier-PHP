<?php

include_once "Widget.php";

class TextArea extends Widget
{
    public function construireHTML(): string
    {
        // TODO: Implement construireHTML() method.
        return sprintf("<textarea class='%s'>%s</textarea>", $this->getClasseCSS(),$this->getValue());
    }
}

$monTextArea = new TextArea();
$monTextArea->setValue("Hello");
$monTextArea->setClasseCSS("LaClasse");
echo $monTextArea->construireHTML();