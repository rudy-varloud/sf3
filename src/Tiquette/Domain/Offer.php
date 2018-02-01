<?php
/**
 * Created by PhpStorm.
 * User: metinet
 * Date: 1/31/18
 * Time: 7:29 AM
 */

namespace Tiquette\Domain;


class Offer
{
    private $proposition;
    private $ticketId;
    private $acheteurId;
    private $price;

    /**
     * Offer constructor.
     * @param $proposition
     * @param $ticketId
     * @param $acheteurId
     * @param $price
     */
    public function __construct($proposition, $ticketId, $acheteurId, $price)
    {
        $this->proposition = $proposition;
        $this->ticketId = $ticketId;
        $this->acheteurId = $acheteurId;
        $this->price = $price;
    }

    /**
     * Offer constructor.
     * @param $proposition
     * @param $price
     */


    /**
     * @return mixed
     */
    public function getProposition()
    {
        return $this->proposition;
    }

    /**
     * @return mixed
     */
    public function getPrice()
    {
        return $this->price;
    }

    public function getTicketId()
    {
        return $this->ticketId;
    }

    public function getAcheteurId()
    {
        return $this->acheteurId;
    }





}