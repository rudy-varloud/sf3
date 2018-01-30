<?php
/**
 * Created by PhpStorm.
 * User: metinet
 * Date: 1/29/18
 * Time: 9:05 AM
 */

namespace Tiquette\Domain;


class Account
{
    private $email;
    private $username;
    private $password;

    /**
     * Account constructor.
     * @param $email
     * @param $username
     * @param $password
     */
    public function __construct($email, $username, $password)
    {
        $this->email = $email;
        $this->username = $username;
        $this->password = $password;
    }

    public static function submit(string $email, string $username, string $password): self
    {
        return new self($email, $username, $password);
    }

    /**
     * @return mixed
     */
    public function getEmail()
    {
        return $this->email;
    }

    /**
     * @return mixed
     */
    public function getUsername()
    {
        return $this->username;
    }

    /**
     * @return mixed
     */
    public function getPassword()
    {
        return $this->password;
    }


}