<?php
/**
 * Created by PhpStorm.
 * User: metinet
 * Date: 1/29/18
 * Time: 7:03 AM
 */

class Ticket
{
    private $titre;
    private $description;
    private $date;
    private $dateVente;

    /**
     * Ticket constructor.
     * @param $titre
     * @param $description
     * @param $date
     * @param $dateVente
     */
    public function __construct($titre, $description, $date, $dateVente)
    {
        $this->titre = $titre;
        $this->description = $description;
        $this->date = $date;
        $this->dateVente = $dateVente;
    }

    /**
     * @return mixed
     */
    public function getTitre()
    {
        return $this->titre;
    }

    /**
     * @return mixed
     */
    public function getDescription()
    {
        return $this->description;
    }

    /**
     * @return mixed
     */
    public function getDate()
    {
        return $this->date;
    }

    /**
     * @return mixed
     */
    public function getDateVente()
    {
        return $this->dateVente;
    }


    public function validateDate($date, $dateVente){
        if($dateVente<$date){

        }
    }




}