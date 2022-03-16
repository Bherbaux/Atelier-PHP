<?php

class Horloge
{
    private $heure = 0;
    private $minute = 0;
    private $seconde = 0;

    public function getHeure()
    {
        return $this->heure;
    }

    public function setHeure($pHeure)
    {
        if ($pHeure < 0)
        {
            $this->heure = 0;
        }
        elseif ($pHeure > 23)
        {
            $this->heure = 23;
        }else
        {
            $this->heure = $pHeure;
        }
    }

    /**
     * @return int
     */
    public function getMinute(): int
    {
        return $this->minute;
    }

    /**
     * @param int $minute
     */
    public function setMinute(int $minute): void
    {
        if ($minute < 0)
        {
            $this->minute = 0;
        }elseif ($minute > 59)
        {
            $this->minute = 59;
        }else
        {
            $this->minute = $minute;
        }
    }

    /**
     * @return int
     */
    public function getSeconde(): int
    {
        return $this->seconde;
    }

    /**
     * @param int $seconde
     */
    public function setSeconde(int $seconde): void
    {
        if ($seconde < 0)
        {
            $this->seconde = 0;
        }elseif ($seconde > 59)
        {
            $this->seconde = 59;
        }else
        {
            $this->seconde = $seconde;
        }
    }

    public function affiche()
    {
        echo sprintf ("Il est %d:%d:%d\n", $this->heure,$this->minute, $this->seconde);
    }

    public function avanceDUneSeconde()
    {
        $this->seconde++;

        if ($this->seconde > 59)
        {
            $this->seconde = 0;
            $this->minute++;

            if ($this->minute > 59)
            {
                $this->minute = 0;
                $this->heure++;

                if ($this->heure > 23)
                {
                    $this->heure = 0;
                }
            }
        }
    }
}

$monHeure = new Horloge();

$monHeure->setHeure(23);
$monHeure->setMinute(59);
$monHeure->setSeconde(59);
$monHeure->affiche();
$monHeure->avanceDUneSeconde();
$monHeure->affiche();

$monHeure->setHeure(12);
$monHeure->setMinute(30);
$monHeure->setSeconde(59);
$monHeure->affiche();
$monHeure->avanceDUneSeconde();
$monHeure->affiche();

$monHeure->setHeure(12);
$monHeure->setMinute(30);
$monHeure->setSeconde(00);
$monHeure->affiche();
$monHeure->avanceDUneSeconde();
$monHeure->affiche();
