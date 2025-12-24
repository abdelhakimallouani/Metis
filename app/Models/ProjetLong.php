<?php

class ProjetLong extends Projet
{
    private $budget;
    private $phase;


    function __construct($titre,$dateDebut,$idMembre, $budget, $phase)
    {
        parent::__construct($titre, $dateDebut, $idMembre);
        $this . $budget->$budget;
        $this . $phase->$phase;
    }
}
