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
    private $price;

    /**
     * Offer constructor.
     * @param $proposition
     * @param $price
     */
    public function __construct($proposition, $price)
    {
        $this->proposition = $proposition;
        $this->price = $price;
    }

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





}